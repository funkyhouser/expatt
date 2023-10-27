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

Su historia, su cultura, su arte y sus imponentes paisajes hacen de México el lugar perfecto para despertar nuestro costado aventurero.<br><br>

Como uno de los destinos turísticos más elegidos en todo el mundo, en la tierra azteca confluyen sitios emblemáticos que todo expat debe conocer.

                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Chichén Itzá</h3>
                <p class="mb-4">
                    Uno de los principales sitios arqueológicos mayas de la península de Yucatán, al sureste del país, considerada una de las 7 maravillas del mundo. <br><br>

                    Distintos pueblos ocuparon esta ciudad, pero fue la civilización maya la que dejó la huella más importante por sus construcciones y pirámides que perduran hasta el día de hoy.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Teotihuacán</h3>
                <p class="mb-4">
                    Conocida como “La ciudad de los dioses”, fue una de las urbes más grandes de Mesoamérica, que llegó a su máximo esplendor durante el Período Clásico con una población que se calcula llegó hasta alrededor de 100.000 habitantes.<br><br>

                    Los restos de la ciudad se encuentran a 42 km. al noreste de la CDMX. La zona de monumentos arqueológicos fue declarada Patrimonio de la Humanidad por la Unesco en 1987.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Riviera Maya</h3>
                <p class="mb-4">
                    Es una zona turística situada en la costa del mar Caribe, en el estado de Quintana Roo. Geográficamente se extiende a lo largo del litoral, desde la localidad de Puerto Morelos al norte, hasta la localidad de Punta Allen al sur.<br><br>

Cancún, Playa del Carmen y Tulum son los puntos más famosos de esta costa, conocida por sus paradisíacas playas, sus cenotes y la Isla Mujeres.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">El Zócalo</h3>
                <p class="mb-4">
                    En el corazon de la CDMX se encuentra la Plaza de la Constitución, más conocida como “El Zócalo”, la segunda plaza más grande del mundo <br><br>

Constituye el centro político, económico y religioso del país, aunque también es elegido por el pueblo mexicano como punto de encuentro para celebraciones y manifestaciones.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Basílica de Santa María de Guadalupe</h3>
                <p class="mb-4">
                    Conocido como “La Lupita”, es uno de los templos religiosos más visitados del mundo y la santa patrona nacional.<br><br>

                    Está ubicada al pie del Cerro del Tepeyac en la alcaldía Gustavo Madero de la Ciudad de México, y es visitada anualmente por alrededor de 20 millones de peregrinos, principalmente los días cercanos al 12 de diciembre, Día de la Santa María de Guadalupe.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Estadio Azteca</h3>
                <p class="mb-4">
                    Este templo no es religioso, aunque para los amantes del fútbol es realmente un emblema en todo el mundo. <br><br>

Ubicado en Ciudad de México, es posible hacer un tour por el estadio más grande del país y casa del Club América, en el que podrás conocer los vestuarios, la sala de prensa y la cancha durante el recorrido.
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
