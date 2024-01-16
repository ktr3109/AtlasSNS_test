@extends('layouts.logout')

@section('content')

<div class="logout_adedd">
  <div class="adedd_bold">
    <p>〇〇さん</p>
    <p>ようこそ！AtlasSNSへ！</p>
  </div>
  <p>ユーザー登録が完了しました。</p>
  <p>早速ログインをしてみましょう。</p>

  <p><a class="submit" href="/login">ログイン画面へ</a></p>
</div>

@endsection