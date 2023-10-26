<x-app-layout>
    {{-- HERO --}}
    <section class="min-h-[350px] h-[400px] bg-no-repeat bg-bancos bg-center bg-cover">
        <div class="flex flex-col justify-end h-full max-w-screen-lg px-4 pb-16 mx-auto my-auto sm:px-6 lg:px-8">
            <h1 class="text-4xl font-black text-white uppercase lg:text-7xl leading-[.9_!important]">
                Bancos
            </h1>
        </div>
    </section>
    {{-- Comienza tu vida en --}}
    <section class="py-12 bg-white">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <article id="trabaja" class="">
                <div class="text-black">
                    <h2 class="mb-6 text-[#3C137C] font-bold text-4xl">Abrir una cuenta bancaria en Argentina </h2>
                    <p class="mb-4">
                        Dependiendo de tu situación en Argentina, probablemente tendrás que abrir una cuenta bancaria local para pagar el alquiler, las facturas, etc. Los bancos cobran altas tarifas por retiros o transacciones en cajeros automáticos extranjeros, de modo que cuanto antes abras tu cuenta, mejor.
                    </p>

                    <h2 class="text-[#3C137C] font-bold text-2xl">
                        Cómo abrir una cuenta bancaria en Argentina
                    </h2>
                    <p class="mb-4">
                        Los requisitos para abrir una cuenta en HSBC son los siguientes:
                    </p>
                    <ul class="mb-4 list-disc list-inside">
                        <li>Un pasaporte válido.</li>
                        <li>Prueba de residencia (compromiso de domicilio).
                            <ul class="pl-4 list-outside"><li>- Esto se puede obtener en una oficina de registro civil o en una estación de policía local.</li></ul>
                        </li>
                        <li>Prueba de empleo (si corresponde).</li>
                        <li>Un CUIL o CUIT (Número de identificación e impuestos).</li>
                    </ul>
                    <p class="mb-4">
                        Si no posees un CUIL o CUIT, la alternativa es un CDI o Clave de identificación. Los requisitos para obtener un CDI son los siguientes:
                    </p>
                    <ul class="mb-4 list-disc list-inside">
                       <li>Un <a href="http://www.afip.gob.ar/genericos/formularios/archivos/interactivos/663_NM%20interactivo.pdf" target="_blank" class="hover:underline">formulario F 663</a> completado.
                       </li>
                       <li>Un documento nacional de identificación o una documentación de la Dirección Nacional de Migraciones que muestre el estado de residencia (para residentes).</li>
                       <li>Pasaporte (para no residentes).</li>
                    </ul>

                    <p class="mb-4">
                        A menudo, también se requiere un depósito mínimo, cuyo monto varía de un banco a otro.<br>
                        Si tu banco actual en tu país de origen tiene sucursales en Argentina, puedes abrir una cuenta bancaria directamente allí. Sin embargo, las auditorías y la información adicional serán solicitadas por la sucursal argentina a tu banco de origen, y la finalización de la apertura de tu cuenta bancaria quedará únicamente a discreción del banco en Argentina.<br>
                        Los procedimientos y trámites varían mucho según los bancos y, aunque algunos te permitirán abrir una cuenta corriente, la mayoría de ellos no te permitirán abrir una cuenta de ahorro a menos que seas residente permanente, en cuyo caso deberás enviar tu pasaporte, identificación fiscal y comprobante de domicilio. Una vez que hayas abierto tu cuenta bancaria, deberás recibir una tarjeta de débito, que se te enviará dentro de quince días.
                    </p>

                    <h2 class="mb-4 text-[#3C137C] font-bold text-2xl">Otras informaciones</h2>
                    <p class="mb-4">
                        Las tarjetas de débito argentinas pueden usarse en el extranjero si forman parte de las redes Cirrus / Mastercard. Tenga en cuenta que los límites de retiro son frecuentes con las tarjetas de débito y con frecuencia se establecen de manera arbitraria, y las tarifas de mantenimiento de cuentas bancarias se aplican en Argentina, aunque rara vez superan los 300 pesos por año.<br>

                        El horario bancario en Argentina es de 10 a 15 hs. Si resides en Buenos Aires u otra ciudad importante, no tendrás ningún problema para encontrar cajeros automáticos las 24 horas, sin embargo, estos son escasos en ciudades más pequeñas, así que asegúrate de llevar dinero en efectivo si planeas aventurarte en esos lugares.
                        Si quieres asesoramiento, puedes comunicarte llamando al 0800 000 0000.
                    </p>

                    <p>
                        <b>Enlaces útiles:</b>
                        <a href="http://www.hsbc.com.ar/es/" target="_blank" class="block hover:underline">HSBC</a>
                    </p>
                </div>
            </article>
            <div class="my-6 text-center">
                <a href="{{ route('argentina') }}" class="mx-auto block w-full lg:w-max rounded-xl px-0 lg:px-4 py-3 shadow-lg bg-[#3C137C] font-bold text-xl text-white">
                    Volver
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
