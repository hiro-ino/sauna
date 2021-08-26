<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/create.css')}}">
    <title>Sauna.com</title>
</head>
<body>
   <div class="main"> 
      <div class="main-content">
         <div class="title">
            <h1>施設登録変更</h1>
         </div>


            <form action="{{route('create_facility.update', $facility->id )}}" method="POST"> 
                @method('put')
                @csrf
                <div class="content">
                    <div class="content-left">
                      <ul class="content-category">
                        <label>
                            <span class="filelabel" title="画像を選択">
                               <img src="{{asset('image/select_btn.jpg')}}" width="28" height="26" alt="">
                               選択
                            </span>
                            <!-- 本来の選択フォームは隠す -->
                            <input type="file" name="image" id="files">
                        </label>
                         @for ($i = 0; $i < count($categories[]); $i++)
                            @if(isset($categories[$i]->id== $i))
                            <li class="list">{{$categories[$i]->name}}    :<input type="checkbox" name="category[]" value={{$categories[$i]->id}} checked></li>
                            @else
                            <li class="list">{{$categories->name}}    :<input type="checkbox" name="category[]" value={{$categories[$i]->id}} ></li>
                            @endif
                          @endfor
{{--                         
                          <li class="list">水風呂  :
                            <input type="checkbox" name="category[]" value="2" {{$value->category_id == 2 ? 'checked':''}}>
                          </li>
                          <li class="list">外気浴  :
                            <input type="checkbox" name="category[]" value="3" {{$value->category_id == 3 ? 'checked':''}}>
                          </li>
                          <li class="list">飲料水  :
                            <input type="checkbox" name="category[]" value="4" {{$value->category_id == 4 ? 'checked':''}}>
                          </li> --}}
                        
                      </ul>
                    </div>

                    <div class="content-right">
                      <ul>
                        <li class="list">施設名：<input type="text" placeholder="施設名" name="name" class="text" value="{{$facility->name}}"></li>
                        <li class="list">電話番号：<input type="tel" placeholder="000-000-000" name="tel"  class="text" value="{{$facility->tel}}"></li>
                        <li class="list">住所：<input type="text" name="address" class="text" value="{{$facility->address}}"></li>
                        <li class="list">営業時間： <input type="text" placeholder="10:00~23:00" name="hour" class="text"  value="{{$facility->business_hour}}"> </li>
                        <li class="list">定休日：<input type="text" placeholder="月曜日" name="dayoff"  class="text" value="{{$facility->day_off}}"></li>
                        <li class="list">HP：<input type="text" name="url"  class="text" value="{{$facility->url}}"> </li>
                      </ul>
                    </div>
                </div>

                <div class="create-btn">
                    <button type="submit" class="btn-primary">施設登録
                    </button>
                </div>
            </form>
        </div>    
    </div>
    
  </body>
</html>