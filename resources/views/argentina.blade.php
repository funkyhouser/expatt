<x-app-layout>
    <section class="min-h-[590px] lg:h-[590px]  bg-banner-argentina py-12">
        <div
            class="grid items-center h-full max-w-screen-xl grid-cols-1 gap-4 px-4 mx-auto my-auto sm:px-6 lg:px-8 lg:grid-cols-2">
            {{-- COL-1 --}}
            <div>
                <h1 class="mb-4 text-lg font-black text-white lg:text-8xl">
                    Argentina
                </h1>
                <p class="text-[#25E59B] text-4xl font-semibold ">Lo que tienes que saber</p>
                <p class="py-4 text-[#F9F9F9]  lg:w-3/4">Descubre todo sobre Argentina para comenzar tu vida como
                    expatriado con el pie correcto: su cultura e identidad, cuáles son las mejores ciudades para vivir y
                    mucho más.</p>
                <div class="flex text-center">
                    <a href="#"
                        class="text-[#47108E] font-bold py-3 w-1/3 border-b-2 border-[#3CEBA7] bg-white rounded-t">
                        Conoce Argentina
                    </a>
                </div>
            </div>

        </div>
    </section>
    <section class="py-12 bg-[#3C137C]">
        <div class="max-w-screen-xl px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <p class="mb-6 text-xl font-black text-center text-white lg:text-3xl">Información útil para expatriados</p>
            <div class="grid gap-6 font-black text-white lg:grid-cols-3">
                <div class="flex flex-col h-full text-center">
                    <div class="flex items-center justify-center h-40">
                        <div class="p-8 bg-white rounded-full">
                            <img class="flex items-center justify-center h-16 text-center aspect-square"
                                src="{{ asset('images/icons/documentacion.svg') }}" alt="documentacion">
                        </div>
                    </div>
                    <h2 class="mt-4">Visado y documentación</h2>
                </div>
                <div class="flex flex-col h-full text-center">
                    <div class="flex items-center justify-center h-40">
                        <div class="p-8 bg-white rounded-full">
                            <img class="flex items-center justify-center h-16 text-center aspect-square"
                                src="{{ asset('images/icons/impuestos.svg') }}" alt="images/icons/impuestos">
                        </div>
                    </div>
                    <h2 class="mt-4">Impuestos para extranjeros</h2>
                </div>
                <div class="flex flex-col h-full text-center">
                    <div class="flex items-center justify-center h-40">
                        <div class="p-8 bg-white rounded-full">
                            <img class="flex items-center justify-center h-16 text-center aspect-square"
                                src="{{ asset('images/icons/mudanza.svg') }}" alt="images/icons/mudanza">
                        </div>
                    </div>
                    <h2 class="mt-4">Mudanza internacional</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-white">
        <div class="max-w-screen-xl px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <p class="mb-6 text-xl font-black text-center text-white lg:text-3xl">Trabajar en Argentina
            </p>
            <div class="grid gap-3 font-black text-white gap-y-6 lg:grid-cols-3">
                <div class="flex flex-col overflow-hidden bg-white rounded drop-shadow-md">
                    <p class="text-center py-3 text-2xl font-black text-white bg-[#47108E]">Mudarse a Argentina</p>
                    <div class="h-60">
                        <img class="object-cover w-full h-full" src="{{ asset('images/argentina/mudarse.jpg') }}"
                            alt="">
                    </div>
                    <div class="flex flex-col h-full p-3 bg-[#F9F9F9]">
                        <div class="divide-y divide-gray-100">
                            <div class="flex justify-between px-4 py-2 sm:gap-4 sm:px-0">
                                <p class="text-sm font-medium leading-6 text-gray-900">Vuelos a Argentina</p>
                                <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </p>
                            </div>
                            <div class="flex justify-between px-4 py-2 sm:gap-4 sm:px-0">
                                <p class="text-sm font-medium leading-6 text-gray-900">Visados y ciudadanías</p>
                                <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </p>
                            </div>
                            <div class="flex justify-between px-4 py-2 sm:gap-4 sm:px-0">
                                <p class="text-sm font-medium leading-6 text-gray-900">Las mejores ciudades para vivir en Argentina</p>
                                <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center justify-center m-4">
                            <a href="#" class="text-[#47108E] font-bold py-3 w-2/4 text-center border-2 border-b-[#3CEBA7] border-t-[#47108E] border-s-[#47108E] border-e-[#47108E] rounded-t ">
                            Más información
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col overflow-hidden bg-white rounded drop-shadow-md">
                    <p class="text-center py-3 text-2xl font-black text-white bg-[#47108E]">Vivir en Argentina</p>
                    <div class="h-60">
                        <img class="object-cover w-full h-full" src="{{ asset('images/argentina/vivir.jpg') }}"
                            alt="vivir">
                    </div>
                    <div class="flex flex-col h-full p-3 bg-[#F9F9F9]">
                        <div class="divide-y divide-gray-100">
                            <div class="flex justify-between px-4 py-2 sm:gap-4 sm:px-0">
                                <p class="text-sm font-medium leading-6 text-gray-900">Proveedores de telefonía e internet</p>
                                <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </p>
                            </div>
                            <div class="flex justify-between px-4 py-2 sm:gap-4 sm:px-0">
                                <p class="text-sm font-medium leading-6 text-gray-900">Compra un automóvil</p>
                                <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </p>
                            </div>
                            <div class="flex justify-between px-4 py-2 sm:gap-4 sm:px-0">
                                <p class="text-sm font-medium leading-6 text-gray-900">Fletes y mudanzas</p>
                                <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center justify-center m-4">
                            <a href="#" class="text-[#47108E] font-bold py-3 w-2/4 text-center border-2 border-b-[#3CEBA7] border-t-[#47108E] border-s-[#47108E] border-e-[#47108E] rounded-t ">
                            Más información
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col overflow-hidden bg-white rounded drop-shadow-md">
                    <p class="text-center py-3 text-2xl font-black text-white bg-[#47108E]">Educación</p>
                    <div class="h-60">
                        <img class="object-cover w-full h-full" src="{{ asset('images/argentina/educacion.jpg') }}"
                            alt="educacion">
                    </div>
                    <div class="flex flex-col h-full p-3 bg-[#F9F9F9]">
                        <div class="divide-y divide-gray-100">
                            <div class="flex justify-between px-4 py-2 sm:gap-4 sm:px-0">
                                <p class="text-sm font-medium leading-6 text-gray-900">Estudiar en Argentina</p>
                                <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </p>
                            </div>
                            <div class="flex justify-between px-4 py-2 sm:gap-4 sm:px-0">
                                <p class="text-sm font-medium leading-6 text-gray-900">Escuelas y universidades</p>
                                <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </p>
                            </div>
                            <div class="flex justify-between px-4 py-2 sm:gap-4 sm:px-0">
                                <p class="text-sm font-medium leading-6 text-gray-900">Aprender español</p>
                                <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center justify-center m-4">
                            <a href="#" class="text-[#47108E] font-bold py-3 w-2/4 text-center border-2 border-b-[#3CEBA7] border-t-[#47108E] border-s-[#47108E] border-e-[#47108E] rounded-t ">
                            Más información
                            </a>
                        </div>
                    </div>
                </div>
                {{--  --}}
                <div class="flex flex-col overflow-hidden bg-white rounded drop-shadow-md">
                    <p class="text-center py-3 text-2xl font-black text-white bg-[#47108E]">Trabajar en Argentina</p>
                    <div class="h-60">
                        <img class="object-cover w-full h-full" src="{{ asset('images/argentina/trabajar.jpg') }}"
                            alt="">
                    </div>
                    <div class="flex flex-col h-full p-3 bg-[#F9F9F9]">
                        <div class="divide-y divide-gray-100">
                            <div class="flex justify-between px-4 py-2 sm:gap-4 sm:px-0">
                                <p class="text-sm font-medium leading-6 text-gray-900">Buscar trabajos en Argentina</p>
                                <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </p>
                            </div>
                            <div class="flex justify-between px-4 py-2 sm:gap-4 sm:px-0">
                                <p class="text-sm font-medium leading-6 text-gray-900">Impuestos para autónomos y monotributistas en Argentina</p>
                                <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </p>
                            </div>
                            <div class="flex justify-between px-4 py-2 sm:gap-4 sm:px-0">
                                <p class="text-sm font-medium leading-6 text-gray-900">Comienza tu emprendimiento</p>
                                <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center justify-center m-4">
                            <a href="#" class="text-[#47108E] font-bold py-3 w-2/4 text-center border-2 border-b-[#3CEBA7] border-t-[#47108E] border-s-[#47108E] border-e-[#47108E] rounded-t ">
                            Más información
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col overflow-hidden bg-white rounded drop-shadow-md">
                    <p class="text-center py-3 text-2xl font-black text-white bg-[#47108E]">Finanzas y economía</p>
                    <div class="h-60">
                        <img class="object-cover w-full h-full" src="{{ asset('images/argentina/vivir.jpg') }}"
                            alt="vivir">
                    </div>
                    <div class="flex flex-col h-full p-3 bg-[#F9F9F9]">
                        <div class="divide-y divide-gray-100">
                            <div class="flex justify-between px-4 py-2 sm:gap-4 sm:px-0">
                                <p class="text-sm font-medium leading-6 text-gray-900">Cómo abrir una cuenta bancaria</p>
                                <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </p>
                            </div>
                            <div class="flex justify-between px-4 py-2 sm:gap-4 sm:px-0">
                                <p class="text-sm font-medium leading-6 text-gray-900">Seguros en Argentina</p>
                                <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </p>
                            </div>
                            <div class="flex justify-between px-4 py-2 sm:gap-4 sm:px-0">
                                <p class="text-sm font-medium leading-6 text-gray-900">Sistema de impuestos en Argentina</p>
                                <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center justify-center m-4">
                            <a href="#" class="text-[#47108E] font-bold py-3 w-2/4 text-center border-2 border-b-[#3CEBA7] border-t-[#47108E] border-s-[#47108E] border-e-[#47108E] rounded-t ">
                            Más información
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col overflow-hidden bg-white rounded drop-shadow-md">
                    <p class="text-center py-3 text-2xl font-black text-white bg-[#47108E]">Salud</p>
                    <div class="h-60">
                        <img class="object-cover w-full h-full" src="{{ asset('images/argentina/educacion.jpg') }}"
                            alt="educacion">
                    </div>
                    <div class="flex flex-col h-full p-3 bg-[#F9F9F9]">
                        <div class="divide-y divide-gray-100">
                            <div class="flex justify-between px-4 py-2 sm:gap-4 sm:px-0">
                                <p class="text-sm font-medium leading-6 text-gray-900">Seguros médicos para expatriados</p>
                                <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </p>
                            </div>
                            <div class="flex justify-between px-4 py-2 sm:gap-4 sm:px-0">
                                <p class="text-sm font-medium leading-6 text-gray-900">Conseguir cobertura médica</p>
                                <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </p>
                            </div>
                            <div class="flex justify-between px-4 py-2 sm:gap-4 sm:px-0">
                                <p class="text-sm font-medium leading-6 text-gray-900">Hospitales gratuitos en Argentina</p>
                                <p class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center justify-center m-4">
                            <a href="#" class="text-[#47108E] font-bold py-3 w-2/4 text-center border-2 border-b-[#3CEBA7] border-t-[#47108E] border-s-[#47108E] border-e-[#47108E] rounded-t ">
                            Más información
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
