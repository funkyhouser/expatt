<x-app-layout>
    {{-- HERO --}}
    <section class="min-h-[350px] h-[400px] bg-no-repeat bg-impuestos bg-center bg-cover">
        <div class="flex flex-col justify-end h-full max-w-screen-lg px-4 pb-16 mx-auto my-auto sm:px-6 lg:px-8">
            <h1 class="text-4xl font-black text-white uppercase lg:text-7xl leading-[.9_!important]">
                Impuestos
            </h1>
        </div>
    </section>

    {{-- Articulo --}}
    <section class="py-12 bg-white">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <article class="text-black">
                <h2 class="mb-6 text-[#3C137C] font-bold text-4xl">El poder impositivo en Argentina está repartido entre:</h2>

                <ul class="mb-4 list-disc list-inside">
                    <li>El Estado Nacional, que regula y recauda impuestos como Ganancias, Patrimonio, IVA,
                        cargas sociales, exportaciones, combustibles, créditos y débitos bancarios.</li>
                    <li>Las provincias, que gravan la facturación de bienes y servicios, y la propiedad de
                        bienes registrables.</li>
                    <li>Los municipios, que tienen un poder impositivo residual para crear tasas o cargas
                        sobre espacios públicos, entre otros.</li>

                </ul>
                <p class="mb-4">
                    Los expat residentes que realizan actividades contempladas por la legislación argentina están sujetos al régimen general.
                </p>
                <h3 class="text-[#3C137C] font-bold text-2xl">Impuesto a las Ganancias</h3>
                <p class="mb-4">
                    Este gravamen que es regulado por el Estado Nacional aplica sobre personas y
                    sucesiones en base a los ingresos anuales declarados.<br><br>

                    La Administración Federal de Ingresos Públicos (AFIP) obliga a presentar la declaración
                    jurada de ganancias a responsables inscriptos (profesionales independientes),
                    trabajadores en relación de dependencia que superen determinado salario, y
                    empresas (personas jurídicas SA, SRL, y SAS).<br><br>

                    Existe un tope que establece el mínimo no imponible para aquellas personas que no
                    deben abonar este impuesto. Estos montos son actualizados en diciembre de cad año
                    por AFIP y varían de acuerdo a si se trata de trabajadores solteros, casados o con
                    hijos.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Impuesto al Valor Agregado</h3>
                <p class="mb-4">
                    Más conocido como IVA, es la carga impositiva al consumo, que paga el consumidor al
                    adquirir algún bien o servicio.<br><br>

                    La tasa general más común es la del 21%, que ya está incluida en el precio solicitado
                    por el comercio o tienda, es decir que no está discriminada en el monto final a abonar.
                </p>
                <h3 class="text-[#3C137C] font-bold text-2xl">Reintegro a turistas</h3>
                <p class="mb-4">
                    Quienes estén de paso por el país argentino están exceptuados de abonar IVA y
                    pueden solicitar el reintegro de ese porcentaje aplicado por las compras de productos
                    nacionales superiores a $70 argentinos en las tiendas adheridas, que están
                    identificadas con una etiqueta de Tax Free.<br><br>

                    Pueden gestionar la devolución de ese impuesto en los puestos habilitados del
                    aeropuerto y terminales, o a través de los buzones en todos los puntos de salida del
                    país. Deberán mostrar las facturas correspondientes a las compras realizadas junto al
                    pasaporte.<br><br>

                    El cobro del reembolso puede ser en efectivo, tarjeta de crédito o cheque bancario.
                </p>
                <h3 class="text-[#3C137C] font-bold text-2xl">Monotributo</h3>
                <p class="mb-4">
                    Se aplica a trabajadores independientes y pequeños contribuyentes que ejerzan sus
                    actividades en el territorio nacional.<br><br>
                    Se abona mediante una cuota fija mensual que incluye el monto tributario, los aportes
                    jubilatorios y los aportes correspondientes a la obra social.
                </p>
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
