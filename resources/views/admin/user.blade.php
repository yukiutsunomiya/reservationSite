@include('components.adminHeader')
@include('components.adminStoreheader')
<main>
    <div class="container my-5 text-center">
        <h3 class="text-center">ユーザー情報</h3>
        <p class="h5">ユーザーID：{{$userId}}</p>
        <p class="h5">名前：{{$userName}}</p>
        <p class="h5">フリガナ：{{$userFurigana}}</p>
        <p class="h5">電話番号：{{$userTelephone}}</p>
        <p class="h5">メールアドレス：{{$userEmail}}</p>
        <p class="h5">使用url：{{$store_url}}</p>
    
        <div class="row">
            <div class="col-md-4">
                <a href="../admin/store?id={{$id}}&name={{$name}}&furigana={{$furigana}}&telephone={{$telephone}}&zipCode={{$zipCode}}&prefectures={{$prefectures}}&address={{$address}}&businessDay={{$businessDay}}&businessHours={{$businessHours}}&store_url={{$store_url}}" class="btn btn-primary d-inline-block btn-hover w-75 my-3 mr-l">店舗ID：【{{$name}}】のユーザー情報一覧へ</a>　
            </div>
            <div class="col-md-4">
                    <a href="../admin/userEdit?userId={{$userId}}&userName={{$userName}}&userFurigana={{$userFurigana}}&userTelephone={{$userTelephone}}&userEmail={{$userEmail}}&id={{$id}}&name={{$name}}&furigana={{$furigana}}&telephone={{$telephone}}&zipCode={{$zipCode}}&prefectures={{$prefectures}}&address={{$address}}&businessDay={{$businessDay}}&businessHours={{$businessHours}}&store_url={{$store_url}}" class="btn btn-primary d-inline-block btn-hover w-75 my-3 mr-l">{{$userName}}のユーザー情報変更</a>　
            </div>
            <div class="col-md-4">
                <a href="../admin/userDelete={{$userId}}&id={{$id}}&name={{$name}}&furigana={{$furigana}}&telephone={{$telephone}}&zipCode={{$zipCode}}&prefectures={{$prefectures}}&address={{$address}}&businessDay={{$businessDay}}&businessHours={{$businessHours}}&store_url={{$store_url}}" class="btn btn-primary d-inline-block btn-hover w-75 my-3">{{$userName}}のユーザー削除</a>
            </div>
        </div>
    </div>
</body>