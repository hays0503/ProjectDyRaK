@push('card-scripts')
    @vite(['resources/js/importCard.js'])

    <div class="row">
        <div class="col-4">
            <button id="showForPrevButton" class="buttonShowPrevCard">Показать.Пред</button>
        </div>
        <div class="col-4">
            <button id="hideHands" style="background-color:rgb(255, 255, 255)" id="count">Скрыть/Показать колоду</button>

        </div>
        <div class="col-4">
            <button id="showForNextButton" class="buttonShowNextCard">Показать.Cлед</button>
        </div>
    </div>
@endpush('other-scripts')
