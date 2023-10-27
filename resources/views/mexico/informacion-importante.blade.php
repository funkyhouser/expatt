<x-app-layout>
    {{-- HERO --}}
    <section class="min-h-[350px] h-[400px] bg-informacion bg-no-repeat bg-center bg-cover">
        <div class="flex flex-col justify-end h-full max-w-screen-lg px-4 pb-16 mx-auto my-auto sm:px-6 lg:px-8">
            <h1 class="text-4xl font-black text-white uppercase lg:text-7xl leading-[.9_!important]">
                Información <br>importante
            </h1>
        </div>
    </section>

    {{-- Comienza tu vida en --}}
    <section class="py-12 bg-white">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <article id="trabaja" class="">
                <div class="text-black">
                    <h2 class="mb-6 text-[#3C137C] font-bold text-4xl">Geografía / demografía </h2>
                    <p class="mb-4">
                        Los Estados Unidos Mexicanos se encuentran en el continente americano, más
                        precisamente en América del Norte, al límite de Estados Unidos, Bélice y Guatemala.<br><br>

                        Rodeado por el Mar Caribe, el Golfo de México y el Océano Pacífico; su superficie es de
aproximadamente 2 millones de kilómetros cuadrados y su población supera los 130
millones de habitantes.<br><br>
Según los últimos datos publicados por la ONU, alrededor de 1.197.624 expatriados
residen en el país, lo que representa un 0,94% de la población total mexicana. De esa
cifra un 66,74% proviene de Estados Unidos, mientras que un 5,88% proviene de
Venezuela y un 3,87% de Guatemala; en el podio de movimientos migratorios.<br><br>
A nivel mundial, México ocupa el puesto 158º en el ranking de países con mayor
porcentaje de expat. Esto puede deberse a que, en los últimos años, se ha posicionado
como el estado más amigable con los extranjeros.<br><br>
Según las encuestas, México se encuentra entre los mejores países de Latinoamérica a
la hora de recibir a personas provenientes de otros territorios, superando
ampliamente a Costa Rica, Ecuador y Colombia.<br><br>
Su capital es la Ciudad de México (CDMX), también conocida como Distrito Federal
(DF), donde reside la mayor parte de su población. La lengua nacional, reconocida
oficialmente, es el español. Sin embargo, existen otras 68 lenguas de origen indígena
propias del país, lo que convierten a México en el estado con mayor número de
hispanohablantes del mundo.
                    </p>

                    <h2 class="text-[#3C137C] font-bold text-2xl">Forma de gobierno</h2>
                    <p class="mb-4">
                        México es una república representativa y democrática, conformada por 31 estados
libres y soberanos, y CDMX. Su gobierno es federal y está integrado por los Poderes
Ejecutivo, Legislativo y Judicial.<br><br>
Su actual presidente es Andrés Manuel López Obrador, también conocido como AMLO,
político y escritor mexicano que resultó electo en diciembre de 2018 y cuyo mandato
finalizará en septiembre de 2024.
                    </p>

                    <h3 class="text-[#3C137C] font-bold text-2xl">Clima</h3>
                    <p class="mb-4">
                        El territorio presenta gran amplitud climática, oscilando entre frío, húmedo, cálido y
hasta desértico según la zona.<br><br>

Se destacan con mayor extensión el cálido subhúmedo, seco y semiseco, muy seco o
seco desértico. Y con menor superficie: cálido húmedo, templado subhúmedo,
templado húmedo y frío, en menor medida.
                    </p>

                    <h3 class="text-[#3C137C] font-bold text-2xl">Economía</h3>
                    <p class="mb-4">
                        Su moneda es el peso mexicano, y su modelo económico mixto. Esto quiere decir que
combina elementos de la economía de mercado y la economía planificada, donde
convive un sector privado compuesto por individuos y empresas que velan por sus
intereses y un sector público donde el Estado decide cómo producir y distribuir
algunos bienes y servicios.
                    </p>
                </div>
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
