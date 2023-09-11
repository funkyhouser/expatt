<x-app-layout>
    {{-- HERO --}}
    <section class="min-h-[350px] h-[400px] bg-no-repeat bg-impuestos bg-center bg-cover">
        <div class="flex flex-col justify-end h-full max-w-screen-lg px-4 pb-16 mx-auto my-auto sm:px-6 lg:px-8">
            <h1 class="text-4xl font-black text-white uppercase lg:text-7xl leading-[.9_!important]">
                Impuestos <br>para extranjeros
            </h1>
        </div>
    </section>

    {{-- Articulo --}}
    <section class="py-12 bg-white">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <article>
                <h2 class="mb-6 text-[#3C137C] font-bold text-4xl">Impuestos</h2>
                <p class="mb-4">
                    El poder impositivo en Argentina está repartido entre:<br>
                    -El Estado Nacional, que regula y recauda impuestos como Ganancias, Patrimonio, IVA,
                    cargas sociales, exportaciones, combustibles, créditos y débitos bancarios.<br>
                    -Las provincias, que gravan la facturación de bienes y servicios, y la propiedad de
                    bienes registrables.<br>
                    -Los municipios, que tienen un poder impositivo residual para crear tasas o cargas
                    sobre espacios públicos, entre otros.<br><br>

                    Los expat residentes que realizan actividades contempladas por la legislación argentina
                    están sujetos al régimen general.<br><br>

                    <i>Impuesto a las Ganancias</i>
                    Este gravamen que es regulado por el Estado Nacional aplica sobre personas y
                    sucesiones en base a los ingresos anuales declarados.

                    La Administración Federal de Ingresos Públicos (AFIP) obliga a presentar la declaración
                    jurada de ganancias a responsables inscriptos (profesionales independientes),
                    trabajadores en relación de dependencia que superen determinado salario, y
                    empresas (personas jurídicas SA, SRL, y SAS).<br><br>

                    Existe un tope que establece el mínimo no imponible para aquellas personas que no
                    deben abonar este impuesto. Estos montos son actualizados en diciembre de cad año
                    por AFIP y varían de acuerdo a si se trata de trabajadores solteros, casados o con
                    hijos.<br><br>
                    <i>Impuesto al Valor Agregado</i><br>
                    Más conocido como IVA, es la carga impositiva al consumo, que paga el consumidor al
                    adquirir algún bien o servicio.<br><br>

                    La tasa general más común es la del 21%, que ya está incluida en el precio solicitado
                    por el comercio o tienda, es decir que no está discriminada en el monto final a abonar.<br><br>

                    <i>Reintegro a turistas</i><br>
                    Quienes estén de paso por el país argentino están exceptuados de abonar IVA y
                    pueden solicitar el reintegro de ese porcentaje aplicado por las compras de productos
                    nacionales superiores a $70 argentinos en las tiendas adheridas, que están
                    identificadas con una etiqueta de Tax Free.<br><br>

                    Pueden gestionar la devolución de ese impuesto en los puestos habilitados del
                    aeropuerto y terminales, o a través de los buzones en todos los puntos de salida del
                    país. Deberán mostrar las facturas correspondientes a las compras realizadas junto al
                    pasaporte.<br><br>

                    El cobro del reembolso puede ser en efectivo, tarjeta de crédito o cheque bancario.<br><br>

                    <i>Monotributo</i><br>
                    Se aplica a trabajadores independientes y pequeños contribuyentes que ejerzan sus
                    actividades en el territorio nacional.
                    Se abona mediante una cuota fija mensual que incluye el monto tributario, los aportes
                    jubilatorios y los aportes correspondientes a la obra social.
                </p>
            </article>
            <div class="my-6 text-center">
                <a href="{{ route('argentina') }}"
                    class="mx-auto block w-full lg:w-max rounded-sm px-0 lg:px-10 py-3 shadow-md bg-[#3C137C] font-medium text-2xl text-white">Volver
                    atrás</a>
            </div>
        </div>
    </section>
    {{-- SANTANDER --}}
    <section class="pb-12">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <a href="#" class="grid bg-[#402D97] lg:grid-cols-3 mt-8 group/santander">
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
                        <p
                            class="text-[#47108E] font-bold py-3 w-full lg:w-3/5  border-b-2 border-[#3CEBA7] bg-white group-hover/santander:bg-[#3CEBA7] transition rounded-t">
                            ¡Pedila ahora!
                        </p>
                    </div>
                </div>
            </a>
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
