@include('components.header')
<body>
    <header>
        <p class="bg-dark text-white">予約ページ</p>
    </header>
    <main>
        <div class="container border text-center">
            <div class="container border text-center">
                <p class="pt-3 h5">人数：大人&nbsp;{{$adult}}名様,&nbsp;お子様&nbsp;{{$child}}名様</p>
                @php
                   $createDate = date("Y年n月j日", strtotime($date));
                @endphp
                <p class="h5">日付：{{$createDate}}&nbsp;{{$time}}開始</p>
                <p class="h5">座席：{{$seat}}</p>
            </div>
            <form action="/{{$store_url}}/contentConfirmation" method="get">
                <input name="adult" type="hidden" value="{{$adult}}"> 
                <input name="child" type="hidden" value="{{$child}}"> 
                <input name="date" type="hidden" value="{{$date}}"> 
                <input name="time" type="hidden" value="{{$time}}"> 
                <input name="seat" type="hidden" value="{{$seat}}">
                <input name="opinion" type="hidden" value="{{$opinion}}">
                <p class="h4 mt-5">確認用ご連絡先を入力してください<span class="text-danger">（必須）</span>:&nbsp;</p>
                @if(isset($surName))
                    <label for="surName" class="h4 mt-3" >姓（漢字）</label>
                    <input name="surName" type="text" id="surName" required value="{{$surName}}">
                    <label for="name" class="h4 mt-3" >&emsp;&emsp;名（漢字）</label>
                    <input name="name" type="text" id="name" required value="{{$name}}"><br>
                    <label for="hiraganaSurName" class="h4 mt-3" >姓（かな）</label>
                    <input name="hiraganaSurName" type="text" id="hiraganaSurName" required value="{{$hiraganaSurName}}" pattern="[\u3041-\u3096]*">
                    <label for="hiraganaName" class="h4 mt-3">&emsp;&emsp;名（かな）</label>
                    <input name="hiraganaName" type="text" id="hiraganaName" required  pattern="[\u3041-\u3096]*" value="{{$hiraganaName}}"><br>
                    <label for="mobilePhone" class="h4 mt-3">携帯電話番号:&emsp;</label>
                    <input name="mobilePhone" type="tel" id="mobilePhone" required  value="{{$mobilePhone}}"><br>
                    <label for="email" class="h4 mt-3">メールアドレス:&emsp;</label>
                    <input name="email" type="text" id="email" required  value="{{$email}}" class="w-50"><br>
                @else
                    <label for="surName" class="h4 mt-3" >姓（漢字）</label>
                    <input name="surName" type="text" id="surName" required>
                    <label for="name" class="h4 mt-3" >&emsp;&emsp;名（漢字）</label>
                    <input name="name" type="text" id="name" required><br>
                    <label for="hiraganaSurName" class="h4 mt-3">姓（かな）</label>
                    <input name="hiraganaSurName" type="text" id="hiraganaSurName" required  pattern="[\u3041-\u3096]*">
                    <label for="hiraganaName" class="h4 mt-3">&emsp;&emsp;名（かな）</label>
                    <input name="hiraganaName" type="text" id="HiraganaName" required  pattern="[\u3041-\u3096]*"><br>
                    <label for="mobilePhone" class="h4 mt-3">携帯電話番号:&emsp;</label>
                    <input name="mobilePhone" type="tel" id="mobilePhone" required><br>
                    <label for="email" class="h4 mt-3">メールアドレス:&emsp;</label>
                    <input name="email" type="text" id="email" required class="w-50"><br>
                @endif
                <button type="submit" class="btn btn-primary d-inline-block my-4 btn-hover w-25">確認ページへ進む</button>
            </form>
        </div>  
    </main>

    <footer>
    </footer>
</body>