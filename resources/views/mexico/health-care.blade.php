<x-app-layout>
    {{-- HERO --}}
    <section class="min-h-[350px] h-[400px] bg-healt-care bg-no-repeat bg-center bg-cover">
        <div class="flex flex-col justify-end h-full max-w-screen-lg px-4 pb-16 mx-auto my-auto sm:px-6 lg:px-8">
            <h1 class="text-4xl font-black text-white uppercase lg:text-7xl leading-[.9_!important]">
                Health Care
            </h1>
        </div>
    </section>

    {{-- Comienza tu vida en --}}
    <section class="py-12 bg-white">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <article id="trabaja" class="grid grid-cols-5 gap-4">
                <div class="col-span-5 text-black lg:col-span-4">
                    <p class="mb-4">
                        El aumento de la esperanza de vida y la creciente exposición a los riesgos emergentes, relacionados en su mayoría con estilos de vida poco saludables, han marcado el escenario actual del sistema de salud mexicano.
<br><br>

Hoy los padecimientos no transmisibles y las lesiones son responsables del 75% y 11% de las muertes en el país, respectivamente.

                    </p>

                    <h2 class="mb-4 text-[#3C137C] font-bold text-2xl">Sectores</h2>
                    <p class="mb-4">
                        El sistema mexicano de salud comprende dos sectores: <b>el público y el privado</b>. Dentro del sector público se encuentran las instituciones de seguridad social y los programas que atienden a la población sin seguridad social. El sector privado comprende a las compañías aseguradoras y los prestadores de servicios que trabajan en consultorios, clínicas y hospitales privados.<br><br>

                        Por ley, todos los residentes del país tienen derecho a una atención médica gratuita. Los expat con empleos en México pueden aplicar al programa público del Instituto Mexicano de Seguro Social (IMSS).

                        Sin embargo, es común que los extranjeros opten por un servicio de medicina privada que, a pesar de ser más costoso, es el más elegido por sus beneficios y atención.

                    </p>

                    <h2 class="mb-4 text-[#3C137C] font-bold text-2xl">Documentación </h2>
                    <p class="mb-4">
                        Si bien la normativa vigente no exige a los extranjeros ninguna vacuna o examen PCR, es necesario tener las vacunas de rutina al día, como ser: hepatitis A y B, fiebre tifoidea, rabia y Covid-19.
                    </p>

                </div>
                <div class="hidden lg:block lg:col-span-1">
                    <img src="{{ asset('images/ads/osde.jpg') }}" alt="" class="w-full">
                </div>
            </article>
            <div class="mt-6">
                <img src="{{ asset('images/ads/medife-ads.jpg') }}" alt="" class="w-full">
            </div>
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
