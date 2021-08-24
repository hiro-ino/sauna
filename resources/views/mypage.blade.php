@extends('layouts.frame')

@section('content')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
<div class="container">
  <div class="mypage-title">
    <h1>マイページ</h1>
  </div>
 <div class="mypage-main">
   <div class="mypage-image">
    <img src="http://google.com/hogehoge.jpg" onerror="this.src='https://placehold.jp/150x150.png?text=NoImage'"/>
    <p>ユーザーネーム：{{$user->name}}</p>
    <p>メールアドレス：{{$user->email}}</p>
    <p>ひとこと：{{$user->words}}</p>
 </div>
 <div class="favorite-title">
  <p>お気に入りサウナ</p>
 </div>
 <div class="favorite-main">
  <p></p>
 </div>
 <div class="comment-title">
  <p>過去の投稿</p>
 </div>
 <div class="comment-main">
  <p></p>
 </div>
</div>
@endsection