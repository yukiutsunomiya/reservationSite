@include('components.authHeader')
<body>
    <div class="container my-5 text-center">
        <h3 class="text-center">予約情報</h3>
        <p class="h5">ID：{{$reservationId}}</p>
        <p class="h5">名前：{{$reservationSurName}}{{$reservationName}}</p>
        <p class="h5">フリガナ：{{$reservationHiraganaSurName}}{{$reservationHiraganaName}}</p>
        <p class="h5">電話番号：{{$reservationMobilePhone}}</p>
        <p class="h5">メールアドレス：{{$reservationEmail}}</p>
        <p class="h5">日付：{{$reservationDate}}</p>
        <p class="h5">時間：{{$reservationTime}}</p>       
        <p class="h5">大人：{{$reservationAdult}}人</p>
        <p class="h5">子供：{{$reservationChild}}人</p>
        <p class="h5">意見：{{$reservationOpinion}}人</p>
        <p class="h5">使用url：{{$reservationStore_url}}</p>
    <div>
</body>