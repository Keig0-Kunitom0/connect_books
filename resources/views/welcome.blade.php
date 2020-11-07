@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div id="app">
            <div class="header-right">
                <h2>︎<i class="ti-search" @click="openModal"></i></h2>
            </div>
  　　　     　<search-modelbox @pass-value="search"></search-modelbox>
           <!--結果一覧の表示のコンポーネント -->
            <search-result :search-text="searchText"></search-result>
         </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to Connect_Books</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection

