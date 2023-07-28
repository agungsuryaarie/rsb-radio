@extends('layouts.app')


@section('content')
    <section class="track spad ">
        <div class="container">
            <div class="row">
                <div class="player-box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="col-lg-5 p-0">
                        <div class="track__pic">
                            <img src="{{ 'front-template/images/logo-black.png' }}" alt="" style="width: 70%">
                        </div>
                    </div>
                    <div class="col-lg-7 p-0">
                        <div class="track__contentd">
                            <h4 class="stream-title">RSB-FM 89.3 Batu Bara</h4>
                            <h5 class="stream-sub">Listening Now</h5>
                            <div class="single_player_container bg-dark p-2 rounded-sm">
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
@endsection
