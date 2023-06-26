@include('components.authHeader')
<main>
    <div class="container my-5">
        <h3 class="text-center">
            ユーザー一覧
        </h3>
        @foreach($users as $user)
            <div class="p-2 border border-dark hover btn-hover">
                <a class="text-decoration-none" href="../auth/user?id={{$user->id}}&name={{$user->name}}&furigana={{$user->furigana}}
                &telephone={{$user->telephone}}&email={{$user->email}}&store_url={{$user->store_url}}">番号：{{$user-> id}} &emsp; 名前：{{$user-> name}} &emsp; 電話番号：{{$user-> telephone}} &emsp; メールアドレス：{{$user-> email}} &emsp; 店舗url：{{$user-> store_url}}</a><br>
            </div>
        @endforeach  
    </div>
</main>