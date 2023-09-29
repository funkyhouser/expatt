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
                    En nuestra sección En movimiento encontrarás toda la información pertinente para circular y recorrer el estado mexicano.

                    ¿Pero qué ocurre con los expat que cuentan con movilidad propia, ya sea comprada o rentada? Aquí te contamos todo lo que debes saber al respecto.<br><br>
                </p>
                <h3 class="text-[#3C137C] font-bold text-2xl">Países del Mercosur</h3>
                <p class="mb-4">
                    Aquellas personas que llegan a Argentina desde algún Estado que forme parte del Mercosur podrán circular con la licencia de conducir emitida por su país de origen, aunque no tengan la nacionalidad Argentina.<br><br>

                    Es decir que no deberán realizar ningún trámite obligatorio.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">España & Italia</h3>
                <p class="mb-4">
                    En el caso de aquellos inmigrantes provenientes de España o Italia pueden optar por la homologación de licencias en lugar de sacar un permiso de conducir nuevo.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Chile</h3>
                <p class="mb-4">
                    Por un acuerdo de reciprocidad entre el Gobierno de Argentina y la República de Chile, se reconoce la validez de las licencias emitidas en el país vecino por lo que los chilenos no deben realizar el trámite de cédula nueva.<br><br>

                    Este beneficio se puede gozar por el lapso de un año de permanencia en el territorio.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Otros países</h3>
                <p class="mb-4">
                    En el caso de extranjeros de otros países, podrán tramitar la habilitación para conducir en la Ciudad de Buenos Aires o en la Dirección de Tránsito correspondiente a la Municipalidad de su domicilio.<br><br>

                    Sin embargo, quienes cuenten con radicación temporaria en Argentina deben saber que el permiso obtenido tendrá validez por el tiempo de la radicación otorgada por Migraciones.<br><br>

                    Además, la vigencia de las licencias de conducir también contempla la edad de la persona solicitante.
                </p>
            </article>
            <div class="my-6 text-center">
                <a href="{{ route('argentina') }}"
                    class="mx-auto block w-full lg:w-max rounded-xl px-0 lg:px-4 py-3 shadow-lg bg-[#3C137C] font-bold text-xl text-white">
                    Volver
                </a>
            </div>
        </div>
    </section>
    {{-- SANTANDER --}}
    <section class="pb-12 bg-white">
        <div class="mx-auto my-auto lg:max-w-screen-lg sm:px-6 lg:px-8">
            <a href="#" class="grid bg-[#402D97] lg:grid-cols-3 group/santander">
                <div class="relative col-span-2 bg-cover bg-santander-pattern h-80">
                    <img class="absolute bottom-0 max-w-sm -right-[42%] lg:right-auto lg:-translate-x-1/2 lg:left-1/2"
                        src="{{ asset('images/santander/santander-girl.png') }}" alt="santander">
                    <img class="absolute w-20 -translate-y-1/2 left-12 top-1/2"
                        src="{{ asset('images/santander/santander-logo.svg') }}" alt="santander logo">
                </div>
                <div class="flex flex-col justify-center w-4/5 py-8 mx-auto lg:py-0">
                    <h2 class="mb-3 text-2xl font-black leading-7 text-white">Abre tu cuenta SoyExpat en Santander,
                        ¡100% gratis!</h2>
                    <p class="text-[#F9F9F9] mb-4 leading-4">Obtén tu tarjeta de débito ahora y empieza a disfrutar
                        ahorros y promociones increíbles en tus compras.</p>
                    <div class="flex text-center">
                        <p
                            class="text-[#47108E] font-bold py-3 w-full lg:w-3/5  border-b-2 border-[#3CEBA7] bg-white group-hover/santander:bg-[#3CEBA7] transition rounded-t">
                            ¡Pedila ahora!
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </section>
</x-app-layout>
