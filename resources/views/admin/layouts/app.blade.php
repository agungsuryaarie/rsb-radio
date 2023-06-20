<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('admin.layouts.head')

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('admin.layouts.navbar')

            <div class="main-sidebar sidebar-style-2">
                @include('admin.layouts.menu')
            </div>

            <div class="main-content">
                @yield('content')
            </div>

            @include('admin.layouts.footer')
        </div>
    </div>
