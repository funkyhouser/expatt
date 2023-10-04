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
                        Ser expat en México puede parecer duro al principio: el desarraigo, los profundos cambios, sus diferencias idiomáticas, la soledad para quienes viajan sin compañía.<br><br>

                        Lo más importante es darse tiempo. La adaptación es un proceso y México tiene grandes oportunidades para todo el mundo! Trabajar en el país te abrirá muchas puertas para entrar en su cultura, conocer sus costumbres y, en especial, generar vínculos.<br><br>

De acuerdo a la Encuesta Nacional de Ocupación y Empleo (ENOE) correspondiente a febrero de 2023, la población económicamente activa (PEA) en México fue de un aproximado de 60 millones de personas, lo que implicó una tasa de participación de 60.2% de la población.<br><br>

Al igual que en otros países de América Latina, México se vio afectado por las altas tasas de desempleo que, en los últimos años, viene descendiendo. Según el informe del Instituto Nacional de Estadística y Geografía (Inegi) sobre el último trimestre de 2022, el porcentaje de desempleados bajó a 3%, una cifra alentadora respecto a períodos anteriores. <br><br>

Si viajas con un empleo ya confirmado, recuerda revisar la documentación requerida para aplicar a la visa correspondiente (ver “Antes de viajar”). La misma está destinada a expat que hayan recibido una oferta laboral por parte de una persona física o moral establecida legalmente en México. <br><br>

En cambio, si viajas por otros motivos y llegas al país sin un empleo formal, te recomendamos echar un vistazo a aquellas ciudades con mayor demanda de búsquedas. Estas son, principalmente, las volcadas al rubro turístico. El podio está conformado por: CDMX, Cancún y Playa del Carmen. <br><br>

                    </p>

                    <h2 class="mb-4 text-[#3C137C] font-bold text-4xl">CDMX</h2>
                    <p class="mb-4">
                        Como en toda gran ciudad, las oportunidades están a la vuelta de la esquina. Por supuesto, la demanda de mano de obra gira en torno a trabajos calificados y no calificados.<br><br>

Dependiendo cuál será tu situación, encontrarás con mayor o menos facilidad un empleo formal en CDMX.
                    </p>

                    <h2 class="mb-4 text-[#3C137C] font-bold text-4xl">Cancún y Playa del Carmen
                    </h2>
                    <p class="mb-4">
                        En este tipo de ciudades prima la búsqueda de trabajo no calificado, fundamentalmente vinculado al rubro gastronómico y hotelero.<br><br>

                        Los puestos son variados: cocina, atención al público, camareros, servicio doméstico, entretenimiento, etc., aunque también se pueden encontrar ofertas de empleo calificado, según el caso. <br><br>

Estos son algunos sitios oficiales donde encontrarás un listado actualizado de empleos requeridos en México:<br><br>

Portal digital del gobierno: click <a class="text-blue-700" href="https://www.empleo.gob.mx/PortalDigital"> aquí</a>.<br>
Bumeran: click <a class="text-blue-700" href="https://www.bumeran.com.mx/">aquí</a>.<br>
Indeed: click <a class="text-blue-700" href="https://mx.indeed.com/">aquí</a>.<br>
OCC: click <a class="text-blue-700" href="https://www.occ.com.mx/empleos/en-mexico/">aquí</a>.

                    </p>


                </div>
                <div class="hidden lg:block lg:col-span-1">
                    <img src="{{ asset('images/ads/linkedin-ads.jpg') }}" alt="" class="w-full">
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
