<!--@extends('layouts.app')-->

<!--@section('content')-->

<!--<div class="directory-details pt-padding">-->
<!--    <h1 class="heading">設定</h1>-->
<!--        <div class="container">-->
<!--            {!! Form::model($user,['route' => ['users.update', $user->id],'method' => 'put']) !!}-->
<!--                <div class="form-group row">-->
<!--                    {!! Form::label('name', '名前',['class' => 'offset-md-1 col-md-3']) !!}-->
<!--                    {!! Form::text('name', null, ['class' => 'form-control col-md-7']) !!}-->
<!--                </div>-->
<!--                <h2>&nbsp;</h2>-->
<!--                <div class="form-group row">-->
<!--                    {!! Form::label('email', 'メールアドレス',['class' => 'offset-md-1 col-md-3']) !!}-->
<!--                    {!! Form::email('email', null, ['class' => 'form-control col-md-7']) !!}-->
<!--                </div>-->
<!--                <h2>&nbsp;</h2>-->
<!--                <h2>&nbsp;</h2>-->
<!--                <div class="form-group row">-->
<!--                    <div class="offset-md-2 col-md-8">-->
<!--                        {!! Form::submit('更新', ['class' => 'btn btn-primary btn-block']) !!}-->
<!--                    </div>-->
<!--                </div>-->
<!--            {!! Form::close() !!}-->
                
<!--        </div>-->
<!--</div>-->

<!--<div class="form-group row">-->
<!--                    {!! Form::label('password','パスワード',['class' => 'offset-md-1 col-md-3']) !!}-->
<!--                    {!! Form::password('password', ['class' => 'form-control col-md-7']) !!}-->
<!--                </div>-->
<!--                <h2>&nbsp;</h2>-->
<!--                <div class="form-group row">-->
<!--                    {!! Form::label('password_confirmation', 'パスワードの確認',['class' => 'offset-md-1 col-md-3']) !!}-->
<!--                    {!! Form::password('password_confirmation', ['class' => 'form-control col-md-7']) !!}-->
<!--                </div>-->

                
@endsection