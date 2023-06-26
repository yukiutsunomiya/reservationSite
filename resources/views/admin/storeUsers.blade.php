@include('components.adminHeader')
@include('components.adminStoreheader')
<main>
    <div class="container my-5">
        <h3 class="text-center">
        店舗【{{$name}}】のユーザー一覧
        </h3>
        @foreach($users as $user)
            <div class="p-2 border border-dark hover btn-hover">
                <a class="text-decoration-none" href="../admin/user?userId={{$user->id}}&userName={{$user->name}}&userFurigana={{$user->furigana}}&userTelephone={{$user->telephone}}&userEmail={{$user->email}}&id={{$id}}&name={{$name}}&furigana={{$furigana}}&telephone={{$telephone}}&zipCode={{$zipCode}}&prefectures={{$prefectures}}&address={{$address}}&businessDay={{$businessDay}}&businessHours={{$businessHours}}&store_url={{$user->store_url}}">番号：{{$user-> id}} &emsp; 名前：{{$user-> name}} &emsp; 電話番号：{{$user-> telephone}} &emsp; 店舗url：{{$user-> store_url}}</a><br>
            </div>
        @endforeach  
    </div>
</main>