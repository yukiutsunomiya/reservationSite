@include('components.authHeader')
<main>
    <div class="container my-5 text-center">
        <h2>LINE Notifyのトークン登録画面</h2>
        <a href="https://notify-bot.line.me/ja/" class="mb-3 d-inline-block" target="_blank" rel="noopener noreferrer">LINE Notifyの公式サイト</a><br>
        <a href="https://laboratory.kazuuu.net/issue-line-notify-access-token/#:~:text=%E2%96%A0LINE%20Notify%E3%81%B8%E3%83%AD%E3%82%B0%E3%82%A4%E3%83%B3%E3%81%99%E3%82%8B&text=%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B9%E3%81%99%E3%82%8B%E3%81%A8%E3%80%81LINE%20Notify%E3%81%AE,%E3%83%9C%E3%82%BF%E3%83%B3%E3%82%92%E3%82%AF%E3%83%AA%E3%83%83%E3%82%AF%E3%81%97%E3%81%BE%E3%81%99%E3%80%82" target="_blank" rel="noopener noreferrer" class="mb-3 d-inline-block">LINE Notifyのトークン取得方法</a>
        <form action="tokenRegistration" method="post">
            <p>LINE Notifyのトークン：<input type="text" name="token" class="w-50" required></p>
            <button type="submit" class="btn btn-primary d-inline-block mt-2 btn-hover w-25" onclick="return confirm('トークンを登録してよろしいでしょうか。')" >トークン登録</button>
        </form>
    </div>
</main>