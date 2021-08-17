@extends('layouts.frame')

@section('top')
<h1>施設一覧</h1>
@foreach ($facilities as $facility)
<p>名前 {{$facility->name}}</p>
<p>住所 {{$facility->address}}</p>
<p>TEL {{$facility->tel}}</p>
@endforeach
@endsection