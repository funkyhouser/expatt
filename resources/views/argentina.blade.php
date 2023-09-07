<x-app-layout>
    {{-- HERO --}}
    <section class="min-h-[590px] lg:h-[590px] bg-banner-argentina bg-cover bg-center py-12">
        <div
            class="grid items-center h-full max-w-screen-xl grid-cols-1 gap-4 px-4 mx-auto my-auto sm:px-6 lg:px-8 lg:grid-cols-2">
            {{-- COL-1 --}}
            <div>
                <h1 class="mb-4 text-lg font-black text-white lg:text-8xl">
                    Argentina
                </h1>
                <p class="text-[#25E59B] text-4xl font-semibold ">Lo que tienes que saber</p>
                <p class="py-4 text-[#F9F9F9]  lg:w-3/4">Descubre todo sobre Argentina para comenzar tu vida como
                    expatriado con el pie correcto: su cultura e identidad, cuáles son las mejores ciudades para vivir y mucho más.</p>
                <div class="flex text-center">
                    <a href="#conoce-argentina"
                        class="text-[#47108E] font-bold py-3 w-full lg:w-1/3 border-b-2 border-[#3CEBA7] bg-white rounded-t">
                        Conoce Argentina
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- INFORMACION UTIL --}}
    <section class="py-12 bg-[#3C137C] relative isolate">
        <div class="max-w-screen-xl px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <p class="mb-6 text-xl font-black text-center text-white lg:text-3xl">Información útil para expatriados</p>
            <div class="grid gap-6 font-black text-white lg:grid-cols-3">
                <a href="{{ url('/visado-documentacion/argentina') }}" class="flex flex-col h-full text-center">
                    <div class="flex items-center justify-center h-40">
                        <div class="relative p-6">
                            <svg class="absolute top-1 left-1 z-[-1]" width="100%" height="auto" viewBox="0 0 222 222" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_1_3063)">
                                <path d="M204.543 90.0568H177.171L198.385 68.848C193.558 57.2669 186.449 46.4167 177.02 36.9968C138.348 -1.66561 75.6516 -1.66561 36.9798 36.9968C13.3142 60.6568 4.1567 93.3081 9.45706 123.943H36.8286L15.6145 145.152C20.4485 156.733 27.5514 167.583 36.9798 177.003C75.6516 215.666 138.348 215.666 177.02 177.003C200.686 153.343 209.843 120.692 204.543 90.0568Z" fill="#00BDFF"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_1_3063" x="0" y="0" width="222" height="222" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dx="4" dy="4"/>
                                <feGaussianBlur stdDeviation="6"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_3063"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_3063" result="shape"/>
                                </filter>
                                </defs>
                            </svg>
                            <div class="p-8 bg-white rounded-full">
                                <img class="flex items-center justify-center h-16 text-center aspect-square"
                                src="{{ asset('images/icons/documentacion.svg') }}" alt="documentacion">
                            </div>
                        </div>
                    </div>
                    <h2 class="mt-4">Visado y documentación</h2>
                </a>
                <a href="{{ url('/impuestos-extranjeros/argentina') }}" class="flex flex-col h-full text-center">
                    <div class="flex items-center justify-center h-40">
                        <div class="relative p-6">
                            <svg class="absolute top-1 left-1 z-[-1]" width="100%" height="auto" viewBox="0 0 222 222" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_1_3063)">
                                <path d="M204.543 90.0568H177.171L198.385 68.848C193.558 57.2669 186.449 46.4167 177.02 36.9968C138.348 -1.66561 75.6516 -1.66561 36.9798 36.9968C13.3142 60.6568 4.1567 93.3081 9.45706 123.943H36.8286L15.6145 145.152C20.4485 156.733 27.5514 167.583 36.9798 177.003C75.6516 215.666 138.348 215.666 177.02 177.003C200.686 153.343 209.843 120.692 204.543 90.0568Z" fill="#FF7300"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_1_3063" x="0" y="0" width="222" height="222" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dx="4" dy="4"/>
                                <feGaussianBlur stdDeviation="6"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_3063"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_3063" result="shape"/>
                                </filter>
                                </defs>
                            </svg>
                            <div class="p-8 bg-white rounded-full">
                                <img class="flex items-center justify-center h-16 text-center aspect-square"
                                src="{{ asset('images/icons/impuestos.svg') }}" alt="impuestos">
                            </div>
                        </div>
                    </div>
                    <h2 class="mt-4">Impuestos para extranjeros</h2>
                </a>
                <a href="#" class="flex flex-col h-full text-center">
                    <div class="flex items-center justify-center h-40">
                        <div class="relative p-6">
                            <svg class="absolute top-1 left-1 z-[-1]" width="100%" height="auto" viewBox="0 0 222 222" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_1_3063)">
                                <path d="M204.543 90.0568H177.171L198.385 68.848C193.558 57.2669 186.449 46.4167 177.02 36.9968C138.348 -1.66561 75.6516 -1.66561 36.9798 36.9968C13.3142 60.6568 4.1567 93.3081 9.45706 123.943H36.8286L15.6145 145.152C20.4485 156.733 27.5514 167.583 36.9798 177.003C75.6516 215.666 138.348 215.666 177.02 177.003C200.686 153.343 209.843 120.692 204.543 90.0568Z" fill="#FF008C"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_1_3063" x="0" y="0" width="222" height="222" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dx="4" dy="4"/>
                                <feGaussianBlur stdDeviation="6"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_3063"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_3063" result="shape"/>
                                </filter>
                                </defs>
                            </svg>
                            <div class="p-8 bg-white rounded-full">
                                <img class="flex items-center justify-center h-16 text-center aspect-square"
                                src="{{ asset('images/icons/mudanza.svg') }}" alt="mudanza">
                            </div>
                        </div>
                    </div>
                    <h2 class="mt-4">Mudanza internacional</h2>
                </a>
            </div>
        </div>
        <div class="absolute left-0 right-0 bottom-0 max-w-[80%] lg:max-w-[1216px] bg-[#47108E] -z-10 h-[55%] mx-auto" ></div>
    </section>
    {{-- Comienza tu vida en --}}
    <section class="py-12 bg-white">
        <div id="conoce-argentina" class="max-w-screen-xl px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <p class="mb-6 text-xl font-black text-center text-[#3C137C] lg:text-3xl">Comienza tu nueva vida en Argentina
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
                        <div class="flex items-center justify-center p-4 mt-auto">
                            <a href="{{ url('/mudarse/argentina') }}" class="text-[#47108E] font-bold py-3 w-2/4 text-center border-2 border-b-[#3CEBA7] border-t-[#47108E] border-s-[#47108E] border-e-[#47108E] rounded-t ">
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
                        <div class="flex items-center justify-center p-4 mt-auto">
                            <a href="{{ url('/vivir/argentina') }}" class="text-[#47108E] font-bold py-3 w-2/4 text-center border-2 border-b-[#3CEBA7] border-t-[#47108E] border-s-[#47108E] border-e-[#47108E] rounded-t ">
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
                        <div class="flex items-center justify-center p-4 mt-auto">
                            <a href="{{ url('/educacion/argentina') }}" class="text-[#47108E] font-bold py-3 w-2/4 text-center border-2 border-b-[#3CEBA7] border-t-[#47108E] border-s-[#47108E] border-e-[#47108E] rounded-t ">
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
                        <div class="flex items-center justify-center p-4 mt-auto">
                            <a href="{{ url('/desarrolla-tu-futuro/argentina#trabaja') }}" class="text-[#47108E] font-bold py-3 w-2/4 text-center border-2 border-b-[#3CEBA7] border-t-[#47108E] border-s-[#47108E] border-e-[#47108E] rounded-t ">
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
                        <div class="flex items-center justify-center p-4 mt-auto">
                            <a href="{{ url('/finanzas-economia/argentina') }}" class="text-[#47108E] font-bold py-3 w-2/4 text-center border-2 border-b-[#3CEBA7] border-t-[#47108E] border-s-[#47108E] border-e-[#47108E] rounded-t ">
                            Más información
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col overflow-hidden bg-white rounded drop-shadow-md">
                    <p class="text-center py-3 text-2xl font-black text-white bg-[#47108E]">Salud</p>
                    <div class="h-60">
                        <img class="object-cover w-full h-full" src="{{ asset('images/argentina/salud.jpg') }}"
                            alt="salud">
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
                        <div class="flex items-center justify-center p-4 mt-auto">
                            <a href="{{ url('/salud/argentina') }}" class="text-[#47108E] font-bold py-3 w-2/4 text-center border-2 border-b-[#3CEBA7] border-t-[#47108E] border-s-[#47108E] border-e-[#47108E] rounded-t ">
                            Más información
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- SPOTLIGHT --}}
    <section class="bg-[#3CEBA7]">
        <div class="grid font-black text-lg text-[#3C137C] lg:grid-cols-[1.5fr_1fr_1fr] lg:h-[570px]">
            <div class="flex items-center flex-col justify-center bg-spotlight-pattern bg-[left_0%] lg:bg-[left_-24%] py-12 lg:py-0">
                <img class="w-5/6" src="{{ asset('images/spotlight/spotlight-text.svg') }}" alt="">
            </div>
            <a href="{{ url('/desarrolla-tu-futuro/argentina#trabaja') }}" class="relative flex flex-col items-center justify-end isolate min-h-[300px]">
                <p class="w-1/3 flex justify-center p-5 px-6 bg-[#3CEBA7]">Trabaja</p>
                <img src="{{ asset('images/spotlight/trabaja.jpg') }}" alt="" class="absolute inset-0 object-cover w-full h-full -z-10">
            </a>
            <a href="{{ url('/desarrolla-tu-futuro/argentina#estudia') }}" class="relative flex flex-col items-center justify-end isolate min-h-[300px]">
                <p class="w-1/3 flex justify-center p-5 px-6 bg-[#3CEBA7]">Estudia</p>
                <img src="{{ asset('images/spotlight/estudia.jpg') }}" alt="" class="absolute inset-0 object-cover w-full h-full -z-10">
            </a>
        </div>
    </section>
    {{-- SANTANDER --}}
    <section class="py-12">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <div class="grid bg-[#402D97] lg:grid-cols-3 mt-8">
                <div class="relative col-span-2 overflow-hidden bg-cover bg-santander-pattern h-80 lg:overflow-visible">
                    <img class="absolute bottom-0 max-w-sm -right-[45%] lg:right-auto lg:-translate-x-1/2 lg:left-1/2" src="{{ asset('images/santander/santander-girl.png') }}" alt="santander">
                    <img class="absolute w-20 -translate-y-1/2 left-12 top-1/2" src="{{ asset('images/santander/santander-logo.svg') }}" alt="santander logo">
                </div>
                <div class="flex flex-col justify-center w-4/5 py-8 mx-auto lg:py-0">
                    <h2 class="mb-3 text-2xl font-black leading-7 text-white">Abre tu cuenta SoyExpat en Santander, ¡100% gratis!</h2>
                    <p class="text-[#F9F9F9] mb-4 leading-4">Obtén tu tarjeta de débito ahora y empieza a disfrutar ahorros y promociones increíbles en tus compras.</p>
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
            <p class="mb-6 text-xl font-black text-center text-[#3C137C] lg:text-3xl">Te ayudamos a encontrar tu casa</p>
            <div class="flex justify-center gap-4 text-lg font-black text-white lg:text-2xl">
                <a href="{{ url('/renta-en/argentina') }}" class="overflow-hidden rounded">
                    <img class="object-cover w-full" src="{{ asset('images/casa/renta.jpg') }}" alt="renta">
                    <p class="text-center w-full py-2 lg:py-4 bg-[#3C137C]">Renta</p>
                </a>
                <a href="{{ url('/venta-en/argentina') }}" class="overflow-hidden rounded">
                    <img class="object-cover w-full" src="{{ asset('images/casa/compra.jpg') }}" alt="compra">
                    <p class="text-center w-full py-2 lg:py-4 bg-[#3C137C]">Compra</p>
                </a>
            </div>
        </div>
    </section>
    <section class="pb-12">
        <div x-data="{ imgModal : false, imgModalSrc : '' }"
            class="max-w-screen-xl px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <p class="text-[#3C137C] font-black text-xl lg:text-3xl text-center mb-6">Explora la galería de fotos de Argentina</p>

            <div x-data="{
                imageGalleryOpened: false,
                imageGalleryActiveUrl: null,
                imageGalleryImageIndex: null,

                imageGalleryOpen(event) {
                    this.imageGalleryImageIndex = event.target.dataset.index;
                    this.imageGalleryActiveUrl = event.target.src;
                    this.imageGalleryOpened = true;
                },
                imageGalleryClose() {
                    this.imageGalleryOpened = false;
                    setTimeout(() => this.imageGalleryActiveUrl = null, 300);
                },
                imageGalleryNext(){
                    this.imageGalleryImageIndex = (this.imageGalleryImageIndex == 10) ? 1 : (parseInt(this.imageGalleryImageIndex) + 1);
                    this.imageGalleryActiveUrl = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').src;
                },
                imageGalleryPrev() {
                    this.imageGalleryImageIndex = (this.imageGalleryImageIndex == 1) ? 10 : (parseInt(this.imageGalleryImageIndex) - 1);
                    this.imageGalleryActiveUrl = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').src;

                }
            }"
            @image-gallery-next.window="imageGalleryNext()"
            @image-gallery-prev.window="imageGalleryPrev()"
            @keyup.right.window="imageGalleryNext();"
            @keyup.left.window="imageGalleryPrev();"
            class="w-full h-full select-none">
            <div class="w-full duration-1000 delay-300 opacity-0 select-none ease animate-fade-in-view" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                <div x-ref="gallery" id="gallery" class="grid grid-cols-[1fr_1fr_1fr_1fr_1fr] grid-rows-[1fr_1fr_1fr_1fr] gap-1 lg:gap-4 ">
                    <img @click="imageGalleryOpen"
                        class="cursor-pointer object-cover w-full h-full rounded [grid-area:1/1/2/3]"
                        src="{{ asset('images/galeria/1.jpg') }}" alt="" data-index="1">
                    <img @click="imageGalleryOpen"
                        class="cursor-pointer object-cover w-full h-full rounded [grid-area:1/3/2/6]"
                        src="{{ asset('images/galeria/2.jpg') }}" alt="" data-index="2">
                    <img @click="imageGalleryOpen"
                        class="cursor-pointer object-cover w-full h-full rounded [grid-area:2/1/3/2]"
                        src="{{ asset('images/galeria/3.jpg') }}" alt="" data-index="3">
                    <img @click="imageGalleryOpen"
                        class="cursor-pointer object-cover w-full h-full rounded [grid-area:2/2/3/3]"
                        src="{{ asset('images/galeria/4.jpg') }}" alt="" data-index="4">
                    <img @click="imageGalleryOpen"
                        class="cursor-pointer object-cover w-full h-full rounded [grid-area:2/3/3/5]"
                        src="{{ asset('images/galeria/5.jpg') }}" alt="" data-index="5">
                    <img @click="imageGalleryOpen"
                        class="cursor-pointer object-cover w-full h-full rounded [grid-area:2/5/3/6]"
                        src="{{ asset('images/galeria/6.jpg') }}" alt="" data-index="6">
                    <img @click="imageGalleryOpen"
                        class="cursor-pointer object-cover w-full h-full rounded [grid-area:3/1/4/4]"
                        src="{{ asset('images/galeria/7.jpg') }}" alt="" data-index="7">
                    <img @click="imageGalleryOpen"
                        class="cursor-pointer object-cover w-full h-full rounded [grid-area:3/4/5/6]"
                        src="{{ asset('images/galeria/8.jpg') }}" alt="" data-index="8">
                    <img @click="imageGalleryOpen"
                        class="cursor-pointer object-cover w-full h-full rounded [grid-area:4/1/5/3]"
                        src="{{ asset('images/galeria/9.jpg') }}" alt="" data-index="9">
                    <img @click="imageGalleryOpen"
                        class="cursor-pointer object-cover w-full h-full rounded [grid-area:4/3/5/4]"
                        src="{{ asset('images/galeria/10.jpg') }}" alt="" data-index="10">
                </div>
            </div>
            <template x-teleport="body">
                <div x-show="imageGalleryOpened" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90"
                    @click="imageGalleryClose"
                    @keydown.window.escape="imageGalleryClose"
                    x-trap.inert.noscroll="imageGalleryOpened"
                    class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black bg-opacity-75">
                    <div @click.outside="imgModal = false" class="relative flex justify-center w-full h-full lg:w-2/3" x-cloak>
                        <div @click="$event.stopPropagation(); $dispatch('image-gallery-prev')" class="absolute p-3 text-white transform -translate-y-1/2 rounded-full cursor-pointer -left-4 -translate-x-0 bg-white/10 hover:bg-white/20 lg:-left-16 top-1/2">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>
                        </div>
                        <div @click="$event.stopPropagation(); $dispatch('image-gallery-next');" class="absolute p-3 text-white transform -translate-y-1/2 rounded-full cursor-pointer -right-4 -translate-x-0 bg-white/10 hover:bg-white/20 lg:-right-16 top-1/2">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                        </div>

                        <div class="flex flex-col justify-center w-full h-100">
                            <div class="flex justify-end">
                                <button @click="imgModal = false" class="outline-none focus:outline-none">
                                    <svg class="text-white fill-current " xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 18 18">
                                        <path
                                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <img
                                x-show="imageGalleryOpened"
                                x-transition:enter="transition ease-in-out duration-300"
                                x-transition:enter-start="opacity-0 transform scale-50"
                                x-transition:leave="transition ease-in-in duration-300"
                                x-transition:leave-end="opacity-0 transform scale-50"
                                class="object-contain w-full h-full" :src="imageGalleryActiveUrl" alt="" style="display: none;">
                        </div>
                    </div>
                </div>
            </template>
            </div>
        </div>
    </section>
    {{-- SUMARTE android/ios --}}
    {{-- <section class="bg-[#F9F9F9]">
        <div class="px-4 mx-auto my-auto sm:px-6 lg:px-8 grid lg:grid-cols-2 lg:h-[570px]  py-8 lg:py-0">
            <div class="flex flex-col justify-center text-4xl bg-spotlight-pattern bg-[left_-24%] w-full lg:w-3/4 mx-auto mb-6 lg:mb-0">
                <h2 class="text-[#3C137C] font-black mb-4">Súmate a la comunidad <br>de expatriados más grande.</h2>
                <p class="mb-6 text-lg">Descarga nuestra aplicación exclusiva para usuarios de <span class="font-bold">Soy Expat</span> y conecta con más de 25.000 personas.<br> Úsala para conseguir tu próximo empleo, hacer nuevas amistades y organizar salidas en grupo.</p>
                <div class="flex">
                    <a href="#" class="mr-3">
                        <img src="{{ asset('images/sumate/appstore.svg') }}" alt="" >
                    </a>
                    <a href="#" class="">
                        <img src="{{ asset('images/sumate/googleplay.svg') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="relative min-h-[300px] ">
                <img src="{{ asset('images/sumate/sumate-mobile.jpg') }}" alt="" class="absolute inset-0 object-cover w-full h-full" >
            </div>
        </div>
    </section> --}}
</x-app-layout>
