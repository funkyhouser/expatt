<x-app-layout>
    {{-- HERO --}}
    <section class="min-h-[350px] h-[400px] bg-mundo-laboral bg-no-repeat bg-center bg-cover">
        <div class="flex flex-col justify-end h-full max-w-screen-lg px-4 pb-16 mx-auto my-auto sm:px-6 lg:px-8">
            <h1 class="text-4xl font-black text-white uppercase lg:text-7xl leading-[.9_!important]">
                Mundo laboral
            </h1>
        </div>
    </section>

    {{-- Comienza tu vida en --}}
    <section class="py-12 bg-white">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <article id="trabaja" class="grid grid-cols-5 gap-4">
                <div class="col-span-5 text-black lg:col-span-4">
                    <p class="mb-4">
                        Argentina es un país habituado a la llegada de inmigrantes. Por su historia, por su cultura   paisajes es un destino muy buscado por los expat.<br><br>

                        Los argentinos son muy cálidos a la hora de dar la bienvenida a extranjeros y eso se traduce en las actividades laborales, donde es muy común encontrar ciudadanos de todo el mundo.<br><br>

                        Te recordamos que, para poder trabajar en el país, deberás solicitar la visa de trabajo que te permitirá ejercer la actividad por la que te contrataron<br><br>

                        El hecho de ser una elección frecuente entre los expat se debe a que desde el Estado Argentino se han impulsado políticas que facilitan el acceso de los extranjeros a los estudios en Argentina, tanto a nivel administrativo como económico, ya que ofrece educación pública, gratuita y de calidad para todos.<br><br>

                        <a href="#" class="rounded-xl font-medium bg-[#FF7300] shadow-lg py-2 px-3 inline-block text-white">Ver visado y documentación</a><br><br>

                        Una vez que cuentes con ella, podrás desempeñarte libremente, de acuerdo al perfil buscado, las aptitudes y conocimientos deseados.<br><br>

                        Por supuesto que donde hay más cantidad de ofertas de empleo es en las grandes ciudades. La ciudad de Buenos Aires (CABA) es, por excelencia, el territorio con mayor población y, como consecuencia, más variedad de rubros donde los expat se pueden desarrollar, incluso por su altos movimientos turísticos.
                    </p>

                    <h2 class="mb-4 text-[#3C137C] font-bold text-4xl">Bolsas de empleo</h2>
                    <p class="mb-4">
                        También existen innumerables portales de trabajo, tanto nacionales como internacionales, donde podrás empezar a buscar un empleo que se ajuste a tus necesidades y objetivos.<br><br>
                    </p>

                    <h3 class="text-[#3C137C] font-bold text-xl">Algunos de los más utilizados por los expat en Argentina son:</h3>

                    <div class="flex flex-wrap gap-3 py-4">
                        <div class="px-6 py-4 bg-gray-100 shadow-md cursor-pointer">
                            <img src="{{ asset('images/ads/01-ministerio-trabajo.png') }}" alt="">
                        </div>
                        <div class="px-6 py-4 bg-gray-100 shadow-md cursor-pointer">
                            <img src="{{ asset('images/ads/02-empleos-clarin.png') }}" alt="">
                        </div>
                        <div class="px-6 py-4 bg-gray-100 shadow-md cursor-pointer">
                            <img src="{{ asset('images/ads/03-computrabajo.png') }}" alt="">
                        </div>
                        <div class="px-6 py-4 bg-gray-100 shadow-md cursor-pointer">
                            <img src="{{ asset('images/ads/04-zona-jobs.png') }}" alt="">
                        </div>
                    </div>

                    <p class="mb-4">
                        Pero, en los últimos tiempos, se han sumado algunos más, que también han sido de gran ayuda por los expat.<br><br>

                        <span class="text-[#3C137C] font-medium">Linkedin, Bumeran, Indeed, Trabajos de expatriados, Job of Mine, Go Abroad, Monster, Overseas Jobs, Craigslist, Buenos Aires Classifieds, Trabajando.com, Workana, Career Jet.</span>
                    </p>


                </div>
                <div class="col-span-5 lg:col-span-1">
                    <picture>
                        <source srcset="{{ asset('images/ads/linkedin-ads.jpg') }}" media="(min-width: 1024px)">
                        <img srcset="{{ asset('images/ads/linkedin-ads-mobile.jpg') }}" alt="" class="w-full mb-4 rounded-lg">
                    </picture>
                </div>
            </article>
            <div class="my-6 text-center">
                <a href="{{ route('argentina') }}" class="mx-auto block w-full lg:w-max rounded-xl px-0 lg:px-4 py-3 shadow-lg bg-[#3C137C] font-bold text-xl text-white">
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
