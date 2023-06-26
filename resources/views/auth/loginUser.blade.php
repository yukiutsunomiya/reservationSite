@include('components.authHeader')
<body>
<?php $user = Auth::user(); ?>
    <div class="container my-5 text-center">
            
        <h3 class="mb-4">{{$user-> name}}様のユーザー情報</h3>
        <p>ユーザーID：{{$user-> id}}</p>        
                <!--<p>登録番号：{{$user-> id}}</p>-->
        <p>名前：{{$user-> name}}</p>
        <p>フリガナ：{{$user-> furigana}}</p>
        <p>電話番号：{{$user-> telephone}}</p>
        <p>メールアドレス：{{$user-> email}}</p>
        <p>store_url：{{$user-> store_url}}</p>
        <div class="row">
            <div class="col-md-6">
            <a href="userEdit?id={{$user->id}}&name={{$user-> name}}&furigana={{$user-> furigana}}&telephone={{$user-> telephone}}&email={{$user-> email}}&store_url={{$user-> store_url}}
            " class="btn btn-primary d-inline-block m-4 btn-hover w-50">ユーザー情報変更</a>
            </div>
            <div class="col-md-6">
            <a href="../auth/userDelete?userId={{$user->id}}" onclick="return confirm('ユーザーを消去してよろしいでしょうか？')" class="btn btn-primary d-inline-block m-4 btn-hover w-50">退会</a>
            </div>
        </div>
        
       
    </div>
</body>