@extends('layouts.frame')
<link rel="stylesheet" href="./top.css">
@section('content')
<main>
    <img src="./image/トップページ　背景.jpeg" alt="写真" style="width: 100vw; height: 600px;">
    <div class="background">
        <div class="padding">
            <div class="search">
                <form action="#">
                    {{-- {{url('/crud')}} --}}
                    <div>
                        <input class="check" type="radio" name="area[]" value="area"> エリアで絞り込み
                    </div>
                    <div>
                        <input class="check " type="text" name="keyword"  placeholder="キーワードを入力">
                        <input type="submit" value="検索" class="btn btn-info">
                        {{-- value="{{$keyword}}" --}}
                        {{-- 検索機能の実装は時間があれば行う --}}
                    </div>
                </form>
            </div>
            <h1>施設一覧</h1>
            <ul class="category">
                <li class="circle on">温</li>
                <li class="circle mizu">水</li>
                <li class="circle gai">外</li>
                <li class="circle in">飲</li>
            </ul>
            <div class="facilities">
                @foreach ($facilities as $facility)
                <div class="facility">
                    <div class="facility_image">
                        @if(isset($facility->picture))
                        <img src="./image/{{$facility->picture}}" alt="写真" class="picture">
                        @else
                        <img src="./image/noimage.png" alt="写真" class="picture">
                        @endif
                        </div>
                    <div class="facility_detail">
                        <div class="facility_detail_top">
                            <h2 class="detail name top">{{$facility->name}}</h2>
                            {{-- <p class="like top">⭐️</p> --}}
                            {{-- お気に入り機能の実装は時間があれば行う --}}
                        </div>
                        <div class="facility_detail_bottom">
                            <div class="facility_detail_bottom_left">
                                <p class="detail">住所　{{$facility->address}}</p>
                                <p class="detail">TEL　{{$facility->tel}}</p>
                            </div>
                            <div class="facility_detail_bottom_right">
                                <ul class="category">                                   
                                    @foreach($facility->facilityCategories as $value)
                                    @if($value->category_id == 1)
                                    <li class="circle on">温</li>
                                    @endif
                                    @if($value->category_id == 2)
                                    <li class="circle mizu">水</li>
                                    @endif
                                    @if($value->category_id == 3)                                
                                    <li class="circle gai">外</li>
                                    @endif
                                    @if($value->category_id == 4)
                                    <li class="circle in">飲</li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>            
                </div>
                <div class="endline"></div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection