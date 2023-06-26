@include('components.header')
<body class="text-center">
    <h2 class="text-center my-5">予約完了致しました。</h2>
    <p class="pt-3 h4">人数：大人{{$adult}}名様,お子様{{$child}}名様</p>
    @php
        $createDate = date("Y年n月j日", strtotime($date));
    @endphp
    <p class="h5">日付：{{$createDate}}&nbsp;{{$time}}開始</p>
    <p class="h5">座席：{{$seat}}</p>
    <p class="h5">ご要望ご意見：{{$opinion}}</p>
    <p class="mt-5"><span class="h4">ご連絡先</p>
    <p class="h5">お名前：{{$surName}}&nbsp;{{$name}}（{{$hiraganaSurName}}&nbsp;{{$hiraganaName}}）</p>
    <p class="h5">携帯電話番号：{{$mobilePhone}}</p>
    <p class="h5">メールアドレス：{{$email}}</p>
</body>