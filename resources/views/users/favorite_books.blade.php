@if (count($favorites) > 0)
    <div class="directory-details pt-padding">
        <div class="favorite_contents">
            <div class="container">
                <div class="row">
                    @foreach ($favorites as $favorite)
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="gallery-img_1">
                                    <img src="{{ $favorite->img_url }}" alt="書籍画像">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 favorite_title">
                        <h2><a href="/books/{{ $favorite->id }}" class="title_content">{{ $favorite->title }}</a></h2>
                        {{-- お気に入り／お気に入り解除ボタン --}}
                        @include('books_favorite.favorite_button')
                    </div>
                    @endforeach
                    
                    {{-- ページネーションのリンク --}}
                    {{ $favorites->links() }}
                </div>
            </div>
        </div>
    </div>
@endif