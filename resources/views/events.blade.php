@extends('layouts.app')
@section('content')
    <section class="section bg-body-tertiary posts-entry">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Business</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
            </div>
            <div class="row g-3">
                <div class="col-md-12">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <div class="blog-entry">
                                <a href="single.html" class="img-link">
                                    <img src="{{ 'front-template/images/events-1.png' }}" alt="Image" class="img-fluid">
                                </a>
                                <span class="date">Apr. 14th, 2022</span>
                                <h2><a class="nav-link active" href="#">MANGKAL ON SKUL : SKULPRIZE 2023</a></h2>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="blog-entry">
                                <a href="single.html" class="img-link">
                                    <img src="{{ 'front-template/images/events-1.png' }}" alt="Image" class="img-fluid">
                                </a>
                                <span class="date">Apr. 14th, 2022</span>
                                <h2><a class="nav-link active" href="#">MANGKAL ON SKUL : SKULPRIZE 2023</a></h2>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="blog-entry">
                                <a href="single.html" class="img-link">
                                    <img src="{{ 'front-template/images/events-1.png' }}" alt="Image" class="img-fluid">
                                </a>
                                <span class="date">Apr. 14th, 2022</span>
                                <h2><a class="nav-link active" href="#">MANGKAL ON SKUL : SKULPRIZE 2023</a></h2>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="blog-entry">
                                <a href="single.html" class="img-link">
                                    <img src="{{ 'front-template/images/events-1.png' }}" alt="Image" class="img-fluid">
                                </a>
                                <span class="date">Apr. 14th, 2022</span>
                                <h2><a class="nav-link active" href="#">MANGKAL ON SKUL : SKULPRIZE 2023</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
