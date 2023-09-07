<x-app-layout>
    {{-- HERO --}}
    <section class="min-h-[350px] h-[400px] bg-salud bg-no-repeat bg-center bg-cover">
        <div class="flex flex-col justify-end h-full max-w-screen-lg px-4 pb-16 mx-auto my-auto sm:px-6 lg:px-8">
            <h1 class="text-4xl font-black text-white uppercase lg:text-7xl leading-[.9_!important]">
                Visado<br> y documentación
            </h1>
        </div>
    </section>

    {{-- Comienza tu vida en --}}
    <section class="py-12 bg-white">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <article id="trabaja" class="">
                <div class="">
                    <h2 class="mb-6 text-[#3C137C] font-bold text-4xl">Antes de viajar</h2>
                    <p class="mb-4">
                        Si planeas viajar o vivir en Argentina deberás reunir cierta documentación antes de llegar a
                        destino.<br><br> Existen diferentes tipos de visas, que se clasifican de acuerdo a la actividad
                        o los motivos que te llevan al país sudamericano, así como también distintos tipos de
                        residencias, que se agrupan según el tiempo de permanencia en el país.<br><br> Aquí te acercamos
                        toda la información necesaria para hacer de tu viaje un trámite más sencillo.<br><br>
                        Documentación general<br> Ten a mano la siguiente documentación para gestionar cualquier tipo de
                        trámite en Argentina:<br><br>
                        > Pasaporte válido con vigencia mínima de 6 meses a la fecha de ingreso al país<br>
                        > Cédula de identidad<br>
                        > Formulario de solicitud de visa completo<br>
                        > Constancia que acredite la actividad a desarrollar en el país de origen<br>
                        > Reserva de pasaje de ida y vuelta<br>
                        > Reserva hotelera o comprobante de alojamiento<br>
                        > Entrevista consular.<br><br>

                        Todas las solicitudes son personales, y deberás presentar la documentación requerida en cada
                        caso ante el Consulado correspondiente (ver Embajadas).
                    </p>

                    <h2 class="mb-6 text-[#3C137C] font-bold text-4xl">Residencias</h2>
                    <h3 class="mb-4 text-[#3C137C] font-bold text-2xl">Temporaria</h3>
                    <p class="mb-4">
                        En el caso de expats provenientes de países del Mercosur y estados asociados pueden solicitar la
                        residencia temporaria por nacionalidad, que se otorga por un período de 2 años.<br><br>

                        Aquellas personas no pertenecientes a países del Mercosur o estados asociados sólo podrán
                        solicitar la residencia temporaria por unidad familiar, por un período máximo de 2 años.
                    </p>

                    <h3 class="mb-4 text-[#3C137C] font-bold text-2xl">Permanente</h3>
                    <p class="mb-4">
                        Esta opción está disponible para aquellas personas que cuenten con familiares argentinos o de
                        países extranjeros pertenecientes al Mercosur (cónyuges e hijos) o, bien, aquellos que hayan
                        cumplido con el tiempo de residencia temporaria requerido.
                    </p>

                    <h3 class="mb-4 text-[#3C137C] font-bold text-2xl">Visas</h3>
                    <p class="mb-4">
                        Para desenvolverte en el país como residente temporal, te recomendamos iniciar los trámites de
                        visa según tu tipo de actividad a realizar en el territorio.
                    </p>

                    <h3 class="mb-4 text-[#3C137C] font-bold text-2xl">Turismo</h3>
                    <p class="mb-4">
                        Te habilitar a recorrer el país durante un plazo no mayor a 90 días. <br>Costo: $150 (mayo 2023)
                    </p>

                    <h3 class="mb-4 text-[#3C137C] font-bold text-2xl">Negocios</h3>
                    <p class="mb-4">
                        Para aquellos expat que estén planeando realizar reuniones y/o actividades comerciales en el
                        país por un plazo máximo de 60 días.
                        Costo: $200 (mayo 2023)
                    </p>

                    <h3 class="mb-4 text-[#3C137C] font-bold text-2xl">Estudiante</h3>
                    <p class="mb-4">
                        Argentina es una tierra rica a nivel educacional, muchos expat la eligen para desarrollar sus
                        estudios. Existen dos tipos según el tiempo de permanencia:<br><br>

                        +365: por un período mayor a 365 días corridos.<br>
                        -365: por un período menor a 1 año.<br>
                        Sin costo
                    </p>

                    <h3 class="mb-4 text-[#3C137C] font-bold text-2xl">Trabajo</h3>
                    <p class="mb-4">
                        Trabajo: dirigida a quienes acrediten haber recibido una oferta laboral dentro del territorio.<br>
Costo: $250 (mayo 2023).<br>
Tasa migratoria: U$S300 para ciudadanos del MERCOSUR y U$S600 para ciudadanos EXTRA-MERCOSUR.
                    </p>

                    <h3 class="mb-4 text-[#3C137C] font-bold text-2xl">Nacionalidad</h3>
                    <p class="mb-4">
                        Nacionalidad: dirigida a expats provenientes de los Estado Parte o MERCOSUR por un plazo de 2 años.
Costo: $250 (mayo 2023)<br><br>
Tasa migratoria: U$S 300 para ciudadanos del Mercosur y U$S 600 para ciudadanos extra-Mercosur.

                    </p>


                </div>
            </article>
            <div class="my-6 text-center">
                <a href="{{ route('argentina') }}" class="mx-auto block w-full lg:w-max rounded-sm px-0 lg:px-10 py-3 shadow-md bg-[#3C137C] font-medium text-2xl text-white">Volver atrás</a>
            </div>
        </div>
    </section>
    {{-- SANTANDER --}}
    <section class="pb-12">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <div class="grid bg-[#402D97] lg:grid-cols-3">
                <div class="relative col-span-2 overflow-hidden bg-cover bg-santander-pattern h-80 lg:overflow-visible">
                    <img class="absolute bottom-0 max-w-sm -right-[45%] lg:right-auto lg:-translate-x-1/2 lg:left-1/2"
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
                        <a href="#"
                            class="text-[#47108E] font-bold py-3 w-full lg:w-3/5  border-b-2 border-[#3CEBA7] bg-white rounded-t">
                            ¡Pedila ahora!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Encontra tu casa --}}
    <section class="pb-12 bg-white">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <p class="mb-6 text-xl font-black text-center text-[#3C137C] lg:text-3xl">Te ayudamos a encontrar tu casa
            </p>
            <div class="flex justify-center gap-4 text-lg font-black text-white lg:text-2xl">
                <a href="#" class="overflow-hidden rounded">
                    <img class="object-cover w-full" src="{{ asset('images/casa/renta.jpg') }}" alt="renta">
                    <p class="text-center w-full py-2 lg:py-4 bg-[#3C137C]">Renta</p>
                </a>
                <a href="#" class="overflow-hidden rounded">
                    <img class="object-cover w-full" src="{{ asset('images/casa/compra.jpg') }}" alt="compra">
                    <p class="text-center w-full py-2 lg:py-4 bg-[#3C137C]">Compra</p>
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
