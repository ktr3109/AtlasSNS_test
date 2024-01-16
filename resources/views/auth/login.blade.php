@extends('layouts.logout')
@section('content')
<h2>AtlasSNSへようこそ</h2>
{!! Form::open(['url' => 'login']) !!}
@csrf
{{ Form::label('e-mail','mail adress') }}
{{ Form::text('mail',null,['class' => 'input','id' => 'e-mail']) }}
{{ Form::label('password','password') }}
{{ Form::password('password',['class' => 'input','id' => 'password']) }}

{{ Form::submit('LOGIN',['class' => 'submit']) }}

<p class="logout_link"><a href="/register">新規ユーザーの方はこちら</a></p>

{!! Form::close() !!}

@endsection