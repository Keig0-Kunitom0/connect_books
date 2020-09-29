@extends('layouts.app')
    
@include('layouts.header')

@section('container')
<div id="app">
  <search-modelbox @hogehoge="search"></search-modelbox>
  <!--結果一覧の表示のコンポーネント -->
  <search-result :search-text="searchText"></search-result>
</div>
@endsection


@section('script')
<script src="{{ mix('js/search.js') }}"></script>
@endsection