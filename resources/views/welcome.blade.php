<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Игра в дурака</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])

    {{-- <script type="text/javascript" src="{{ asset('js/cards.js') }}"></script> --}}
</head>

<body class="antialiased">
    <div class="container text-center MainWidget">
        <h1 class="align-self-center text-light">Игра началась</h1>

        <div class="row TopWidget">
            <div class="col">
                <div class="Top">
                    <div class="handsTop">
                        @include('CardTest')
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="Top">
                    <div class="handsTop">
                        @include('CardTest')
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="Top">
                    <div class="handsTop">
                        @include('CardTest')
                    </div>
                </div>
            </div>
        </div>

        <div class="row CenterWidget">
            <div class="col-12 align-self-center text-white">
                Column
                <div class="gameArea">
                    <div class="cardBattle">

                        <img class="imgCardBattleV2" src="{{ asset('/media/img/cards/1/3_club.svg') }}"
                            alt="" />
                        <img class="imgCardBattleV1" src="{{ asset('/media/img/cards/1/4_club.svg') }}"
                            alt="" />
                    </div>
                    <div class="cardBattle">

                        <img class="imgCardBattleV2" src="{{ asset('/media/img/cards/1/5_club.svg') }}"
                            alt="" />
                        <img class="imgCardBattleV1" src="{{ asset('/media/img/cards/1/6_club.svg') }}"
                            alt="" />
                    </div>
                    <div class="cardBattle">

                        <img class="imgCardBattleV2" src="{{ asset('/media/img/cards/1/2_club.svg') }}"
                            alt="" />
                        <img class="imgCardBattleV1" src="{{ asset('/media/img/cards/1/7_club.svg') }}"
                            alt="" />
                    </div>
                    <div class="cardBattle">

                        <img class="imgCardBattleV2" src="{{ asset('/media/img/cards/1/8_club.svg') }}"
                            alt="" />
                        <img class="imgCardBattleV1" src="{{ asset('/media/img/cards/1/9_club.svg') }}"
                            alt="" />
                    </div>
                    <div class="cardBattle">
                        <img class="imgCardBattleV1" src="{{ asset('/media/img/cards/1/jack_club.svg') }}"
                            alt="" />
                        <img class="imgCardBattleV2" src="{{ asset('/media/img/cards/1/10_club.svg') }}"
                            alt="" />

                    </div>
                </div>
            </div>
        </div>

        <div class="row BottomWidget">
            <div class="col align-self-center">
                <div class="Down">
                    <div class="handsBottom">
                        <div id="0" class="gameCard">
                            0
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>
                        <div id="1" class="gameCard">
                            1
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>
                        <div id="2" class="gameCard">
                            2
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>
                        <div id="3" class="gameCard">
                            3
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>
                        <div id="4" class="gameCard">
                            4
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>
                        <div id="5" class="gameCard">
                            5
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>
                        <div id="6" class="gameCard">
                            6
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>
                        <div id="7" class="gameCard">
                            7
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>
                        <div id="8" class="gameCard">
                            8
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>
                        <div id="9" class="gameCard">
                            9
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>
                        <div id="10" class="gameCard">
                            10
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>

                        <div id="11" class="gameCard">
                            11
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>
                        <div id="12" class="gameCard">
                            12
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>
                        <div id="13" class="gameCard">
                            13
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>
                        <div id="14" class="gameCard">
                            14
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>
                        <div id="15" class="gameCard">
                            15
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>
                        <div id="16" class="gameCard">
                            16
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>
                        <div id="17" class="gameCard">
                            17
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>
                        <div id="18" class="gameCard">
                            18
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>
                        <div id="19" class="gameCard">
                            19
                            <img class="imgNormal" src="{{ asset('/media/img/cards/back.svg') }}" alt="" />
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @include('card')
        @stack('card-scripts')

    </div>


</body>

</html>
