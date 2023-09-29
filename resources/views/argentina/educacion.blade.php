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
                <div class="hidden lg:block lg:col-span-1">
                    <img src="{{ asset('images/ads/bannerschool-ads.jpg') }}" alt="" class="w-full mb-4">
                    <img src="{{ asset('images/ads/uca-large-ads.jpg') }}" alt="" class="w-full">
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
