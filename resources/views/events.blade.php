@extends('layouts.app')
@section('content')
    <section class="section bg-body-tertiary posts-entry">
        <div class="container">
            <div class="section-title center-title">
                <h2>Events</h2>
                <h1>Events</h1>
            </div>
            <div class="row g-3">
                <div class="col-md-12">
                    <div class="row g-3">
                        @foreach ($events as $e)
                            <div class="col-md-3">
                                <div class="blog-entry">
                                    <a href="single.html" class="img-link">
                                        <img src="{{ url('storage/event', $e->cover) }}" alt="Image" class="img-fluid">
                                    </a>
                                    <h2><a class="nav-link active" href="#">{{ $e->title }} </a></h2>
                                    <span class="date">{{ $e->created_at }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
