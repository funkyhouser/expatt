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
                        La tierra mexicana es un lugar propicio para crecer profesionalmente, ya sea para iniciar una carrera o, bien, continuar estudios comenzados en otro país.<br><br>

                        Hay universidades y terciarios en cada región, así como también escuelas primarias y secundarias para menores de edad.<br><br>

El sistema educativo nacional está compuesto por los tipos: básico, medio superior y superior en las modalidades escolar, no escolarizada y mixta.


                    </p>

                    <h2 class="mb-4 text-[#3C137C] font-bold text-4xl">Niveles educativos</h2>
                    <p class="mb-4">
                        La educación denominada básica está compuesta por los niveles:<br><br>
Preescolar<br>
Primaria <br>
Secundaria<br><br>

Por su parte, la medio-superior comprende los niveles de: <br><br>
Bachillerato y sus equivalentes <br>
Educación profesional y sus equivalentes<br><br>

La educación de tipo superior es aquella que le sigue al bachillerato. Está compuesta por:<br><br>
Licenciatura<br>
Especialidad<br>
Maestría <br>
Doctorado<br><br>

Abarca, también, títulos intermedios, tales como Técnico Superior Universitario. <br><br>

La Universidad Nacional de México es considerada la máxima casa de estudios del país y la segunda mejor de Iberoamérica.<br><br>

En educación superior, también se destacan el Instituto Politécnico Nacional y la Universidad Autónoma Metropolitana.


                    </p>
                    <h2 class="mb-4 text-[#3C137C] font-bold text-4xl">Becas para expat</h2>
                    <p class="mb-4">
                        El gobierno de México ofrece un programa especial de Becas de Excelencia a Extranjeros, a través de la Secretaría de Relaciones Exteriores (SRE) y la Agencia Mexicana de Cooperación Internacional para el Desarrollo (AMEXCID).

                        La convocatoria está dirigida a expat interesados en realizar estudios superiores en México, lo que comprende los siguientes niveles: <br>
                            Especialidad<br>
                            Maestría<br>
                            Doctorado <br>
                            Investigaciones de posgrado <br>
                            Programas de movilidad estudiantil de licenciatura y posgrado.<br>

                            Se publica de forma anual, entre los meses de mayo y junio, en la web oficial de AMEXCID.<br><br>


                        <h3 class="text-[#3C137C] font-bold text-xl">Hijos</h3>
                        El sistema educativo mexicano contempla un régimen de escolarización del tipo mixto, donde conviven las escuelas públicas y privadas, reguladas bajo la órbita de la Secretaría de Educación Pública de la Nación.<br><br>
                        Las escuelas públicas son laicas, no cobran matrícula y los materiales educativos son de acceso gratuito. <br><br>

                        Si estás pensando en inscribir a tus hijos, el primer paso será acercarte a la oficina de inmigración. Antes de asistir a la escuela, tu familiar deberá convertirse en residente temporal o permanente (ver /Antes de viajar).

                    </p>

                </div>
                <div class="hidden lg:block lg:col-span-1">
                    <img src="{{ asset('images/ads/bannerschool-ads.jpg') }}" alt="" class="w-full mb-4">
                    <img src="{{ asset('images/ads/uca-large-ads.jpg') }}" alt="" class="w-full">
                </div>
            </article>
            <div class="my-6 text-center">
                <a href="{{ route('mexico') }}" class="mx-auto block w-full lg:w-max rounded-xl px-0 lg:px-4 py-3 shadow-lg bg-[#3C137C] font-bold text-xl text-white">
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
