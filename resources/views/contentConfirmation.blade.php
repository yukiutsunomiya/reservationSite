@include('components.header')
<body>
    <header>
        <p class="bg-dark text-white">予約ページ</p>
    </header>
    <main>
        <div class="container border text-center">
            <div class="container border text-center mt-2">
                <p class="mt-5"><span class="h4">ご予約内容の確認&emsp;</span><a href="/{{$store_url}}/bookingDetails?adult={{$adult}}&child={{$child}}&date={{$date}}&time={{$time}}&seat={{$seat}}&$opinion={{$opinion}}&surName={{$surName}}&name={{$name}}&hiraganaSurName={{$hiraganaSurName}}&hiraganaName={{$hiraganaName}}&mobilePhone={{$mobilePhone}}&email={{$email}}" class="text-warning text-decoration-none">変更する</a></p>
                
                <p class="pt-3 h4">人数：大人{{$adult}}名様,お子様{{$child}}名様</p>
                @php
                   $createDate = date("Y年n月j日", strtotime($date));
                @endphp
                <p class="h5">日付：{{$createDate}}&nbsp;{{$time}}開始</p>
                <p class="h5">座席：{{$seat}}</p>
                <p class="h5">ご要望ご意見：{{$opinion}}</p>

                <p class="mt-5"><span class="h4">ご連絡先&emsp;</span><a href="/{{$store_url}}/bookingContents?adult={{$adult}}&child={{$child}}&date={{$date}}&time={{$time}}&seat={{$seat}}&$opinion={{$opinion}}&surName={{$surName}}&name={{$name}}&hiraganaSurName={{$hiraganaSurName}}&hiraganaName={{$hiraganaName}}&mobilePhone={{$mobilePhone}}&email={{$email}}" class="text-warning text-decoration-none">変更する</a></p>
                
                <p class="h5">お名前：{{$surName}}&nbsp;{{$name}}（{{$hiraganaSurName}}&nbsp;{{$hiraganaName}}）</p>
                <p class="h5">携帯電話番号：{{$mobilePhone}}</p>
                <p class="h5">メールアドレス：{{$email}}</p>
            </div>
            <form action="/{{$store_url}}/reservationCompleted" method="get">
                 @csrf
                <input name="adult" type="hidden" value="{{$adult}}"> 
                <input name="child" type="hidden" value="{{$child}}"> 
                <input name="date" type="hidden" value="{{$date}}"> 
                <input name="time" type="hidden" value="{{$time}}"> 
                <input name="seat" type="hidden" value="{{$seat}}">
                <input name="opinion" type="hidden" value="{{$opinion}}">
                <input name="surName" type="hidden" value="{{$surName}}">
                <input name="name" type="hidden" value="{{$name}}">
                <input name="hiraganaSurName" type="hidden" value="{{$hiraganaSurName}}">
                <input name="hiraganaName" type="hidden" value="{{$hiraganaName}}">
                <input name="mobilePhone" type="hidden" value="{{$mobilePhone}}">
                <input name="email" type="hidden" value="{{$email}}">
                <button type="submit" class="btn btn-primary d-inline-block my-4 btn-hover w-25">予約内容を確定</button>
            </form>
        </div>  
    </main>