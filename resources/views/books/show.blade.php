@extends('layouts.app')

@section('content')
    <div class="directory-details pt-padding">
        <h1 class="heading">書籍詳細</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="gallery-img">
                            <div class="row">
                                <div class="col-lg-7">
                                    <img src="{{ $book->img_url }}" alt="書籍画像">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="small-content">
                            <h1>{{ $book->title }}</h1>
                        </div>
                        <hr class="border">
                        <div class="small-content">
                            <h2>{{ $book->author }}</h2>
                        </div>
                        <div class="small-content">
                            <h2>{{ $book->publisher }}</h2>
                        </div>
                        <div class="small-content">
                            <h2>{{ $book->release_date }}</h2>
                        </div>
                        <hr class="border">
                        <div class="row">
                            <div class="col-6">
                                @include('books_favorite.good_button')
                            </div>
                            <div class="col-6">
                                @include('books_favorite.bad_button')
                            </div>
                        </div>
                        <u class="content_url">
                            <h2><a href="{{ $book->affiliate }}"><i class="fas fa-arrow-right"></i>楽天ブックスで購入する</a></h2>
                        </u>
                        <hr class="border">
                        {{-- お気に入り／お気に入り解除ボタン --}}
                        @include('books_favorite.favorite_button', ['favorite' => $book])
                    </div>
                </div>
                <hr class="border">
            </div>
        <h1 class="heading">レビュー一覧</h1>
        <h1>&nbsp;</h1>
            <div class="container">
                <div class="row">
                    <div class="offset-md-1 col-md-9">
                        {{-- 投稿フォーム --}}
                        @include('comments.form')
                    </div>
                </div>
                <hr class="border">
                <div class="row">
                    <div class="offset-md-1 col-md-10">
                    {{-- 投稿一覧 --}}
                    @include('comments.comments')
                    </div>
                </div>
            </div>
            <auth-check :authorized='@json(Auth::check())'></auth-check>
    </div>
@endsection