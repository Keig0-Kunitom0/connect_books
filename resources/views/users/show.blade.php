@extends('layouts.app')

@section('content')
<div class="directory-details pt-padding">
    <h1 class="heading">アカウント</h1>
        <div class="container">
            <div class="row">
                <aside class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title heading">{{ $user->name }}</h3>
                        </div>
                        <div class="card-body">
                            {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                            <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 500]) }}" alt="ユーザー画像">
                        </div>
                    </div>
                </aside>
                <div class="col-sm-8">
                    <ul class="nav nav-tabs nav-justified mb-3">
                        {{-- お気に入り一覧タブ --}}
                        <li class="nav-item">
                            <h2 class="heading">お気に入り一覧<span class="badge badge-secondary">{{ $user->favorite_books_count }}</span></h2>
                        </li>
                    </ul>
                    {{-- お気に入り一覧 --}}
                    @include('users.favorite_books')
                </div>
            </div>
        </div>
</div>
@endsection