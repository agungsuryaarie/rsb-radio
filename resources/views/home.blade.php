@extends('layouts.app')


@section('content')
    {{-- <div class="container pt-2">
        <div class="row align-items-stretch retro-layout-alt">
            <div class="col-md-12">
                <a href="single.html" class="img-link"><img src="{{ 'front-template/images/baner2.png' }}" alt="Image"
                        class="img-baner"></a>
            </div>
        </div>
    </div> --}}


    <section class="section bg-body-tertiary">
        <div class="container">
            <div class="row align-items-stretch retro-layout">
                @foreach ($article as $a)
                    <div class="col-md-6">
                        <a href="{{ route('article.show', $a->slug) }}" class="h-entry img-5 b-height gradient">
                            <div class="featured-img" style="background-image: url('{{ url('storage/post', $a->image) }}');">
                            </div>
                            <div class="videos__large__item__text">
                                <h4>{{ $a->title }}</h4>
                                <ul class="article-info" style="padding-left: 0">
                                    <li><i class="bi bi-calendar"></i> {{ $a->created_at }}</li>
                                    <li><i class="bi bi-clock"></i> {{ $a->jam }} WIB</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                @endforeach

                <div class="col-md-3">
                    @foreach ($article1 as $a1)
                        <a href="{{ route('article.show', $a1->slug) }}" class="h-entry mb-30 v-height gradient">
                            <div class="featured-img"
                                style="background-image: url('{{ url('storage/post', $a1->image) }}');">
                            </div>
                            <div class="text">
                                <span class="date">{{ $a1->created_at }}</span>
                                <h2>{{ $a1->title }}</h2>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class="col-md-3">
                    @foreach ($article2 as $a2)
                        <a href="{{ route('article.show', $a2->slug) }}" class="h-entry mb-30 v-height gradient">
                            <div class="featured-img"
                                style="background-image: url('{{ url('storage/post', $a2->image) }}');">
                            </div>
                            <div class="text">
                                <span class="date">{{ $a2->created_at }}</span>
                                <h2>{{ $a2->title }}</h2>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Start posts-entry -->
    <section class="section posts-entry posts-entry-sm bg-body-tertiary">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Program Unggulan</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">Lihat Semua</a></div>
            </div>
            <div class="row">
                @foreach ($program as $p)
                    <div class="col-md-6 col-lg-3">
                        <div class="blog-entry">
                            <a href="single.html">
                                <div class="container-image">
                                    <img src="{{ url('storage/program', $p->cover) }}" class="image">
                                    <div class="overlay">
                                        <div class="text-program">{{ $p->name }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section track spad youtube spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h2>Playlist Tracks</h2>
                        <h1>Playlist Tracks</h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="track__all">
                        <a href="/playlist" class="primary-btn border-btn">Lihat Semua Track</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 mb-100">
                    <div class="title-entry">
                        <h3>NEW ENTRY</h3>
                        <p>Edition : 30 Juni 2023</p>
                    </div>
                    <div class="track__content nice-scroll" tabindex="1" style="overflow-y: hidden; outline: none;">
                        <div class="youtube__item">
                            <div class="youtube__item__pic set-bg" data-setbg="{{ 'front-template/images/dj-1.jpg' }}"
                                style="background-image: url(&quot;img/youtube/youtube-1.jpg&quot;);">
                                <a href="https://www.youtube.com/watch?v=FXU0uy0GAQM" class="play-btn video-popup"><i
                                        class="fa fa-play"></i></a>
                            </div>
                            <div class="youtube__item__text">
                                <h4>David Guetta Miami Ultra Music Festival 2019</h4>
                                <i class="bi bi-youtube"></i> Rianta Surbakti
                            </div>
                        </div>
                        <div class="youtube__item">
                            <div class="youtube__item__pic set-bg" data-setbg="{{ 'front-template/images/dj-2.jpg' }}"
                                style="background-image: url(&quot;img/youtube/youtube-1.jpg&quot;);">
                                <a href="https://www.youtube.com/watch?v=7Boy7DHbcvc" class="play-btn video-popup"><i
                                        class="fa fa-play"></i></a>
                            </div>
                            <div class="youtube__item__text">
                                <h4>David Guetta Miami Ultra Music Festival 2019</h4>
                                <i class="bi bi-youtube"></i> Rianta Surbakti
                            </div>
                        </div>
                        <div class="youtube__item">
                            <div class="youtube__item__pic set-bg" data-setbg="{{ 'front-template/images/img-video.jpg' }}"
                                style="background-image: url(&quot;img/youtube/youtube-1.jpg&quot;);">
                                <a href="https://www.youtube.com/watch?v=yJg-Y5byMMw?autoplay=1"
                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="youtube__item__text">
                                <h4>David Guetta Miami Ultra Music Festival 2019</h4>
                            </div>
                        </div>
                        <div class="youtube__item">
                            <div class="youtube__item__pic set-bg" data-setbg="{{ 'front-template/images/img-video.jpg' }}"
                                style="background-image: url(&quot;img/youtube/youtube-1.jpg&quot;);">
                                <a href="https://www.youtube.com/watch?v=yJg-Y5byMMw?autoplay=1"
                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="youtube__item__text">
                                <h4>David Guetta Miami Ultra Music Festival 2019</h4>
                            </div>
                        </div>
                        <div class="youtube__item">
                            <div class="youtube__item__pic set-bg" data-setbg="{{ 'front-template/images/img-video.jpg' }}"
                                style="background-image: url(&quot;img/youtube/youtube-1.jpg&quot;);">
                                <a href="https://www.youtube.com/watch?v=yJg-Y5byMMw?autoplay=1"
                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="youtube__item__text">
                                <h4>David Guetta Miami Ultra Music Festival 2019</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0 order-lg-2">
                    <div class="tours__item__pic">
                        <img src="{{ 'front-template/images/tour-1.jpg' }}" alt="">
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
                    <h2 class="posts-entry-title">Penyiar Radio</h2>
                </div>
            </div>
            <div class="row">
                <div class="videos__slider owl-carousel">
                    @foreach ($penyiar as $pr)
                        <div class="col-videos">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="{{ url('storage/userUpload', $pr->picture) }}" alt=""
                                        class="rounded-full">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Berita --}}

    <section class="section posts-entry posts-entry-sm bg-body-tertiary">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Berita Terbaru</h2>
                    <p>Update Kegiatan Pemerintah</p>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="https://batubarakab.go.id/kategori/pemerintahan"
                        class="read-more">Lihat Semua</a></div>
            </div>
            <div class="row retro-layout">
                <div class="news__slider owl-carousel">
                    @foreach ($berita['results'] as $b)
                        <div class="col-md-11">
                            <a href="#" class="h-entry mb-30 p-height gradient">
                                <div class="featured-img" style="background-image: url('{{ $b['gambar'] }}');"> </div>
                                <div class="text">
                                    <h5 class="text-white">{{ $b['judul'] }}</h5>
                                    <div class="d-flex">
                                        <span class="text-white mr-3"><i class="bi bi-calendar"></i>
                                            {{ $b['tanggal'] }}</span> &nbsp;
                                        <span class="text-white"><i class="bi bi-eye"></i> {{ $b['dilihat'] }}x
                                            dilihat</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <div class="section bg-primary-50">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Tonton Video</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="{{ route('watch.index') }}" class="read-more">Lihat Semua</a>
                </div>
            </div>

            <div class="row align-items-stretch retro-layout-alt">
                @foreach ($video as $v)
                    @php
                        preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $v->link, $matches);
                        $youtubeVideoId = $matches[1] ?? null;
                    @endphp
                    <div class="col-sm-6">
                        <div class="videos__large__item set-bg"
                            data-setbg="https://img.youtube.com/vi/{{ $youtubeVideoId }}/0.jpg">
                            <a href="{{ $v->link }}" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                            <div class="videos__large__item__text">
                                <h4>{{ $v->title }}</h4>
                                <ul style="padding-left: 0">
                                    <li>{{ \Carbon\Carbon::parse($v->created_at)->format('H:i:s') }}</li>
                                    <li>{{ \Carbon\Carbon::parse($v->created_at)->format('Y-m-d') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-6">
                    <div class="two-col d-block d-md-flex justify-content-between">
                        @foreach ($video1 as $v1)
                            @php
                                preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $v1->link, $matches);
                                $youtubeVideoId = $matches[1] ?? null;
                            @endphp
                            <div class="col-lg-6">
                                <div class="videos__item">
                                    <div class="videos__item__pic set-bg"
                                        data-setbg="https://img.youtube.com/vi/{{ $youtubeVideoId }}/0.jpg">
                                        <a href="{{ $v1->link }}" class="play-btn video-popup"><i
                                                class="fa fa-play"></i></a>
                                    </div>
                                    <div class="videos__item__text">
                                        <h5>{{ $v1->title }}</h5>
                                        <ul style="padding-left: 0">
                                            <li>{{ \Carbon\Carbon::parse($v1->created_at)->format('H:i:s') }}</li>
                                            <li>{{ \Carbon\Carbon::parse($v1->created_at)->format('Y-m-d') }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
