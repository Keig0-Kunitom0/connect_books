@extends('layouts.app')

@section('content')
    <div class="directory-details pt-padding">
        <h1 class="heading">書籍詳細</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="gallery-img">
                            <div class="row">
                                <div class="col-lg-8">
                                    <img src="{{ $book->img_url }}" alt="書籍画像">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="small-content">
                            <h1>{{ $book->title }}</h1>
                        </div>
                        <div class="small-content">
                            <h2>{{ $book->author }}</h2>
                        </div>
                        <div class="small-content">
                            <h2>{{ $book->publisher }}</h2>
                        </div>
                        <div class="small-content">
                            <h2>{{ $book->release_date }}</h2>
                        </div>
                        <h2>&nbsp;</h2>
                        <h2>&nbsp;</h2>
                        <u class="content_url">
                            <h2><a href="{{ $book->affiliate }}"><i class="fas fa-arrow-right"></i>楽天ブックスで購入する</a></h2>
                        </u>
                        {{-- お気に入り／お気に入り解除ボタン --}}
                        @include('books_favorite.favorite_button')
                    </div>
                </div>
            </div>
            
            
    </div>

@endsection