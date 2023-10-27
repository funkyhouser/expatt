<x-app-layout>
    {{-- HERO --}}
    <section class="min-h-[350px] h-[400px] bg-no-repeat bg-carnet-conducir bg-center bg-cover">
        <div class="flex flex-col justify-end h-full max-w-screen-lg px-4 pb-16 mx-auto my-auto sm:px-6 lg:px-8">
            <h1 class="text-4xl font-black text-white uppercase lg:text-7xl leading-[.9_!important]">
                Carnet de conducir
            </h1>
        </div>
    </section>

    {{-- Articulo --}}
    <section class="py-12 bg-white">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <article class="text-black">
                <p class="mb-4">
                    En nuestra sección <b>En movimiento</b> encontrarás toda la información pertinente para circular y recorrer el estado mexicano.

                    ¿Pero qué ocurre con los expat que cuentan con movilidad propia, ya sea comprada o rentada? Aquí te contamos todo lo que debes saber al respecto.<br><br>

                    Si bien la licencia de tu país de origen es válida, te recomendamos obtener un permiso especial para conducir que te autorizará a andar por las calles con tu vehículo. Puedes solicitarlo desde tu país de origen o, bien, hasta 6 meses después de haber tocado tierra azteca. <br><br>

Se aconseja siempre tener a mano tanto el permiso especial obtenido en México como el de tu país de origen a la hora de conducir. <br><br>

Podrás cargar combustible en las estaciones o gasolineras. El valor varía según la compañía pero ronda los U$S 1,25 el litro.

                </p>

            </article>
            <div class="my-6 text-center">
                <a href="{{ route('mexico') }}"
                    class="mx-auto block w-full lg:w-max rounded-xl px-0 lg:px-4 py-3 shadow-lg bg-[#3C137C] font-bold text-xl text-white">
                    Volver
                </a>
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
