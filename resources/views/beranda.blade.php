@extends('layouts.app')


@section('content')
    <div class="section">
        <div class="container pt-7">
            <div class="row align-items-stretch retro-layout-alt">
                <div class="col-md-12">
                    <a href="single.html" class="img-link"><img src="{{ 'front-template/images/baner2.png' }}" alt="Image"
                            class="img-baner"></a>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="row align-items-stretch retro-layout">
                <div class="col-md-6">
                    <a href="single.html" class="h-entry img-5 b-height gradient">
                        <div class="featured-img"
                            style="background-image: url('{{ 'front-template/images/tour-2.jpg' }}');">
                        </div>
                        <div class="videos__large__item__text">
                            <h4>Martin Garrix & Pierce Fulton feat. Mike Shinoda - Waiting For Tomorrow (Official Video)
                            </h4>
                            <ul>
                                <li>02:35:18</li>
                                <li>Dec 17, 2019</li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="single.html" class="h-entry mb-30 v-height gradient">
                        <div class="featured-img"
                            style="background-image: url('{{ 'front-template/images/tour-1.jpg' }}');">
                        </div>

                        <div class="text">
                            <span class="date">Apr. 14th, 2022</span>
                            <h2>AI can now kill those annoying cookie pop-ups</h2>
                        </div>
                    </a>
                    <a href="single.html" class="h-entry mb-30 v-height gradient">
                        <div class="featured-img"
                            style="background-image: url('{{ 'front-template/images/tour-3.jpg' }}');">
                        </div>

                        <div class="text">
                            <span class="date">Apr. 14th, 2022</span>
                            <h2>Don’t assume your user data in the cloud is safe</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="single.html" class="h-entry mb-30 v-height gradient">

                        <div class="featured-img"
                            style="background-image: url('{{ 'front-template/images/tour-4.jpg' }}');"></div>

                        <div class="text">
                            <span class="date">Apr. 14th, 2022</span>
                            <h2>Startup vs corporate: What job suits you best?</h2>
                        </div>
                    </a>
                    <a href="single.html" class="h-entry v-height gradient">

                        <div class="featured-img"
                            style="background-image: url('{{ 'front-template/images/tour-5.jpg' }}');"></div>

                        <div class="text">
                            <span class="date">Apr. 14th, 2022</span>
                            <h2>Thought you loved Python? Wait until you meet Rust</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End retroy layout blog posts -->

    <!-- Start posts-entry -->
    <section class="section posts-entry posts-entry-sm bg-body-tertiary ">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Program Unggulan</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a href="single.html" class="img-link">
                            <img src="{{ 'front-template/images/1.png' }}" alt="Image" class="img-fluid">
                        </a>
                        <span class="date">Apr. 14th, 2022</span>
                        <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a href="single.html" class="img-link">
                            <img src="{{ 'front-template/images/2.jpg' }}" alt="Image" class="img-fluid">
                        </a>
                        <span class="date">Apr. 14th, 2022</span>
                        <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a href="single.html" class="img-link">
                            <img src="{{ 'front-template/images/3.png' }}" alt="Image" class="img-fluid">
                        </a>
                        <span class="date">Apr. 14th, 2022</span>
                        <h2><a href="single.html">UK sees highest inflation in 30 years</a></h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a href="single.html" class="img-link">
                            <img src="{{ 'front-template/images/4.png' }}" alt="Image" class="img-fluid">
                        </a>
                        <span class="date">Apr. 14th, 2022</span>
                        <h2><a href="single.html">Don’t assume your user data in the cloud is safe</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="track spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h2>Latest tracks</h2>
                        <h1>Music podcast</h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="track__all">
                        <a href="#" class="primary-btn border-btn">View all tracks</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 p-0">
                    <div class="track__content nice-scroll" tabindex="1" style="overflow-y: hidden; outline: none;">
                        <div class="single_player_container">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_1"
                                data-url="{{ 'front-template/music-files/1.mp3' }}" id="jp_jplayer_0"
                                style="width: 0px; height: 0px;"><img id="jp_poster_0"
                                    style="width: 0px; height: 0px; display: none;"><audio id="jp_audio_0"
                                    preload="metadata" src="{{ 'front-template/music-files/1.mp3' }}"></audio>
                            </div>
                            <div class="jp-audio jp_container_1" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar" style="width: 100%;">
                                                <div>
                                                    <div class="jp-play-bar" style="width: 0%;">
                                                        <div class="jp-current-time" role="timer" aria-label="time">
                                                            00:00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">01:22</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_2" data-url="music-files/2.mp3"
                                id="jp_jplayer_1" style="width: 0px; height: 0px;"><img id="jp_poster_1"
                                    style="width: 0px; height: 0px; display: none;"><audio id="jp_audio_1"
                                    preload="metadata"
                                    src="file:///C:/Users/ASUS/Downloads/Djoz-master/Djoz-master/music-files/2.mp3"></audio>
                            </div>
                            <div class="jp-audio jp_container_2" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar" style="width: 100%;">
                                                <div>
                                                    <div class="jp-play-bar" style="width: 0%;">
                                                        <div class="jp-current-time" role="timer" aria-label="time">
                                                            00:00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">01:02</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_3" data-url="music-files/3.mp3"
                                id="jp_jplayer_2" style="width: 0px; height: 0px;"><img id="jp_poster_2"
                                    style="width: 0px; height: 0px; display: none;"><audio id="jp_audio_2"
                                    preload="metadata"
                                    src="file:///C:/Users/ASUS/Downloads/Djoz-master/Djoz-master/music-files/3.mp3"></audio>
                            </div>
                            <div class="jp-audio jp_container_3" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar" style="width: 100%;">
                                                <div>
                                                    <div class="jp-play-bar" style="width: 0%;">
                                                        <div class="jp-current-time" role="timer" aria-label="time">
                                                            00:00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">03:10</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_4" data-url="music-files/4.mp3"
                                id="jp_jplayer_3" style="width: 0px; height: 0px;"><img id="jp_poster_3"
                                    style="width: 0px; height: 0px; display: none;"><audio id="jp_audio_3"
                                    preload="metadata"
                                    src="file:///C:/Users/ASUS/Downloads/Djoz-master/Djoz-master/music-files/4.mp3"></audio>
                            </div>
                            <div class="jp-audio jp_container_4" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar" style="width: 100%;">
                                                <div>
                                                    <div class="jp-play-bar" style="width: 0%;">
                                                        <div class="jp-current-time" role="timer" aria-label="time">
                                                            00:00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">01:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_5" data-url="music-files/5.mp3"
                                id="jp_jplayer_4" style="width: 0px; height: 0px;"><img id="jp_poster_4"
                                    style="width: 0px; height: 0px; display: none;"><audio id="jp_audio_4"
                                    preload="metadata"
                                    src="file:///C:/Users/ASUS/Downloads/Djoz-master/Djoz-master/music-files/5.mp3"></audio>
                            </div>
                            <div class="jp-audio jp_container_5" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar" style="width: 100%;">
                                                <div>
                                                    <div class="jp-play-bar" style="width: 0%;">
                                                        <div class="jp-current-time" role="timer" aria-label="time">
                                                            00:00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">01:19</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_6" data-url="music-files/6.mp3"
                                id="jp_jplayer_5" style="width: 0px; height: 0px;"><img id="jp_poster_5"
                                    style="width: 0px; height: 0px; display: none;"><audio id="jp_audio_5"
                                    preload="metadata"
                                    src="file:///C:/Users/ASUS/Downloads/Djoz-master/Djoz-master/music-files/6.mp3"></audio>
                            </div>
                            <div class="jp-audio jp_container_6" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar" style="width: 100%;">
                                                <div>
                                                    <div class="jp-play-bar" style="width: 0%;">
                                                        <div class="jp-current-time" role="timer" aria-label="time">
                                                            00:00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">01:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 p-0">
                    <div class="track__pic">
                        <img src="{{ 'front-template/images/track-right.jpg' }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start posts-entry -->
    <section class="section posts-entry posts-entry-sm ">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">WADYABALA DJ AND CREWS</h2>
                </div>
            </div>
            <div class="row">
                <div class="videos__slider owl-carousel">
                    <div class="col-videos">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{ 'front-template/images/crew-1.png' }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-videos">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{ 'front-template/images/crew-2.png' }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-videos">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{ 'front-template/images/crew-3.png' }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-videos">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{ 'front-template/images/crew-4.png' }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-videos">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{ 'front-template/images/crew-5.png' }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-videos">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{ 'front-template/images/crew-6.png' }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-videos">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{ 'front-template/images/crew-7.png' }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section bg-body-tertiary ">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Watch Our Video</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
            </div>

            <div class="row align-items-stretch retro-layout-alt">
                <div class="col-sm-6">
                    <div class="videos__large__item set-bg" data-setbg="{{ 'front-template/images/img-video.jpg' }}">
                        <a href="https://www.youtube.com/watch?v=yJg-Y5byMMw?autoplay=1" class="play-btn video-popup"><i
                                class="fa fa-play"></i></a>
                        <div class="videos__large__item__text">
                            <h4>Martin Garrix & Pierce Fulton feat. Mike Shinoda - Waiting For Tomorrow (Official Video)
                            </h4>
                            <ul>
                                <li>02:35:18</li>
                                <li>Dec 17, 2019</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="two-col d-block d-md-flex justify-content-between">
                        <div class="col-lg-6">
                            <div class="videos__item">
                                <div class="videos__item__pic set-bg"
                                    data-setbg="{{ 'front-template/images/img-video.jpg' }}">
                                    <a href="https://www.youtube.com/watch?v=yJg-Y5byMMw?autoplay=1"
                                        class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="videos__item__text">
                                    <h5>Electric Love Festival 2019 - The Opening Ceremony</h5>
                                    <ul>
                                        <li>02:35:18</li>
                                        <li>Dec 17, 2019</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="videos__item">
                                <div class="videos__item__pic set-bg"
                                    data-setbg="{{ 'front-template/images/img-video.jpg' }}">
                                    <a href="https://www.youtube.com/watch?v=yJg-Y5byMMw?autoplay=1"
                                        class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="videos__item__text">
                                    <h5>Electric Love Festival 2019 - The Opening Ceremony</h5>
                                    <ul>
                                        <li>02:35:18</li>
                                        <li>Dec 17, 2019</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
