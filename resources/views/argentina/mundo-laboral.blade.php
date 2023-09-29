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
                <div class="hidden lg:block lg:col-span-1">
                    <img src="{{ asset('images/ads/linkedin-ads.jpg') }}" alt="" class="w-full">
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
