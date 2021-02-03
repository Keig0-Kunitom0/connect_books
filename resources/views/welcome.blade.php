@extends('layouts.app')

@section('content')
        <div id="app">
            <div class="header-right">
                <h2>︎<i class="ti-search" @click="openModal"></i></h2>
            </div>
  　　　     　<search-modelbox @pass-value="search"></search-modelbox>
           <!--結果一覧の表示のコンポーネント -->
            <search-result :search-text="searchText"></search-result>
         </div>
@endsection



