@include('components.adminHeader')
<main>
    <div class="container my-5">
        <h3 class="text-center">
            店舗一覧
        </h3>
        @foreach($stores as $store)
            <div class="p-2 border border-dark hover btn-hover">
                <a class="text-decoration-none" href="../admin/store?id={{$store->id}}&name={{$store->name}}&furigana={{$store->furigana}}&telephone={{$store->telephone}}&zipCode={{$store->zipCode}}&prefectures={{$store->prefectures}}&address={{$store->address}}&businessDay={{$store->businessDay}}&businessHours={{$store->businessHours}}&store_url={{$store->store_url}}">番号：{{$store-> id}} &emsp; 名前：{{$store-> name}} &emsp; 電話番号：{{$store-> telephone}} &emsp; 店舗url：{{$store-> store_url}}</a><br>
            </div>
        @endforeach  
    </div>
</main>