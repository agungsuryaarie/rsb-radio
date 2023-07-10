@extends('layouts.app')
@section('content')
    <section class="section galeri">
        <div class="container" data-aos="fade-up">
            <div class="row galeri-container">
                <div class="col-lg-4 col-md-6 galeri-item filter-app">
                    <div class="galeri-wrap">
                        <img src="{{ 'front-template/images/tour-3.jpg' }}" class="img-galeri" alt="">
                        <div class="galeri-links">
                            <a href="{{ 'front-template/images/tour-4.jpg' }}" data-gallery="portfolioGallery"
                                class="galeri-lightbox"><i class="bi bi-zoom-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 galeri-item filter-app">
                    <div class="galeri-wrap">
                        <img src="{{ 'front-template/images/tour-3.jpg' }}" class="img-galeri" alt="">
                        <div class="galeri-links">
                            <a href="{{ 'front-template/images/tour-3.jpg' }}" data-gallery="portfolioGallery"
                                class="galeri-lightbox"><i class="bi bi-zoom-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
