@include('components.adminHeader')
<main class="text-center">
    <h2 class="text-center my-5">ユーザーの登録が完了いたしました。</h2>
    <p class="pt-3 h4">名前：{{$name}}</p>
    <p class="h5">フリガナ：{{$furigana}}</p>
    <p class="h5">電話番号：{{$telephone}}</p>
    <p class="h5">メールアドレス：{{$email}}</p>
    <p class="h5">使用url：{{$store_url}}</p>
    <p class="h5">使用url：{{$password}}</p>
</body>