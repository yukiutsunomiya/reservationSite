<template>
    <div class="container">
        <form action="/bookingDetails" method="get">
            <label class="checkbox-inline mb-2">
                <input type="checkbox" v-model="checkAgree" required>上記の内容を確認しました
            </label><br>
            <button type="submit" class="btn btn-primary d-inline-block mb-4 btn-hover w-25">送信する</button>
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