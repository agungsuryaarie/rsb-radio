@extends('layouts.app')
@section('content')
    <section class="section about-services spad">
        <div class="container">
            <div class="section-title center-title">
                <h2>Galeri Foto</h2>
                <h1>Galeri Foto</h1>
            </div>
            <div class="row-image">
                @foreach ($album as $a)
                    <div class="card-image">
                        <a href="{{ route('galeri.show', $a->id) }}">
                            <img src="{{ url('storage/album', $a->cover) }}">
                            <h3>{{ $a->name }} </h3>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
