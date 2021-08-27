<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sauna.com</title>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <header>
    <div class="page-header">
     <nav class="title">
       <h1 href="index.php" class="navbar-left">Sauna.com</h1>
       <h5 class="title">サウナドットコム</h5>
     </nav>
     <div class="create_btn">
      <a href="{{route('create_facility.create')}}">新規登録</a>
     </div>
    </div>
    <div class="hamburger-menu">
       <input type="checkbox" id="menu-btn-check">
       <label for="menu-btn-check" class="menu-btn"><span></span></label>
       <div class="menu-content">
           <ul>
               <li>
               <a href="{{route('mypage')}}">マイページ</a>
               </li>
                <li>
                  <a href="{{route('top')}}">施設一覧</a>
              </li>
              <li>
                  <a href="/login">新規ユーザー登録</a>
              </li>
              <li>
                  <a href="/login">ログイン</a>
              </li>
              {{-- <li>
                  <a href="#">施設詳細</a>
              </li> --}}
              <li>
                <form method="get" action="#" class="search_container">
                  <input type="text" size="25" placeholder="キーワード検索">
                  <input type="submit" value="検索">
                </form>
              </li>
          </ul>
      </div>
    </div>
  </header>

@yield('content')

<footer>
  <div class="page-footer">
    <h2 class="site-footer">Sauna.com</h2>
    <h5 class="global-footer">サウナドットコム</h5>
    <i class="fab fa-instagram fa-2x"></i>
    <i class="fab fa-twitter-square fa-2x"></i>
    <i class="fab fa-facebook-square fa-2x"></i>
  </div>
</footer>
</body>
</html>
