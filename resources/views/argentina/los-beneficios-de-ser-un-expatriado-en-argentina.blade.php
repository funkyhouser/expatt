<x-app-layout>
    {{-- HERO --}}
    <section class="min-h-[350px] h-[400px] bg-renta bg-no-repeat bg-center bg-cover">
        <div class="flex flex-col justify-end h-full max-w-screen-lg px-4 pb-16 mx-auto my-auto sm:px-6 lg:px-8">
            <h1 class="text-4xl font-black text-white uppercase lg:text-7xl leading-[.9_!important]">
                Los beneficios de ser un expatriado en Argentina
            </h1>
        </div>
    </section>

    {{-- Comienza tu vida en --}}
    <section class="py-12 bg-white">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <article id="trabaja" class="grid grid-cols-5 gap-4">
                <div class="col-span-5 lg:col-span-4">
                    <p class="mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu
                        magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae
                        fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum.
                        Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam
                        orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo,
                        egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et
                        sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                        vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis
                        et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus
                        felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et,
                        tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus
                        felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et,
                        tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus
                        felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et,
                        tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus
                        felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et,
                        tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus
                        felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et,
                        tincidunt sed urna.
                    </p>

                    <h2 class="mb-4 text-[#3C137C] font-bold text-2xl">Lorem, ipsum dolor.</h2>
                    <p class="mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu
                        magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae
                        fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum.
                        Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam
                        orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo,
                        egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et
                        sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                        vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis
                        et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus
                        felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et,
                        tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus
                        felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et,
                        tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus
                        felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et,
                        tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus
                        felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et,
                        tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus
                        felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et,
                        tincidunt sed urna.
                    </p>
                </div>
                <div class="col-span-5 lg:col-span-1">
                    <picture>
                        <source srcset="{{ asset('images/ads/airbnb-ads.jpg') }}" media="(min-width: 1024px)">
                        <img srcset="{{ asset('images/ads/airbnb-ads-mobile.jpg') }}" alt="" class="w-full mb-4 rounded-lg">
                    </picture>
                </div>
            </article>
            <div class="my-6 text-center">
                <a href="{{ route('argentina') }}"
                    class="mx-auto block w-full lg:w-max rounded-sm px-0 lg:px-10 py-3 shadow-md bg-[#3C137C] font-medium text-2xl text-white">Volver
                    atrás</a>
            </div>

            <div class="py-8">
                <img src="{{ asset('images/ads/booking-ads.jpg') }}" alt="" class="w-full">
            </div>

        </div>
    </section>
    {{-- SANTANDER --}}
    <section class="pb-12 bg-white">
        <div class="mx-auto my-auto lg:max-w-screen-lg sm:px-6 lg:px-8">
            <x-santander />
        </div>
    </section>
</x-app-layout>
