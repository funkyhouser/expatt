<x-app-layout>
    {{-- HERO --}}
    <section class="min-h-[500px] h-[500px] lg:h-[630px] bg-renta bg-no-repeat bg-center bg-cover">
        <div class="flex flex-col justify-end h-full max-w-screen-lg px-4 pb-16 mx-auto my-auto sm:px-6 lg:px-8">
            <h1 class="text-4xl font-black text-white uppercase lg:text-7xl leading-[.9_!important]">
                Te ayudamos a<br>encontrar tu casa
            </h1>
        </div>
    </section>

    {{-- Comienza tu vida en --}}
    <section class="py-12 bg-white">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <article id="trabaja" class="grid grid-cols-5 gap-4">
                <div class="col-span-5 lg:col-span-4">
                    <h2 class="mb-6 text-xl font-black text-[#3C137C] lg:text-4xl">
                        Renta
                    </h2>
                    <p class="mb-4">
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.
                    </p>

                    <h2 class="mb-4 text-[#3C137C] font-bold text-2xl">Lorem, ipsum dolor.</h2>
                    <p class="mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel metus felis. Nam eleifend eu magna vitae fermentum. Etiam orci justo, egestas et sagittis et, tincidunt sed urna.
                    </p>
                </div>
                <div class="hidden lg:block lg:col-span-1">
                    <img src="{{ asset('images/ads/airbnb-ads.jpg') }}" alt="" class="w-full">
                </div>
            </article>
            <div class="my-6 text-center">
                <a href="{{ route('argentina') }}" class="mx-auto block w-full lg:w-max rounded-sm px-0 lg:px-10 py-3 shadow-md bg-[#3C137C] font-medium text-2xl text-white">Volver atrás</a>
            </div>

            <div class="py-8">
                <img src="{{ asset('images/ads/booking-ads.jpg') }}" alt="" class="w-full">
            </div>

        </div>
    </section>
     {{-- SANTANDER --}}
     <section class="pb-12">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <div class="grid bg-[#402D97] lg:grid-cols-3">
                <div class="relative col-span-2 overflow-hidden bg-cover bg-santander-pattern h-80 lg:overflow-visible">
                    <img class="absolute bottom-0 max-w-sm -right-[45%] lg:right-auto lg:-translate-x-1/2 lg:left-1/2" src="{{ asset('images/santander/santander-girl.png') }}" alt="santander">
                    <img class="absolute w-20 -translate-y-1/2 left-12 top-1/2" src="{{ asset('images/santander/santander-logo.svg') }}" alt="santander logo">
                </div>
                <div class="flex flex-col justify-center w-4/5 py-8 mx-auto lg:py-0">
                    <h2 class="mb-3 text-2xl font-black leading-7 text-white">Abre tu cuenta SoyExpat en Santander, ¡100% gratis!</h2>
                    <p class="text-[#F9F9F9] mb-4 leading-4">Obtén tu tarjeta de débito ahora y empieza a disfrutar ahorros y promociones increíbles en tus compras.</p>
                    <div class="flex text-center">
                        <a href="#"
                            class="text-[#47108E] font-bold py-3 w-full lg:w-3/5  border-b-2 border-[#3CEBA7] bg-white rounded-t">
                            ¡Pedila ahora!
                        </a>
                    </div>
                </div>
            </div>
        </div>
     </section>
    {{-- Encontra tu casa --}}
    <section class="pb-12 bg-white">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <p class="mb-6 text-xl font-black text-center text-[#3C137C] lg:text-3xl">Te ayudamos a encontrar tu casa</p>
            <div class="flex justify-center gap-4 text-lg font-black text-white lg:text-2xl">
                <a href="#" class="overflow-hidden rounded">
                    <img class="object-cover w-full" src="{{ asset('images/casa/renta.jpg') }}" alt="renta">
                    <p class="text-center w-full py-2 lg:py-4 bg-[#3C137C]">Renta</p>
                </a>
                <a href="#" class="overflow-hidden rounded">
                    <img class="object-cover w-full" src="{{ asset('images/casa/compra.jpg') }}" alt="compra">
                    <p class="text-center w-full py-2 lg:py-4 bg-[#3C137C]">Compra</p>
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
