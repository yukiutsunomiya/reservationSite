<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    -->
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
  <body>
    <div id="app">
      <header class="header">
        <div class="container">
          <h2 class="fw-bold text-center mb-0 mt-4">予約サイトシステム管理者ページ</h2>
          <p class="fw-bold text-center my-3 ">（株）〇〇</p>
          @auth('admin')
            <p class="fw-bold">管理者ログインユーザー名：{{ Auth::guard('admin')->user()->name }}</p>
          @endauth
          <nav class="navbar navbar-expand-md">
            <!-- ハンバーガーメニュー -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-around" id="navbarNavDropdown">
              @if (Route::has('login'))
                @auth('admin')
                  <ul class="navbar-nav">
                    <li class="nav-item py-2">
                      <a class="nav-link fw-bold" href="../admin/storeRegister">店舗登録</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav">
                    <li class="nav-item py-2">
                      <a class="nav-link fw-bold" href="../admin/stores">店舗一覧</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav">
                    <li class="nav-item py-2">
                      <a class="nav-link fw-bold" href="../admin/reservationStatus">予約一覧</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav">
                      <li class="nav-item py-2">
                        <a href="../admin/register" class="nav-link fw-bold">システム管理者登録</a>
                      </li>
                    </ul>
                  <!--
                  <ul class="navbar-nav">
                    <li class="nav-item dropdown py-2">
                      <a class="nav-link dropdown-toggle fw-bold" href="/" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        店舗関連
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="../admin/productRegistration">店舗登録</a></li>
                        <li><a class="dropdown-item" href="../admin/products">店舗一覧</a></li>
                        <li><a class="dropdown-item" href="../admin/productOrderChange">商品順番変更</a></li>
                      </ul>
                    </li>
                  </ul>
-->
                  <ul class="navbar-nav">
                    <li class="nav-item py-2">
                      <a href="{{ route('logout') }}" 
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" class="nav-link fw-bold">
                        管理者ログアウト
                      </a>
                      <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </li>
                  </ul>
                @else
                  <ul class="navbar-nav">
                    <li class="nav-item py-2">
                      <a href="/admin" class="nav-link fw-bold">予約サイトトップページ</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav">
                    <li class="nav-item py-2">
                      <a href="../admin/login" class="nav-link fw-bold">管理者ログイン</a>
                    </li>
                  </ul>
                  <!--
                  @if (Route::has('register'))
                    <ul class="navbar-nav">
                      <li class="nav-item py-2">
                        <a href="../admin/register" class="nav-link fw-bold">管理者登録</a>
                      </li>
                    </ul>
                  @endif
-->
                @endauth
              @endif
            </div>
          </nav>
        </div>
        
        <!--
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        <--
        <!-- / ナビゲーション -->
      </header>