@include('components.authHeader')
<body>
    <div class="container my-5 text-center">
        <h3 class="text-center">店舗情報</h3>
        <p class="h5">店舗ID：{{$store->id}}</p>
        <p class="h5">店舗名：{{$store->name}}</p>
        <p class="h5">店舗名（フリガナ）：{{$store->furigana}}</p>
        <p class="h5">電話番号：{{$store->telephone}}</p>
        <p class="h5">郵便番号：{{$store->zipCode}}</p>
        <p class="h5">都道府県：{{$store->prefectures}}</p>
        <p class="h5">住所：{{$store->address}}</p>
        <p class="h5">営業日：{{$store->businessDay}}</p>
        <p class="h5">営業時間：{{$store->businessHours}}</p>
        <p class="h5">使用url：{{$store->store_url}}</p>
        <a href="../auth/storeEdit?id={{$store->id}}&name={{$store->name}}&furigana={{$store->furigana}}&telephone={{$store->telephone}}
        &zipCode={{$store->zipCode}}&prefectures={{$store->prefectures}}&address={{$store->address}}&businessDay={{$store->businessDay}}
        &businessHours={{$store->businessHours}}&businessHours={{$store->businessHours}}&store_url={{$store->store_url}}" class="btn btn-primary d-inline-block btn-hover w-50 my-3 mr-l">{{$store->name}}のユーザー情報変更</a>　
    <div>
</body>