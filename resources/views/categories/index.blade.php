<x-guest-layout>
    <section>
        <style>
            .row {
                display: flex;
                flex-wrap: wrap;
                padding: 0 4px;
            }

            .column {
                flex: 25%;
                max-width: 25%;
                padding: 0 4px;
            }

            .column img {
                margin-top: 8px;
                vertical-align: middle;
                width: 100%;
            }

            @media screen and (max-width: 800px) {
                .column {
                    flex: 50%;
                    max-width: 50%;
                }
            }

            @media screen and (max-width: 600px) {
                .column {
                    flex: 100%;
                    max-width: 100%;
                }
            }
        </style>
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="mt-4 text-center">
                <h2 style="color:black" class="text-3xl font-bold text-transparent bg-clip-text">
                    Nuestra Carta</h2>
            </div>
            <div class="row">
                <div class="column">
                    <img src="{{ URL::asset('/images/p03.jpg') }}">
                    <img src="{{ URL::asset('/images/p02.jpg') }}">
                    <img src="{{ URL::asset('/images/p03.jpg') }}">
                    <img src="{{ URL::asset('/images/p02.jpg') }}">
                    <img src="{{ URL::asset('/images/p01.jpg') }}">
                    <img src="{{ URL::asset('/images/p04.jpg') }}">
                </div>
                <div class="column">
                    <img src="{{ URL::asset('/images/p01.jpg') }}">
                    <img src="{{ URL::asset('/images/p03.jpg') }}">
                    <img src="{{ URL::asset('/images/p02.jpg') }}">
                    <img src="{{ URL::asset('/images/p04.jpg') }}">
                    <img src="{{ URL::asset('/images/p03.jpg') }}">
                    <img src="{{ URL::asset('/images/p04.jpg') }}">
                    <img src="{{ URL::asset('/images/p03.jpg') }}">
                </div>
                <div class="column">
                    <img src="{{ URL::asset('/images/p04.jpg') }}">
                    <img src="{{ URL::asset('/images/p03.jpg') }}">
                    <img src="{{ URL::asset('/images/p01.jpg') }}">
                    <img src="{{ URL::asset('/images/p04.jpg') }}">
                    <img src="{{ URL::asset('/images/p02.jpg') }}">
                    <img src="{{ URL::asset('/images/p04.jpg') }}">
                    <img src="{{ URL::asset('/images/p01.jpg') }}">
                </div>
                <div class="column">
                    <img src="{{ URL::asset('/images/p01.jpg') }}">
                    <img src="{{ URL::asset('/images/p03.jpg') }}">
                    <img src="{{ URL::asset('/images/p02.jpg') }}">
                    <img src="{{ URL::asset('/images/p03.jpg') }}">
                    <img src="{{ URL::asset('/images/p02.jpg') }}">
                    <img src="{{ URL::asset('/images/p04.jpg') }}">
                </div>
            </div>
    </section>
</x-guest-layout>
