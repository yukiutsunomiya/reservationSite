@include('components.adminHeader')
@include('components.adminStoreheader')
<main>
    <div class="container my-5 text-center">
        <h3 class="text-center">店舗情報</h3>
        <p class="h5">店舗ID：{{$id}}</p>
        <p class="h5">店舗名：{{$name}}</p>
        <p class="h5">店舗名（フリガナ）：{{$furigana}}</p>
        <p class="h5">電話番号：{{$telephone}}</p>
        <p class="h5">郵便番号：{{$zipCode}}</p>
        <p class="h5">都道府県：{{$prefectures}}</p>
        <p class="h5">住所：{{$address}}</p>
        <p class="h5">営業日：{{$businessDay}}</p>
        <p class="h5">営業時間：{{$businessHours}}</p>
        <p class="h5">使用url：{{$store_url}}</p>
        <div>
</body>