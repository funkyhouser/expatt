<x-app-layout>
    {{-- HERO --}}
    <section class="min-h-[350px] h-[400px] bg-no-repeat bg-impuestos bg-center bg-cover">
        <div class="flex flex-col justify-end h-full max-w-screen-lg px-4 pb-16 mx-auto my-auto sm:px-6 lg:px-8">
            <h1 class="text-4xl font-black text-white uppercase lg:text-7xl leading-[.9_!important]">
                En movimiento
            </h1>
        </div>
    </section>

    {{-- Articulo --}}
    <section class="py-12 bg-white">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <article class="text-black">
                <p class="mb-4">
                    <b>En Argentina existen variados medios de transporte que te permitirán recorrer el territorio de norte a sur y de este a oeste.</b><br><br>

                    La mayor concentración de los diferentes tipos de movilidad se encuentra en las grandes ciudades y zonas urbanas.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Colectivo</h3>
                <p class="mb-4">
                    Estos ómnibus que circulan por las ciudades más grandes del país cuentan con un subsidio del estado por lo que su boleto es accesible, lo que lo hace un medio de transporte muy usado por la población.<br><br>

                    En la Ciudad de Buenos Aires hay más de 380 líneas de colectivos en funcionamiento que recorren los barrios porteños y parte de Gran Buenos Aires.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Subte</h3>
                <p class="mb-4">
                    El país también cuenta con transporte subterráneo, que depende del Gobierno de la Ciudad de Buenos Aires ya que sólo está vigente en la capital.<br><br>

                    Son 5 líneas (A, B, C, D y H) más el Premetro que es la única línea de superficie y conecta los barrios del sur con el centro de la Ciudad.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Tren</h3>
                <p class="mb-4">
                    Por un acuerdo de reciprocidad entre el Gobierno de Argentina y la República de Chile, se reconoce la validez de las licencias emitidas en el país vecino por lo que los chilenos no deben realizar el trámite de cédula nueva.<br><br>

                    Este beneficio se puede gozar por el lapso de un año de permanencia en el territorio.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Otros países</h3>
                <p class="mb-4">
                    La Operadora Ferroviaria del Estado cuenta con 4.143 km. de red en todo el país que conecta 391 estaciones mediante 1893 servicios de trenes diarios.<br><br>

                    Se estima que transporta más de 1.300.000 de pasajeros a diario, entre los servicios del área metropolitana, regionales -en las provincias de Santa Fe, Chaco, Salta, Neuquén, Córdoba, Santiago del Estero y Entre Ríos-, y un servicio internacional que une Misiones con Encarnación de Paraguay.<br><br>

                    Como transporte público, su boleto es menor con respecto a otros y moviliza a grandes masas de gente, especialmente en el área metropolitana en hora pico.<br><br>

                    Sistema Único de Boleto Electrónico<br>
                    Se trata de una tarjeta comúnmente conocida como SUBE que se carga de forma virtual y permite utilizar colectivos, subtes y trenes en algunas localidades del Gran Buenos Aires.<br><br>

                    Se puede obtener en los centros habilitados o de forma online mediante el pago de un arancel mínimo. En el caso de los expat pueden obtenerla solamente en los centros habilitados.<br><br>

                    Hay tarifas especiales para jubilados, estudiantes, monotributistas (trabajadores independientes) y beneficiarios de programas sociales, entre otros.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Taxis y apps</h3>
                <p class="mb-4">
                    Una de las opciones más utilizadas por expat son los taxis, cuyo precio está sujeto a la cantidad de kilómetros recorridos. Ese monto va variando y se recomienda consultar en cada caso el costo de la “bajada de bandera”, como suele denominarse al taxímetro.<br><br>

                    También están presentes las plataformas de movilidad más usadas a nivel mundial, una alternativa segura y confiable para los turistas recién llegados al país.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Aeropuertos</h3>
                <p class="mb-4">
                    Con aeropuertos en casi todas las localidades, los más destacados son: Jorge Newbery, comúnmente llamado Aeroparque, ubicado en la Ciudad de Buenos Aires, que consiste en la red doméstica más grande del país. Y el aeropuerto internacional Ministro Pistarini, ubicado en la localidad de Ezeiza, en la provincia de Buenos Aires, que conecta el país con prácticamente todos los destinos del mundo.<br><br>

                    Aerolíneas Argentinas es la línea aérea de bandera del país, dedicada al transporte comercial de pasajeros y carga.​ Es reconocida por ser una de las mejores y más seguras aerolíneas del mundo. 
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
