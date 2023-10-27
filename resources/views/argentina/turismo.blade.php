<x-app-layout>
    {{-- HERO --}}
    <section class="min-h-[350px] h-[400px] bg-no-repeat bg-impuestos bg-center bg-cover">
        <div class="flex flex-col justify-end h-full max-w-screen-lg px-4 pb-16 mx-auto my-auto sm:px-6 lg:px-8">
            <h1 class="text-4xl font-black text-white uppercase lg:text-7xl leading-[.9_!important]">
                Turismo
            </h1>
        </div>
    </section>

    {{-- Articulo --}}
    <section class="py-12 bg-white">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <article class="text-black">
                <p class="mb-4">
                    En Argentina encontrarás un crisol de paisajes: playas, montañas, ríos, lagos, ruinas históricas, y mucho más; atravesados por los “4 climas” (ver /El país) que van desde el calor tropical hasta el frío intenso dependiendo de la región y época del año.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Costa Atlántica</h3>
                <p class="mb-4">
                    Las playas de la provincia de Buenos Aires son destino habitual de los argentinos, fundamentalmente durante el verano que, en esta zona del mapa, abarca de diciembre a marzo.<br><br>

                    Las más populares son Mar del Plata, Pinamar, Villa Gesell y Cariló, aunque hay muchas más que varían en cuanto a estructura hotelera, servicios turísticos y nivel de población.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">NOA</h3>
                <p class="mb-4">
                    El Norte Argentino abarca, principalmente, las provincias de Salta, Jujuy y Tucumán. Con sus tierras poco pobladas, de extensa belleza, llenas de elementos geológicos, y cuya cultura celebra las tradiciones más antiguas es una visita imperdible para cualquier persona.<br><br>

                    Algunos de los sitios más ricos de la zona son:<br>
                    <b>En Salta:</b> Cafayate, Cachi, Iruya, Tren de las nubes, Salinas grandes.<br>
                    <b>En Tucumán:</b> Tafí del Valle, Amaicha del Valle, Casa Histórica de Tucumán, la Plaza de la Independencia.<br>
                    <b>En Jujuy:</b> Tilcara, Purmamarca, Humahuaca, La Quiaca.<br>
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Cataratas del Iguazú</h3>
                <p class="mb-4">
                    La zona mesopotámica del país abarca las provincias de Corrientes, Entre Ríos y Misiones. En esta última, al límite con Brasil y Paraguay, se encuentra la ciudad de Puerto Iguazú, destino frecuente de visitantes que viajan a conocer las fastuosas cataratas, consideradas uno de los mayores espectáculos naturales del mundo.<br><br>

                    Las Cataratas del Iguazú están resguardadas por parques nacionales y enmarcadas por la exuberante selva misionera, que constituye unas de las regiones con mayor biodiversidad del continente.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Bariloche</h3>
                <p class="mb-4">
                    Ubicada al sur de Argentina, la ciudad es parte del parque nacional Nahuel Huapi, junto a la cordillera de los Andes. Es considerada la capital nacional del turismo de aventura y del chocolate.<br><br>

                    Sus paisajes naturales son postales de la Patagonia argentina. Allí podrás disfrutar de variadas propuestas como: excursiones, paseos, deportes en la nieve, gastronomía, actividades familiares, aventura, y agenda cultural diversa.
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
            <x-santander />
        </div>
    </section>
</x-app-layout>
