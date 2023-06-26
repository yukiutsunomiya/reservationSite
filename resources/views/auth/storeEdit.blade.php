@include('components.authHeader')
<body>
    <div class="container my-5 text-center">
        <h3 class="mb-4">{{$name}}様の店舗情報</h3>
        <div>
            <form method="get" action="/auth/storeUpdate">
                <p>店舗ID：{{$id}}</p>
                <input type="hidden" value="{{$id}}" name="id">
                <p>店舗名：<input type="text" value="{{$name}}" name="name" class="w-50"></p>
                <p>店舗名（フリガナ）：<input type="text" value="{{$furigana}}" name="furigana" class="w-50"></p>
                <p>電話番号：<input type="tel" value="{{$telephone}}" name="telephone" class="w-50"></p>
                <p>郵便番号：<input type="number" value="{{$zipCode}}" name="zipCode" class="w-50"></p>
                <p>都道府県：<input type="text" value="{{$prefectures}}" name="prefectures" class="w-50"></p>
                <p>住所：<input type="text" value="{{$address}}" name="address" class="w-50"></p>
                <p>営業日：<input type="text" value="{{$businessDay}}" name="businessDay" class="w-50"></p>
                <p>営業時間：<input type="text" value="{{$businessHours}}" name="businessHours" class="w-50"></p>
                <p class="h5">使用url（変更できません。）：{{$store_url}}</p>
                <input type="hidden" value="{{$store_url}}" name="store_url">
                <!--<password></password>-->
                <button type="submit" class="btn btn-primary d-inline-block mt-2 btn-hover w-25" onclick="return confirm('店舗情報を修正してよろしいでしょうか。')" >{{$name}}の入力内容修正</button>
            </form>
            <a type="submit" href="../auth/store" class="btn btn-primary d-inline-block mt-3 btn-hover w-25">{{$name}}の店舗情報へ戻る</a>
        </div>
        
    </div>
</main>