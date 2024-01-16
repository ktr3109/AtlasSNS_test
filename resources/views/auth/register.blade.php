@extends('layouts.logout')

@section('content')
<h2>新規ユーザー登録</h2>
{!! Form::open() !!}
@csrf
{{ Form::label('ユーザー名','user name') }}
{{ Form::text('username',null,['class' => 'input']) }}

{{ Form::label('メールアドレス','mailadress') }}
{{ Form::text('mail',null,['class' => 'input']) }}

{{ Form::label('パスワード','password') }}
{{ Form::password('password',['class' => 'input']) }}

{{ Form::label('パスワード確認','password comfirm') }}
{{ Form::password('password-confirm',['class' => 'input']) }}

{{ Form::submit('REGISTER',['class' => 'submit']) }}

<p class="logout_link"><a href="/login">ログイン画面に戻る</a></p>

{!! Form::close() !!}


@endsection
