<h3 class="mx-5 mt-5 mb-3">店舗：{{$name}}</h3>
<nav class="navbar navbar-expand-md">
<!-- ハンバーガーメニュー -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-around" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item py-2">
                <a class="nav-link fw-bold" href="../admin/store?id={{$id}}&name={{$name}}&furigana={{$furigana}}&telephone={{$telephone}}&zipCode={{$zipCode}}&prefectures={{$prefectures}}&address={{$address}}&businessDay={{$businessDay}}&businessHours={{$businessHours}}&store_url={{$store_url}}">{{$name}}の店舗情報</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item py-2">
                <a class="nav-link fw-bold" href="../admin/storeEdit?id={{$id}}&name={{$name}}&furigana={{$furigana}}&telephone={{$telephone}}&zipCode={{$zipCode}}&prefectures={{$prefectures}}&address={{$address}}&businessDay={{$businessDay}}&businessHours={{$businessHours}}&store_url={{$store_url}}">{{$name}}の店舗情報更新</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item py-2">
                <a class="nav-link fw-bold" href="../admin/userRegister?id={{$id}}&name={{$name}}&furigana={{$furigana}}&telephone={{$telephone}}&zipCode={{$zipCode}}&prefectures={{$prefectures}}&address={{$address}}&businessDay={{$businessDay}}&businessHours={{$businessHours}}&store_url={{$store_url}}">{{$name}}のユーザー情報登録</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item py-2">
                <a class="nav-link fw-bold" href="../admin/storeUsers?id={{$id}}&name={{$name}}&furigana={{$furigana}}&telephone={{$telephone}}&zipCode={{$zipCode}}&prefectures={{$prefectures}}&address={{$address}}&businessDay={{$businessDay}}&businessHours={{$businessHours}}&store_url={{$store_url}}">{{$name}}の登録ユーザー情報一覧</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item py-2">
                <a class="nav-link fw-bold" href="../admin/storeReservationStatus?id={{$id}}&name={{$name}}&furigana={{$furigana}}&telephone={{$telephone}}&zipCode={{$zipCode}}&prefectures={{$prefectures}}&address={{$address}}&businessDay={{$businessDay}}&businessHours={{$businessHours}}&store_url={{$store_url}}">{{$name}}の予約状況確認</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item py-2">
                <a class="nav-link fw-bold" href="../admin/storeDelete?id={{$id}}" onclick="return confirm('退会してよろしいでしょうか？')" >{{$name}}の店舗情報削除</a>
            </li>
        </ul>
    </div>
</nav>