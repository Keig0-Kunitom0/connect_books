@extends('layouts.app')

@section('content')
    <div class="directory-details pt-padding">
        <h1>書籍詳細</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="gallery-img">
                            <div class="row">
                                <div class="col-lg-7">
                                    <img src="{{ $books->img_url }}" alt="書籍画像">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="small-tittle">
                            <h1>{{ $books->title }}</h1>
                        </div>
                        <div class="small-content">
                            <h2>{{ $books->author }}</h2>
                        </div>
                        <div class="small-content">
                            <h2>{{ $books->publisher }}</h2>
                        </div>
                        <div class="small-content">
                            <h2>{{ $books->release_date }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            
            
    </div>

@endsection