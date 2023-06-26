@include('components.adminHeader')
@include('components.adminStoreheader')
<main>
    <div class="container my-5 text-center">
        <h3 class="mb-4">{{$userName}}のユーザー情報</h3>
        <div>
            <form method="post" action="/admin/userUpdate">
                @csrf
                <p>ユーザーID：{{$id}}</p>
                <input type="hidden" value="{{$id}}" name="id">
                <p>名前：<input type="text" value="{{$userName}}" name="userName" class="w-50"></p>
                <p>フリガナ：<input type="text" value="{{$userFurigana}}" name="userFurigana" class="w-50"></p>
                <p>電話番号：<input type="number" value="{{$userTelephone}}" name="userTelephone" class="w-50"></p>
                <p>メールアドレス：<input type="email" value="{{$userEmail}}" name="userEmail" class="w-50"></p>
                <p>使用url（変更できません。）：{{$store_url}}</p>
                <input type="hidden" value="{{$store_url}}" name="store_url">

                <input type="hidden" value="{{$id}}" name="id">
                <input type="hidden" value="{{$name}}" name="name">
                <input type="hidden" value="{{$furigana}}" name="furigana">
                <input type="hidden" value="{{$telephone}}" name="telephone">
                <input type="hidden" value="{{$zipCode}}" name="zipCode">
                <input type="hidden" value="{{$prefectures}}" name="prefectures">
                <input type="hidden" value="{{$address}}" name="address">
                <input type="hidden" value="{{$businessDay}}" name="businessDay">
                <input type="hidden" value="{{$businessHours}}" name="businessHours">
                <!--<password></password>-->
                <button type="submit" class="btn btn-primary d-inline-block mt-2 btn-hover w-25" onclick="return confirm('ユーザー情報を修正してよろしいでしょうか。')" >入力内容修正</button>
            </form>
            <a type="submit" href="../admin/store?id={{$id}}&name={{$name}}&furigana={{$furigana}}&telephone={{$telephone}}&zipCode={{$zipCode}}&prefectures={{$prefectures}}&address={{$address}}&businessDay={{$businessDay}}&businessHours={{$businessHours}}&store_url={{$store_url}}" class="btn btn-primary d-inline-block mt-3 btn-hover w-25">{{$name}}の店舗情報へ戻る</a>
        </div>
    </div>
</main>