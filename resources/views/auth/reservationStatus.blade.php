@include('components.authHeader')
<main>
    <div class="container my-5">
        <h3 class="text-center">
        予約一覧
        </h3>
        @foreach($reservations as $reservation)
            <div class="p-2 border border-dark hover btn-hover">
                <a class="text-decoration-none" href="../auth/reservationStatu?reservationId={{$reservation->id}}&reservationAdult={{$reservation->adult}}
                    &reservationChild={{$reservation->child}}&reservationDate={{$reservation->date}}&reservationTime={{$reservation->time}}
                    &reservationSurName={{$reservation->surName}}&reservationName={{$reservation->name}}&reservationHiraganaSurName={{$reservation->hiraganaSurName}}
                    &reservationHiraganaName={{$reservation->hiraganaName}}&reservationMobilePhone={{$reservation->mobilePhone}}&reservationEmail={{$reservation->email}}
                    &reservationStore_url={{$reservation->store_url}}">
                    番号：{{$reservation-> id}} &emsp; 名前：{{$reservation-> name}} &emsp; 電話番号：{{$reservation-> mobilePhone}} &emsp; 日付：{{$reservation-> date}}
                    &emsp; 日時：{{$reservation-> time}}
                </a><br>
            </div>
        @endforeach  
    </div>
</main>