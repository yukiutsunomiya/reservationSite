@include('components.authHeader')
<body>
<?php $user = Auth::user(); ?>
    <div class="container my-5 text-center">        
        <h3 class="mb-4">{{$name}}様のユーザー情報</h3>
        <p>ユーザーID：{{$id}}</p>        
                <!--<p>登録番号：{{$user-> id}}</p>-->
        <p>名前：{{$name}}</p>
        <p>フリガナ：{{$furigana}}</p>
        <p>電話番号：{{$telephone}}</p>
        <p>メールアドレス：{{$email}}</p>
        <p>store_url：{{$store_url}}</p>
        <a href="../auth/users" class="btn btn-primary d-inline-block m-4 btn-hover w-50">ユーザー情報一覧へ</a>   
    </div>
</body>