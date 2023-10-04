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
                        La República Argentina se ubica al sur de América Latina, al límite con Chile, Bolivia, Paraguay, Brasil y Uruguay.<br><br>

                        Cuenta con una superficie de aproximadamente 3.761.274 km², una de las mayores a nivel mundial y la cuarta del continente americano. Y alberga alrededor de 46.044.703 habitantes, según los resultados del Censo Nacional de Población, Hogares y Viviendas 2022.<br><br>

                        Su capital es la Ciudad Autónoma de Buenos Aires, que se encuentra en la provincia del mismo nombre y concentra a la mayor cantidad de la población del país.<br><br>

                        El idioma oficial es el español, aunque conviven diferentes culturas y lenguas, provenientes principalmente de los pueblos originarios y de los movimientos migratorios ocurridos a lo largo de la historia del país.<br><br>

                        Según los últimos datos publicados por la ONU, en Argentina viven 2.281.728 de expat, lo que supone un 5,03% de la población total, ocupando el puesto número 87 en países con mayor porcentaje de inmigración del mundo.<br><br>

                        De aquella cifra, 30,05% provienen de Paraguay, 18,54% de Bolivia y el 9,43% de Chile. La fuerte presencia de los países vecinos se suma a mucha descendencia de países europeos, producto de los grandes movimientos migratorios de fines del siglo XIX y principios del siglo XX.
                    </p>

                    <h2 class="text-[#3C137C] font-bold text-2xl">Forma de gobierno</h2>
                    <p class="mb-4">
                        El Gobierno argentino es una democracia representativa, republicana y federal, regulada por la Constitución vigente. En su organización política conviven dos estructuras paralelas de gobierno: a nivel nacional, está dividida en tres poderes -Poder Ejecutivo, Poder Legislativo y Poder Judicial-, y a nivel federal está conformada por 24 provincias, que tienen autonomía y son gobernadas por tres poderes de forma independiente.<br><br>

                        Su actual presidente es Alberto Fernández, abogado, profesor y político, cuyo mandato culmina en diciembre de 2023.

                        Todas las solicitudes son personales, y deberás presentar la documentación requerida en cada
                        caso ante el Consulado correspondiente (ver Embajadas).
                    </p>

                    <h3 class="text-[#3C137C] font-bold text-2xl">Clima</h3>
                    <p class="mb-4">
                        Comúnmente se suele decir que Argentina presenta “los cuatro climas”. Su extensión latitudinal americana, supone el desarrollo de una gran diversidad climática que abarca desde los climas tropicales de las ecorregiones chaqueña, tucumano-oranense y misionera, hasta los climas fríos del sur.<br><br>

                        Por su tipo de clima oceánico, muchas regiones se caracterizan por una escasa diferencia de temperatura entre el invierno y el verano; lo que favorece a los sectores agricultores y ganaderos, dos mercados importantes para la nación.
                    </p>

                    <h3 class="text-[#3C137C] font-bold text-2xl">Economía</h3>
                    <p class="mb-4">
                        Argentina es una de las economías más grandes de América Latina y un país líder en producción de alimentos, con industrias de gran escala en los sectores de agricultura y ganadería vacuna.<br><br>

                        Su moneda es el peso argentino, que hace varios años viene mostrando mucha volatilidad, principalmente desde 2011/2012 cuando comenzó un fuerte camino de devaluación, acentuado por el desdoblamiento cambiario que trajo la implementación del cepo.
                    </p>
                </div>
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
            <a href="#" class="grid bg-[#402D97] lg:grid-cols-3 group/santander overflow-hidden">
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
