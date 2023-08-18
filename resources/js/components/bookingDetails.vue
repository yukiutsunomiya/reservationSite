<template>
    <div class="container border text-center">
        <form action="/bookingContents" method="get">
            <label for="adult" class="h4 mt-5">大人<span class="text-danger">（必須）</span>:&nbsp;</label>
            <select name="adult" id="adult" class="h5" required>
                <option value="">選択してください</option>
                <option value="1">1人様</option>
                <option value="2">2人様</option>
                <option value="3">3人様</option>
                <option value="4">4人様</option>
                <option value="5">5人様</option>
                <option value="6">6人様</option>
                <option value="7">7人様</option>
                <option value="8">8人様</option>
                <option value="9">9人様</option>
                <option value="10">10人様</option>
                <option value="11">11人様</option>
                <option value="12">12人様</option>
            </select>
            <label for="child" class="h4 mt-5">&emsp;&emsp;お子様<span class="text-danger">（必須）</span>&nbsp;</label>
            <select name="child" id="child" class="h5">
                <option value="">選択してください</option>
                <option value="0">なし</option>
                <option value="1">1人様</option>
                <option value="2">2人様</option>
                <option value="3">3人様</option>
                <option value="4">4人様</option>
                <option value="5">5人様</option>
                <option value="6">6人様</option>
                <option value="7">7人様</option>
                <option value="8">8人様</option>
                <option value="9">9人様</option>
                <option value="10">10人様</option>
                <option value="11">11人様</option>
                <option value="123">12人様</option>
            </select><br>
            <p class="h4 mt-4">営業日：管理者ユーザーが設定した内容をDBから取得</p>
            <label for="date" class="h4 mt-1">お日付<span class="text-danger">（必須）</span>:&nbsp;</label>
            <input name="date" type="date" id="date" required><br>
            <p class="h4 mt-4">営業時間：管理者ユーザーが設定した内容をDBから取得</p>
            <label for="time" class="h4 mt-1">お時間&nbsp;</label>
            <input name="time" type="time" id="time" step="1800" required><br>
            
            <label for="seat" class="h4 mt-4">席種をお選びください<span class="text-danger">（必須）</span>:&nbsp;</label>
            <select name="seat" id="seat" class="h5" required>
                <option value="指定なし">指定なし</option>
                <option value="テーブル">テーブル</option>
                <option value="カウンター">カウンター</option>
            </select><br>
            <p class="h4 mt-4">ご要望とご質問:</p>
            <p class="h6">
                ご予約についてのご要望はこちらに記入をお願いいたします。<br>
                （例）アレルギー、バースデープレートのお祝いメッセージなど
            </p>
            <textarea name="opinion" class="mb-4" rows="10" cols="50"></textarea><br>
            <button type="submit" class="btn btn-primary d-inline-block mb-4 btn-hover w-25">条件を決定して次へ</button>
        </form>
    </div>
</template>

<script>
    export default{
    data(){
      return{
        checkAgree: false
      }
    },
    created(){
    },
    methods:{
    }
  }
</script>