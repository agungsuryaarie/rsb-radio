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
