@extends('layouts.frame')

@section('content')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
<div class="container">
  <div class="mypage-title">
    <h2>マイページ</h2>
  </div>
 <div class="mypage-main">
   <div class="mypage-image">
    <img src="http://google.com/hogehoge.jpg" onerror="this.src='https://placehold.jp/150x150.png?text=NoImage'"/>
   </div>
    <p>ユーザーネーム：{{$user->name}}</p>
    <p>メールアドレス：{{$user->email}}</p>
    <p>ひとこと：{{$user->words}}</p>
   </div>
   <div class="favorite-title">
    <h2>お気に入りサウナ</h2>
   </div>
   <div class="favorite-main">
    <p>・ポカポカランド</p>
    <p>・UNPLAN</p>
   </div>
   <div class="comment-title">
    <h2>過去の投稿</h2>
   </div>
   <div class="comment-main">
    <p>・サウナ最高！！＠ポカポカランド 2021年8月6日</p>
    <p>・ととのいチェアーが最高！！@UNPLAN 2021年7月13日</p>
   </div>
</div>
@endsection