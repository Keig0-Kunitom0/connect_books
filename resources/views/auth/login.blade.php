@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>ログイン</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('ログイン', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            
            <h4>&nbsp;</h4>
            <!--{{-- ユーザ登録ページへのリンク --}}-->
           <u class="content_url">
                <a href="{{ route('signup.get') }}" class="card-text"><h4><i class="fas fa-arrow-right"></i>初めての方はこちら</h4></p></a>
            </u>
        </div>
    </div>
@endsection