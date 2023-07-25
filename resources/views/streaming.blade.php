@extends('layouts.app')


@section('content')
    <!-- Track Section Begin -->
    <section class="track spad">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="col-lg-4 p-0">
                        <div class="track__pic">
                            <img src="{{ 'front-template/images/3.png' }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 p-0">
                        <div class="track__contentd">
                            <div class="single_player_container">
                                <h4>RSB-FM 89.3</h4>
                                <h5>Listening Now</h5>
                                <div class="jp-jplayer jplayer" data-ancestor=".jp_container_1"
                                    data-url="https://rsb.batubarakab.go.id:8000/radio.mp3">
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
                                                <div class="jp-seek-bar">
                                                    <div>
                                                        <div class="jp-play-bar">
                                                            <div class="jp-current-time" role="timer" aria-label="time">
                                                                0:00
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00
                                            </div>
                                        </div>
                                        <!-- Volume Controls -->
                                        <div class="jp-volume-controls">
                                            <button class="jp-mute" tabindex="0"><i
                                                    class="fa fa-volume-down"></i></button>
                                            <div class="jp-volume-bar">
                                                <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Track Section End -->
@endsection
