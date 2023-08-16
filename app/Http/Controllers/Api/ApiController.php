<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserPublic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function login(Request $request)
    {
        $message = array(
            'email.required' => 'Mohon diisi.',
            'email.email' => 'Penulisan email tidak benar.',
            'password.required' => 'Mohon diisi.',
        );
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ], $message);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $credentials = $request->only('email', 'password');
        $isEmailRegistered = UserPublic::where('email', $credentials['email'])->exists();

        if (!$isEmailRegistered) {
            return response()->json([
                'message' => 'Email tidak terdaftar.',
            ], 401);
        }

        if (Auth::guard('client')->attempt($credentials)) {
            $user = Auth::guard('client')->user();
            $token = $user->createToken('ClientToken')->plainTextToken;

            return response()->json([
                'token' => $token,
                'user' => $user,
            ]);
        }

        return response()->json([
            'message' => 'Email atau Password salah.',
        ], 401);
    }
    public function register(Request $request)
    {
        $message = array(
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Penulisan email tidak benar.',
            'email.unique' => 'Email sudah digunakan.',
            'nohp.required' => 'Nomor Hp/WhatsApp harus diisi.',
            'nohp.unique' => 'Nomor Hp/WhatsApp sudah digunakan.',
            'password.required' => 'Password harus diisi.',
            'password.confirmed' => 'Password tidak sesuai dengan Konfirmasi Password.',
            'password.min' => 'Password minimal 8 karakter.',
            'password_confirmation.required' => 'Konfirmasi Password harus diisi.',
            'password_confirmation.same' => 'Konfirmasi Password tidak sesuai dengan Password.',
            'password_confirmation.min' => 'Password minimal 8 karakter.',
        );
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users_public|max:255',
            'nohp' => 'required|string|max:20|unique:users_public',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|min:8|same:password',
        ], $message);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = new UserPublic([
            'name' => $request->name,
            'email' => $request->email,
            'nohp' => $request->nohp,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return response()->json(['message' => 'Registrasi berhasil.'], 201);
    }

    public function getUserData(Request $request)
    {
        if (Auth::check()) {
            $user = $request->user();
            return response()->json($user);
        } else {
            return response()->json(['error' => 'Anda belum login atau tidak memiliki token'], 401);
        }
    }
    public function logout(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete();
        return response()->json([
            'message' => 'Sampai ketemu lagi',
        ]);
    }
}
