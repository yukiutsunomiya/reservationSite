@include('components.authHeader')
<main>
    <div class="container my-5 text-center">
        <h3 class="mb-4">{{$userName}}のユーザー情報</h3>
        <div>
            <form method="post" action="/auth/userUpdate">
                @csrf
                <p>ユーザーID：{{$userId}}</p>
                <input type="hidden" value="{{$userId}}" name="userId">
                <p>名前：<input type="text" value="{{$userName}}" name="userName" class="w-50"></p>
                <p>フリガナ：<input type="text" value="{{$userFurigana}}" name="userFurigana" class="w-50"></p>
                <p>電話番号：<input type="number" value="{{$userTelephone}}" name="userTelephone" class="w-50"></p>
                <p>メールアドレス：<input type="email" value="{{$userEmail}}" name="userEmail" class="w-50"></p>
                <p>使用url（変更できません。）：{{$store_url}}</p>
                <input type="hidden" value="{{$store_url}}" name="store_url">
                <!--<password></password>-->
                <button type="submit" class="btn btn-primary d-inline-block mt-2 btn-hover w-25" onclick="return confirm('ユーザー情報を修正してよろしいでしょうか。')" >入力内容修正</button>
            </form>
            <a type="submit" href="../auth/user" class="btn btn-primary d-inline-block mt-3 btn-hover w-25">{{$userName}}のユーザー情報へ戻る</a>
        </div>
    </div>
</main>