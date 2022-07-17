@extends('layouts.master')
@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(/assets/img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>Suggestions</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Buy Now Area Start ##### -->
    <div class="oneMusic-buy-now-area mb-100 mt-50">
        <div class="container">
            <div class="row">

                @foreach($mostViews as $item)
                    <!-- Single Album Area -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="single-album-area">
                                <div class="album-thumb">
                                    <img src="{{ asset('storage/'. $item->image) }}" alt="">

                                    <!-- Play Icon -->
                                    <div class="play-icon">
                                        <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                                    </div>
                                </div>
                                <div class="album-info">
                                    <a href="{{ route('musics.show', $item->id) }}">
                                        <h5>{{ $item->title }}</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>

        </div>
    </div>
    <!-- ##### Buy Now Area End ##### -->

    <!-- ##### Add Area Start ##### -->
    <div class="add-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="adds">
                        <a href="#"><img src="/assets/img/bg-img/add3.gif" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Add Area End ##### -->

    <!-- ##### Song Area Start ##### -->
    <div class="one-music-songs-area mb-70">
        <div class="container">
            <div class="row">

                <!-- Single Song Area -->
                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="{{ asset('storage/'. $music->image) }}" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>{{ $music->title }} by {{ $music->artist->name }}</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="{{ asset('storage/musics/'. $music->file) }}">
                            </audio>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Song Area End ##### -->
@endsection
