@extends('layouts.app')

@section('content')
    <div class="section search-result-wrap">
        <div class="container pt-7 ">
            <div class="row posts-entry">
                <div class="col-lg-8">
                    <div class="blog-entry d-flex blog-entry-search-item">
                        <a href="single.html" class="img-link me-4">
                            <img src="{{ 'front-template/images/4.png' }}" alt="Image" class="img-fluid">
                        </a>
                        <div>
                            <span class="date">Apr. 14th, 2022</span>
                            <h2><a class="nav-link active" href="#">Thought you loved Python? Wait until you meet
                                    Rust</a></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel
                                voluptas.</p>
                            <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                        </div>
                    </div>

                    <div class="blog-entry d-flex blog-entry-search-item">
                        <a href="single.html" class="img-link me-4">
                            <img src="{{ 'front-template/images/4.png' }}" alt="Image" class="img-fluid">
                        </a>
                        <div>
                            <span class="date">Apr. 14th, 2022</span>
                            <h2><a class="nav-link active" href="#">Thought you loved Python? Wait until you meet
                                    Rust</a></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel
                                voluptas.</p>
                            <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                        </div>
                    </div>

                    <div class="blog-entry d-flex blog-entry-search-item">
                        <a href="single.html" class="img-link me-4">
                            <img src="{{ 'front-template/images/4.png' }}" alt="Image" class="img-fluid">
                        </a>
                        <div>
                            <span class="date">Apr. 14th, 2022</span>
                            <h2><a class="nav-link active" href="#">Thought you loved Python? Wait until you meet
                                    Rust</a></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel
                                voluptas.</p>
                            <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                        </div>
                    </div>

                    <div class="blog-entry d-flex blog-entry-search-item">
                        <a href="single.html" class="img-link me-4">
                            <img src="{{ 'front-template/images/4.png' }}" alt="Image" class="img-fluid">
                        </a>
                        <div>
                            <span class="date">Apr. 14th, 2022</span>
                            <h2><a class="nav-link active" href="#">Thought you loved Python? Wait until you meet
                                    Rust</a></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel
                                voluptas.</p>
                            <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                        </div>
                    </div>

                    <div class="blog-entry d-flex blog-entry-search-item">
                        <a href="single.html" class="img-link me-4">
                            <img src="{{ 'front-template/images/4.png' }}" alt="Image" class="img-fluid">
                        </a>
                        <div>
                            <span class="date">Apr. 14th, 2022</span>
                            <h2><a class="nav-link active" href="#">Thought you loved Python? Wait until you meet
                                    Rust</a></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel
                                voluptas.</p>
                            <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
                        </div>
                    </div>

                    <div class="row text-start pt-5 border-top">
                        <div class="col-md-12">
                            <div class="custom-pagination">
                                <span>1</span>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <span>...</span>
                                <a href="#">15</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 sidebar">
                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <h3 class="heading">Popular Posts</h3>
                        <div class="post-entry-sidebar">
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="{{ 'front-template/images/4.png' }}" alt="Image placeholder"
                                            class="me-4 rounded">
                                        <div class="text">
                                            <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ 'front-template/images/4.png' }}" alt="Image placeholder"
                                            class="me-4 rounded">
                                        <div class="text">
                                            <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ 'front-template/images/4.png' }}" alt="Image placeholder"
                                            class="me-4 rounded">
                                        <div class="text">
                                            <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Categories</h3>
                        <ul class="categories">
                            <li><a href="#">Food <span>(12)</span></a></li>
                            <li><a href="#">Travel <span>(22)</span></a></li>
                            <li><a href="#">Lifestyle <span>(37)</span></a></li>
                            <li><a href="#">Business <span>(42)</span></a></li>
                            <li><a href="#">Adventure <span>(14)</span></a></li>
                        </ul>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Tags</h3>
                        <ul class="tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Freelancing</a></li>
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Freelancing</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
