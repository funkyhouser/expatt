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
                <h3 class="text-[#3C137C] font-bold text-2xl">Impuesto</h3>
                <p class="mb-4">
                    Si estás planeando instalarte en la hermosa tierra azteca debes tener en cuenta algunas obligaciones y contribuciones con las que, como residente de ese país, deberás cumplir. <br><br>

                    En líneas generales, los impuestos y pagos tributarios que los expat deben abonar son los mismos que los de los residentes mexicanos. Podríamos clasificar dos grandes grupos:  <br>
                    -Quienes cuentan con un domicilio en México  <br>
                    -Quienes trabajan en México  <br>

                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Impuesto sobre la renta (ISR)</h3>
                <p class="mb-4">
                    Se trata de aquellas personas que tengan su domicilio en México. Sin embargo, si también lo tienen en otro país, en la mayoría de los casos, deberán abonar el impuesto correspondiente en ambos. Te recomendamos consultar en cada caso.  <br> <br>

Se les considera residentes si obtienen más del 50% de sus ingresos anuales en México o si el centro de sus actividades profesionales está dentro del territorio.  <br> <br>

Lo mismo ocurre si la sede principal de tu negocio, tienda o local se encuentra en México.
                </p>
                <h3 class="text-[#3C137C] font-bold text-2xl">Derecho al Alumbrado Público (DAP)
                </h3>
                <p class="mb-4">
                    Vinculado al impuesto anterior, existe un pago vinculado al mantenimiento de la vía pública.<br><br>

                    Una contribución que cobran los municipios por el servicio de alumbrado público que brindan a la comunidad en calles, plazas, jardines y áreas de uso común. La finalidad de esta recaudación reside en pagar, mantener y mejorar las luminarias y redes de suministro de alumbrado.<br><br>

                    Impuesto por percibir ingresos en el país
                    Aquellos expat que trabajen en suelo mexicano también deberán cumplir con el pago de un impuesto, ya sea por gozar de un salario en efectivo, crédito, servicios, bienes o cheques. <br><br>

                    Además, desde 2022, todas las personas mayores de 18 años tienen la obligación de inscribirse al Servicio de Administración Tributaria (SAT), aunque no realicen ninguna actividad económica. Para hacerlo, deberás tramitar el Registro Federal de Contribuyente (RFC) y elegir el régimen fiscal que se ajuste a tu situación.

                </p>
                <h3 class="text-[#3C137C] font-bold text-2xl">Impuesto al valor agregado (IVA)
                </h3>
                <p class="mb-4">
                    Este impuesto es indistinto a la residencia o lugar del trabajo, sin embargo, se aplica ante la adquisición de cualquier bien o servicio dentro del territorio mexicano.<br><br>

Es una tributación indirecta, en la cual el consumidor final es quien absorbe el impuesto.

                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Impuesto sobre Automóviles Nuevos (ISAN)

                </h3>
                <p class="mb-4">
                    Al igual que el ítem anterior, este pago tributario no distingue entre residentes, extranjeros o turistas; y aplica a las personas que, dentro del país, compren, importen o vendan vehículos nuevos.
                </p>


                <h3 class="text-[#3C137C] font-bold text-2xl">Impuesto Sobre Hospedaje (ISH)
                </h3>
                <p class="mb-4">
                    Dirigido exclusivamente a turistas, ya que se le cobra un monto por cada noche de estancia en hotelería y alojamientos temporantes, para colaborar con el sector. <br><br>

Está sujeto a los servicios prestados por hoteles, moteles, albergues, posadas, mesones, hosterías, campamentos, paraderos de casas rodantes y similares.

                </p>
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
