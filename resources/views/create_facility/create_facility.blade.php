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
            <h1>新規施設登録</h1>
         </div>

            <form action="{{route('create_facility.store')}}" method="POST"  enctype="multipart/form-data">
              
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

                          <li class="list">温泉    :<input type="checkbox" name="category[]" value="1"></li>
                          <li class="list">水風呂  :<input type="checkbox" name="category[]" value="2"></li>
                          <li class="list">外気浴  :<input type="checkbox" name="category[]" value="3"></li>
                          <li class="list">飲料水  :<input type="checkbox" name="category[]" value="4"></li>
                        </ul>
                    </div>

                    <div class="content-right">
                      <ul>
                        <li class="list">施設名：<input type="text" placeholder="施設名" name="name" class="text"></li>
                        <li class="list">電話番号：<input type="tel" placeholder="000-000-000" name="tel" class="text"></li>
                        <li class="list">住所：<input type="text" name="address" class="text1"></li>
                        <li class="list">営業時間： <input type="text" placeholder="10:00~23:00" name="hour" class="text"> </li>
                        <li class="list">定休日：<input type="text" placeholder="月曜日" name="dayoff" class="text"></li>
                        <li class="list">HP：<input type="text" name="url" class="text"> </li>
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