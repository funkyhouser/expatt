<x-app-layout>
    {{-- HERO --}}
    <section class="min-h-[350px] h-[400px] bg-educacion bg-no-repeat bg-center bg-cover">
        <div class="flex flex-col justify-end h-full max-w-screen-lg px-4 pb-16 mx-auto my-auto sm:px-6 lg:px-8">
            <h1 class="text-4xl font-black text-white uppercase lg:text-7xl leading-[.9_!important]">
                Educación
            </h1>
        </div>
    </section>

    {{-- Comienza tu vida en --}}
    <section class="py-12 bg-white">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <article id="trabaja" class="grid grid-cols-5 gap-4">
                <div class="col-span-5 text-black lg:col-span-4">
                    <p class="mb-4">
                        Por su calidad educativa y accesibilidad, Argentina es un destino muy elegido por los
                        estudiantes de todo el mundo.<br><br>

                        Su máxima casa de estudios, la Universidad de Buenos Aires (UBA), se posiciona entre las mejores
                        50 universidades del mundo y en el puesto número 5 de Latinoamérica, detrás de Brasil, Chile,
                        México y Colombia. <br><br>

                        El hecho de ser una elección frecuente entre los expat se debe a que desde el Estado Argentino
                        se han impulsado políticas que facilitan el acceso de los extranjeros a los estudios en
                        Argentina, tanto a nivel administrativo como económico, ya que ofrece educación pública,
                        gratuita y de calidad para todos. <br><br>

                    </p>

                    <h2 class="mb-4 text-[#3C137C] font-bold text-4xl">Niveles educativos</h2>
                    <p class="mb-4">
                        En Argentina podemos hallar 4 niveles educativos predominantes:<br>

                        <h3 class="text-[#3C137C] font-bold text-xl">Inicial</h3>
                        Que comprende a los niños desde los 45 días hasta los 5 años de vida. La ley establece que los últimos dos son obligatorios para la inclusión en la enseñanza formal.<br><br>

                        <h3 class="text-[#3C137C] font-bold text-xl">Primario</h3>
                        Que es obligatorio y está destinado a la formación de los niños a partir de los 6 años.<br><br>

                        <h3 class="text-[#3C137C] font-bold text-xl">Secundario</h3>
                        También es obligatorio y constituye una unidad pedagógica para adolescentes y jóvenes que hayan concluido la educación primaria.<br><br>

                        Este nivel, a su vez, se divide en dos ciclos:<br> un ciclo básico común a todas las orientaciones, y un ciclo orientado según las distintas áreas del conocimiento.<br><br>

                        <h3 class="text-[#3C137C] font-bold text-xl">Superior</h3>
                        De carácter electivo para aquellas personas que hayan terminado sus estudios secundarios.<br><br>
                    </p>
                    <h2 class="mb-4 text-[#3C137C] font-bold text-4xl">Educación superior</h2>
                    <p class="mb-4">
                        La educación del tipo superior en Argentina contempla, a su vez, dos tipos:<br>

                        <h3 class="text-[#3C137C] font-bold text-xl">Terciario</h3>
                        Destinado a egresados del nivel secundario, está conformado por:<br>
                        Escuelas Normales Superiores (ENS).<br>
                        Institutos Superiores de Formación Docente (ISFD).<br>
                        Institutos de Formación Artística (IFA).<br>
                        Institutos de Formación Técnica Superior (IFTS).<br><br>

                        <h3 class="text-[#3C137C] font-bold text-xl">Universitario</h3>
                        Incluye:
                        Institutos universitarios estatales.<br>
                        Institutos universitarios privados.<br>
                        Universidades nacionales.<br>
                        Universidades provinciales.<br>
                        Universidades privadas.<br><br>

                        En cualquier caso, ya sea para completar tus estudios o inscribir a tus hijos, te recomendamos revisar la visa para estudiantes (ver /Antes de viajar).
                    </p>

                </div>
                <div class="col-span-5 lg:col-span-1">
                    <div class="grid grid-cols-2 gap-4 lg:grid-cols-1">
                        <picture>
                            <source srcset="{{ asset('images/ads/bannerschool-ads.jpg') }}" media="(min-width: 1024px)">
                            <img srcset="{{ asset('images/ads/bannerschool-ads-mobile.jpg') }}" alt="" class="h-full col-span-1 mb-4 rounded-lg lg:w-full">
                        </picture>
                        <picture>
                            <source srcset="{{ asset('images/ads/uca-large-ads.jpg') }}" media="(min-width: 1024px)">
                            <img srcset="{{ asset('images/ads/uca-large-ads-mobile.jpg') }}" alt="" class="h-full col-span-1 mb-4 rounded-lg lg:w-full">
                        </picture>
                    </div>
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
