<x-app-layout>
    {{-- HERO --}}
    <section class="min-h-[350px] h-[400px] bg-salud bg-no-repeat bg-center bg-cover">
        <div class="flex flex-col justify-end h-full max-w-screen-lg px-4 pb-16 mx-auto my-auto sm:px-6 lg:px-8">
            <h1 class="text-4xl font-black text-white uppercase lg:text-7xl leading-[.9_!important]">
                Salud
            </h1>
        </div>
    </section>

    {{-- Comienza tu vida en --}}
    <section class="py-12 bg-white">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <article id="trabaja" class="grid grid-cols-5 gap-4">
                <div class="col-span-5 lg:col-span-4">
                    <p class="mb-4">
                        “No podrá negársele o restringírsele en ningún caso el acceso al derecho a la salud, la
                        asistencia social o atención sanitaria a todos los extranjeros que lo requieran”, así lo
                        establece la Ley de Migraciones Argentina, que garantiza la posibilidad de recibir atención
                        médica a todos los expat que lleguen al país.<br><br>

                        En Argentina, el Sistema de Salud es federal, es decir que los centros de atención dependen de
                        las administraciones provinciales o municipales; y coexisten tres grandes tipos de coberturas en
                        el país: pública, privada y por obra social.
                    </p>

                    <h2 class="mb-4 text-[#3C137C] font-bold text-2xl">Atención pública</h2>
                    <p class="mb-4">
                        En el marco de su política de acceso igualitario e inclusivo del sistema de salud argentino,
                        gran cantidad de personas no cuentan con cobertura del tipo prepaga y asisten a los centros de
                        salud públicos para atenderse.<br><br>

                        Por su gratuitad y accesibilidad, es la forma más utilizada por la población, lo que puede
                        afectar la calidad del servicio en cuanto a demanda y tiempos de espera.
                    </p>

                    <h2 class="mb-4 text-[#3C137C] font-bold text-2xl">Prepagas</h2>
                    <p class="mb-4">

                        Se trata del tipo de cobertura privado, por el cual los residentes argentinos y extranjeros
                        abonan un monto mensual que los habilita a usar los centros y clínicas habilitados.<br><br>

                        Las empresas de medicina prepaga ofician de intermediarias entre entidades y/o profesionales que
                        prestan los servicios de todas las especialidades, aunque también poseen sus propias
                        instituciones y personal médico.<br><br>

                        Existe en el país una gran variedad de compañías que brindan servicios de medicina prepaga, de
                        precios y niveles de atención variados. A mayores prestaciones incluidas, mayor es el costo.
                    </p>

                    <h2 class="mb-4 text-[#3C137C] font-bold text-2xl">Obras sociales</h2>
                    <p class="mb-4">
                        Son las organizaciones que prestan atención sanitaria a trabajadores públicos o privados,
                        monotributistas (trabajadores independientes) y grupos familiares, garantizando la cobertura de
                        las personas tanto en su edad productiva como luego de jubilarse.<br><br>

                        Se trata de una entidad regulada y controlada por la nación donde los beneficiarios aportan a un
                        “fondo común”, es decir que está financiada mediante la contribución obligatoria de los
                        trabajadores y empleadores.<br><br>

                        Mediante este aporte, las obras sociales prestan los servicios médicos que requieren sus
                        afiliados, teniendo en cuenta el Programa Médico Obligatorio (PMO).
                    </p>

                    <h2 class="mb-4 text-[#3C137C] font-bold text-2xl">Documentación</h2>
                    <p class="mb-4">
                        Si bien la normativa vigente no exige a los extranjeros ninguna vacuna o examen PCR, es
                        necesario tener las vacunas de rutina al día, como ser: hepatitis A y B, fiebre tifoidea, rabia
                        y Covid-19.
                    </p>

                </div>
                <div class="hidden lg:block lg:col-span-1">
                    <img src="{{ asset('images/ads/osde.jpg') }}" alt="" class="w-full mb-4">
                    <img src="{{ asset('images/ads/medife.jpg') }}" alt="" class="w-full">
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
