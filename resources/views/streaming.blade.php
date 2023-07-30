@extends('layouts.app')
@section('content')
    <section class="skills spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="skills__content">
                        <div class="details">
                            {{-- <div class="now-playing">PLAYING x OF y</div> --}}
                            <div class="track-art"></div>
                        </div>
                        <div id="wave">
                            <span class="stroke"></span>
                            <span class="stroke"></span>
                            <span class="stroke"></span>
                            <span class="stroke"></span>
                            <span class="stroke"></span>
                            <span class="stroke"></span>
                            <span class="stroke"></span>
                        </div>
                        <div class="track-name text-center">Track Name</div>
                        <div class="track-artist text-center">Track Artist</div>
                        {{-- <div class="slider_container">
                            <i class="fa fa-volume-down"></i>
                            <input type="range" min="1" max="100" value="99" class="volume_slider"
                                onchange="setVolume()">
                            <i class="fa fa-volume-up"></i>
                        </div> --}}


                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="skills__video set-bg" data-setbg="{{ url('front-template/images/onair.jpg') }}"
                        style="background-image: url(&quot;img/skill-video.jpg&quot;);">
                        {{-- <div class="buttons">
                            <div class="playpause-track" onclick="playpauseTrack()">
                                <i class="fa fa-play-circle fa-5x"></i>
                            </div>
                        </div> --}}
                        <div class="img-box">
                            <div class="play_btn playpause-track" onclick="playpauseTrack()">
                                <a>
                                    <i class="fa fa-play-circle fa-5x"></i>
                                </a>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
    <link rel="stylesheet" href="{{ url('front-template/css/custom.css') }}">
    <script src="{{ url('front-template/js/scripts.js') }}" defer></script>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <section class="section track spad youtube spad">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-6 mb-100">
                    <div class="stream-title">
                        <h3>RSB 89.3 FM</h3>
                    </div>
                    <h4 class="stream-sub">Streaming</h4>
                    <div class="track__content" tabindex="1" style="overflow-y: hidden;outline: none;">
                        <div class="single_player_container ">
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_1" data-url="music-files/1.mp3"
                                id="jp_jplayer_0" style="width: 0px; height: 0px;"><img id="jp_poster_0"
                                    style="width: 0px; height: 0px; display: none;"><audio id="jp_audio_0"
                                    preload="metadata"
                                    src="https://themewagon.github.io/Djoz/music-files/1.mp3"></audio>
                            </div>
                            <div class="jp-audio jp_container_1" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0 order-lg-2">
                    <div class="youtube__item">
                        <div class="youtube__item__pic set-bg"
                            data-setbg="{{ url('front-template/images/hero_4.jpg') }}"
                            style="background-image: url(&quot;img/youtube/youtube-2.jpg&quot;);">
                            <a href="https://www.youtube.com/watch?v=K4DyBUG242c?autoplay=1"
                                class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="youtube__item__text">
                            <h4>Martin Garrix (Full live-set) | SLAM!Koningsdag</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
