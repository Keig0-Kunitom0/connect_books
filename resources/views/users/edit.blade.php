@extends('layouts.app')

@section('content')
<h1>設定</h1>
    <div class="row">
        <div class="col-6">
            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('name', '名前') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('name_kana', '名前カナ') !!}
                    {!! Form::text('name_kana', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('birthday', '生年月日') !!}
                    {!! Form::text('birthday', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('post_code', '郵便番号') !!}
                    {!! Form::text('post_code', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('prefecture', '都道府県') !!}
                    {!! Form::text('prefecture', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('city', '市区町村') !!}
                    {!! Form::text('city', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('housse_number', '番地') !!}
                    {!! Form::text('housse_number', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('building_name', '建物名') !!}
                    {!! Form::text('building_name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        <div class="col-6">
                <div class="form-group">
                    {!! Form::label('password', 'パスワードの変更') !!}
                    {!! Form::text('password', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワードの確認') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection