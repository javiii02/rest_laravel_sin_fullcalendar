<x-guest-layout>


    <style>
        #img_anim {
            transition-property: transform, opacity;
            transition-duration: 1s;
            transition-timing-function: ease-in-out;
            opacity: 1;
            box-shadow: 10px 10px 5px #888;
        }

        #img_anim:hover {
            transform: translate(40px, 40px);
            opacity: 0.5;
        }

        #img_anim2 {
            transition-property: transform;
            transition-duration: 1s;
            transition-timing-function: ease-in-out;
            box-shadow: 10px 10px 5px #888;
        }

        #img_anim2:hover {
            transform: scale(1.2);
        }
    </style>
    <!-- Foto Inicio Index -->
    <div class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
        style="background-image: url('https://images.pexels.com/photos/8112401/pexels-photo-8112401.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
        <h1 class="font-mono text-3xl font-extrabold text-transparent bg-clip-text md:text-center sm:leading-none lg:text-5xl"
            style="color: black">
            <span class="inline md:block">Cheers. Bar & Grill</span>
        </h1>
        <div style="color: black" class="mx-auto mt-2 text-green-50 md:text-center lg:text-lg">
            Moderno y acogedor, con una amplia gama de cervezas, vinos y cocteles, así como una
            variedad de opciones de comida de parrilla de alta calidad para disfrutar.
        </div>
        <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
                <a href="{{ route('reservations.step.one') }}" type="button"
                    class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-600 rounded-full lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
                    Haz tu reserva
                </a>
        </div>
    </div>
    <!-- Fin Foto Inicio Index -->

    <!-- Nuestra Carta -->
    <section class="py-20 bg-gray-50">
        <div class="container items-center max-w-6xl px-4 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                        <h2 class="mb-4 text-3xl font-bold text-transparent bg-clip-text" style="color: black">
                            Nuestra carta</h2>

                        <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">
                            La carta de Cheers Bar & Grill ofrece una amplia variedad de opciones de comida a la
                            parrilla de alta calidad, desde cortes de carne premium como el filete hasta opciones de
                            aves y pescado fresco. También cuenta con una selección de acompañamientos deliciosos, desde
                            papas al horno hasta ensaladas frescas y vegetales.</p>
                    </div>
                    <div class="relative flex">
                        <a href="/nuestra_carta"
                            class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                            Más información.
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
                        class="mx-auto sm:max-w-sm lg:max-w-full" id="img_anim"
                        src="{{ URL::asset('/images/carta.jpg') }}" alt="feature image"></div>
            </div>
        </div>
    </section>
    <!-- Fin Nuestra Carta -->

    <!-- ¿Quienes somos? -->
    <section class="py-20 bg-gray-50">
        <div class="container items-center max-w-6xl px-4 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                        <h2 class="mb-4 text-3xl font-bold text-transparent bg-clip-text" style="color: black">
                            ¿Quienes somos?</h2>

                        <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Cheers. Bar & Grill es un
                            asador fundado en el año 2000 con un ambiente relajado y divertido, ofrece una amplia
                            variedad de opciones de comida a la parrilla de alta calidad y una gran selección de
                            cervezas para disfrutar con amigos y familia.</p>
                    </div>
                    <div class="relative flex">
                        <a href="#_"
                            class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                            Más información.
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
                        class="mx-auto sm:max-w-sm lg:max-w-full" id="img_anim2"
                        src="{{ URL::asset('/images/img_ind.jpg') }}" alt="feature image"></div>
            </div>
    </section>
    <!-- Fin ¿Quienes somos? -->
</x-guest-layout>
