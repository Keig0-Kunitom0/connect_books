@extends('layouts.app')

@section('content')

@if (count($favorites) > 0)
<div class="directory-details pt-padding">
    <div class="favorite_contents">
        <h1 class="heading">お気に入り一覧</h1>
            <div class="container">
                <div class="row">
                    @foreach ($favorites as $favorite)
                    <div class="col-md-6">
                        <div class="gallery-img">
                            <div class="row">
                                <div class="col-lg-8 favorite_img">
                                    <img src="{{ $favorite->img_url }}" alt="書籍画像">
                                </div>
                            </div>
                        </div>
                    </div>
                            
                    <div class="col-md-6 favorite_title">
                        <h2><a href="/books/{{ $favorite->id }}" class="title_content">{{ $favorite->title }}</a></h2>
                        {{-- お気に入り／お気に入り解除ボタン --}}
                        @include('books_favorite.favorite_button', ['book' => $favorite])
                    </div>
                    @endforeach
                </div>
            </div>
    </div>
</div>
@endif

@endsection