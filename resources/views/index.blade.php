<x-app-layout>
    <section class="min-h-[590px] lg:h-[590px] bg-[#47108E] bg-hero-pattern py-12">
        <div
            class="grid items-center h-full max-w-screen-xl grid-cols-1 gap-4 px-4 mx-auto my-auto sm:px-6 lg:px-8 lg:grid-cols-3">
            {{-- COL-1 --}}
            <div>
                <h1 class="text-lg font-medium text-white lg:text-3xl">La comunidad de<br>expatriados más grande de<br>
                </h1>
                <p class="text-[#25E59B] font-black uppercase -mt-4 lg:-mt-8"
                    style="font-size: clamp(1rem, 20vw, 7rem)">latam</p>
            </div>
            {{-- COL-2 --}}
            <section class="col-span-2 px-2 lg:pl-8">
                <h2 class="mb-5 font-semibold text-white">¿Dónde te gustaría vivir?</h2>
                {{-- COL 1 --}}
                <div class="px-0 lg:px-2">
                    <div class="flex flex-wrap -mx-4 text-xs lg:-mx-2 lg:text-sm">
                        {{-- Mex --}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="{{ route('mexico') }}"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/mexico.png') }}"
                                        alt="Bandera MMéxico">
                                    <span>México</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- Arg --}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="{{ route('argentina') }}"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/argentina.png') }}"
                                        alt="Bandera Argentina">
                                    <span>Argentina</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- España --}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="#"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/espana.png') }}" alt="Bandera España">
                                    <span>España</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- Col --}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="#"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/colombia.png') }}"
                                        alt="Bandera Colombia">
                                    <span>Colombia</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- Chile --}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="#"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/chile.png') }}" alt="Bandera Chile">
                                    <span>Chile</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- Brasil --}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="#"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/brasil.png') }}" alt="Bandera Brasil">
                                    <span>Brasil</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- Per --}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="#"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/peru.png') }}" alt="Bandera Perú">
                                    <span>Perú</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- Republica Dominicana --}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="#"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/republica-dominicana.png') }}"
                                        alt="Bandera Republica Dominicana">
                                    <span>Dominicana</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- Costa rica --}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="#"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/costa-rica.png') }}"
                                        alt="Bandera Costa rica">
                                    <span>Costa Rica</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- Ecu --}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="#"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/ecuador.png') }}"
                                        alt="Bandera Argentina">
                                    <span>Ecuador</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- Panama --}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="#"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/panama.png') }}" alt="Bandera panama">
                                    <span>Panama</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- Par --}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="#"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/paraguay.png') }}"
                                        alt="Bandera Paraguay">
                                    <span>Paraguay</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- Puerto Rico --}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="#"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/puerto-rico.png') }}"
                                        alt="Bandera Puerto Rico">
                                    <span>Puerto Rico</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- Uruguay --}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="#"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/uruguay.png') }}"
                                        alt="Bandera uruguay">
                                    <span>Uruguay</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- Venezuela --}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="#"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/venezuela.png') }}"
                                        alt="Bandera Venezuela">
                                    <span>Venezuela</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- Guatemala --}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="#"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/guatemala.png') }}"
                                        alt="Bandera Guatemala">
                                    <span>Guatemala</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- Nicaragua --}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="#"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/nicaragua.png') }}"
                                        alt="Bandera Nicaragua">
                                    <span>Nicaragua</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- El Salvador --}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="#"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/el-salvador.png') }}"
                                        alt="Bandera El Salvador">
                                    <span>El Salvador</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- Hoduras--}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="#"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/honduras.png') }}"
                                        alt="Bandera Hodhonduras">
                                    <span>Honduras</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                        {{-- Cuba--}}
                        <div class="flex flex-col justify-center w-1/2 px-1 mb-2 lg:px-2 lg:w-1/3">
                            <a href="#"
                                class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                                <div class="flex items-center p-3">
                                    <img class="mr-2" src="{{ asset('images/flags/cuba.png') }}" alt="Bandera Cuba">
                                    <span>Cuba</span>
                                </div>
                                <span
                                    class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-6 lg:w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                    <i class="px-3 fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class="bg-[#F9F9F9] py-12">
        <div class="max-w-screen-xl px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <p class="text-[#3C137C] font-black text-xl lg:text-3xl text-center mb-6">Destacado del mes: Argentina</p>
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
                <a href="{{ url('/argentina/los-beneficios-de-ser-un-expatriado-en-argentina') }}"
                    class="flex flex-col overflow-hidden bg-white rounded hover:shadow-md">
                    <div class="relative h-60">
                        <img class="object-cover w-full" src="{{ asset('images/destacado/1.jpg') }}" alt="">
                        <img class="absolute right-0 p-2 rounded-l-[4px] top-8 bg-white"
                            src="{{ asset('images/flags/argentina.png') }}" alt="Bandera Argentina">
                    </div>
                    <div class="flex flex-col h-full p-4 border-t-2 border-[#25E59B]">
                        <h2 class="mb-2 text-2xl font-black text-[#3C137C]">
                            Los beneficios de ser un expatriado en Argentina
                        </h2>
                        <p class="line-clamp-4">Some Description Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Explicabo maxime alias impedit vitae magni minus et eum corporis enim! Libero atque a
                            voluptatem magni nobis aspernatur corporis reiciendis facilis rerum quo possimus quibusdam
                            velit cum nemo error, eveniet laborum autem! Facere non vero aperiam aliquam ut nihil, ea in
                            iusto libero eos doloribus? Animi, nam.</p>
                        <div class="flex flex-wrap pt-1 mt-auto">
                            <p class="font-black text-[#3C137C] mb-2 border-b-4 border-[#25E59B]">Leer más</p>
                        </div>

                    </div>
                </a>
                {{-- --}}
                <div class="flex flex-col overflow-hidden bg-white rounded hover:shadow-md">
                    <div class="relative h-60">
                        <img class="object-cover w-full" src="{{ asset('images/destacado/2.jpg') }}" alt="">
                        <img class="absolute right-0 p-2 rounded-l-[4px] top-8 bg-white"
                            src="{{ asset('images/flags/argentina.png') }}" alt="Bandera Argentina">
                    </div>
                    <div class="flex flex-col h-full p-4 border-t-2 border-[#25E59B]">
                        <h2 class="mb-2 text-2xl font-black text-[#3C137C]">
                            Construye tu futuro en el extranjero: vive en Argentina
                        </h2>
                        <p class="line-clamp-4">Some Description Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Explicabo maxime alias impedit vitae magni minus et eum corporis enim! Libero atque a
                            voluptatem magni nobis aspernatur corporis reiciendis facilis rerum quo possimus quibusdam
                            velit cum nemo error, eveniet laborum autem! Facere non vero aperiam aliquam ut nihil, ea in
                            iusto libero eos doloribus? Animi, nam.</p>
                        <div class="flex flex-wrap pt-3 mt-auto">
                            <a href="{{ url('/argentina/los-beneficios-de-ser-un-expatriado-en-argentina') }}"
                                class="font-black text-[#3C137C] mb-2 mr-2 border-b-4 border-[#25E59B]">Leer más</a>
                        </div>
                    </div>
                </div>
                {{-- --}}
                <div class="flex flex-col overflow-hidden bg-white rounded hover:shadow-md">
                    <div class="relative h-60">
                        <img class="object-cover w-full" src="{{ asset('images/destacado/3.jpg') }}" alt="">
                        <img class="absolute right-0 p-2 rounded-l-[4px] top-8 bg-white"
                            src="{{ asset('images/flags/argentina.png') }}" alt="Bandera Argentina">
                    </div>
                    <div class="flex flex-col h-full p-4 border-t-2 border-[#25E59B]">
                        <h2 class="mb-2 text-2xl font-black text-[#3C137C]">
                            Cómo obtener tu visa de trabajo en Argentina
                        </h2>
                        <p class="line-clamp-4">Some Description Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Explicabo maxime alias impedit vitae magni minus et eum corporis enim! Libero atque a
                            voluptatem magni nobis aspernatur corporis reiciendis facilis rerum quo possimus quibusdam
                            velit cum nemo error, eveniet laborum autem! Facere non vero aperiam aliquam ut nihil, ea in
                            iusto libero eos doloribus? Animi, nam.</p>
                        <div class="flex flex-wrap pt-3 mt-auto">
                            <a href="{{ url('/argentina/los-beneficios-de-ser-un-expatriado-en-argentina') }}"
                                class="font-black text-[#3C137C] mb-2 mr-2 border-b-4 border-[#25E59B]">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="py-12">
        <div x-data="{ imgModal : false, imgModalSrc : '' }"
            class="max-w-screen-xl px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <p class="text-[#3C137C] font-black text-xl lg:text-3xl text-center mb-6">Explora la galería de fotos de
                Argentina</p>
            <div x-show="imgModal" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90" x-on:click.away="imgModalSrc = ''"
                @notify.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc"
                class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black bg-opacity-75">
                <div @click.outside="imgModal = false" class="flex flex-col max-w-3xl max-h-full overflow-auto">
                    <div class="z-50">
                        <button @click="imgModal = false" class="float-right pt-2 pr-2 outline-none focus:outline-none">
                            <svg class="text-white fill-current " xmlns="http://www.w3.org/2000/svg" width="18"
                                height="18" viewBox="0 0 18 18">
                                <path
                                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-2">
                        <img class="object-contain h-1/2-screen" :src="imgModalSrc">
                    </div>
                </div>
            </div>

            <div x-data class="grid grid-cols-[1fr_1fr_1fr_1fr_1fr] grid-rows-[1fr_1fr_1fr_1fr] gap-1 lg:gap-4 ">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/1.jpg') }}' })"
                    class="cursor-pointer object-cover w-full h-full rounded [grid-area:1/1/2/3]"
                    src="{{ asset('images/galeria/1.jpg') }}" alt="">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/2.jpg') }}' })"
                    class="cursor-pointer object-cover w-full h-full rounded [grid-area:1/3/2/6]"
                    src="{{ asset('images/galeria/2.jpg') }}" alt="">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/3.jpg') }}' })"
                    class="cursor-pointer object-cover w-full h-full rounded [grid-area:2/1/3/2]"
                    src="{{ asset('images/galeria/3.jpg') }}" alt="">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/4.jpg') }}' })"
                    class="cursor-pointer object-cover w-full h-full rounded [grid-area:2/2/3/3]"
                    src="{{ asset('images/galeria/4.jpg') }}" alt="">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/5.jpg') }}' })"
                    class="cursor-pointer object-cover w-full h-full rounded [grid-area:2/3/3/5]"
                    src="{{ asset('images/galeria/5.jpg') }}" alt="">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/6.jpg') }}' })"
                    class="cursor-pointer object-cover w-full h-full rounded [grid-area:2/5/3/6]"
                    src="{{ asset('images/galeria/6.jpg') }}" alt="">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/7.jpg') }}' })"
                    class="cursor-pointer object-cover w-full h-full rounded [grid-area:3/1/4/4]"
                    src="{{ asset('images/galeria/7.jpg') }}" alt="">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/8.jpg') }}' })"
                    class="cursor-pointer object-cover w-full h-full rounded [grid-area:3/4/5/6]"
                    src="{{ asset('images/galeria/8.jpg') }}" alt="">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/9.jpg') }}' })"
                    class="cursor-pointer object-cover w-full h-full rounded [grid-area:4/1/5/3]"
                    src="{{ asset('images/galeria/9.jpg') }}" alt="">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/10.jpg') }}' })"
                    class="cursor-pointer object-cover w-full h-full rounded [grid-area:4/3/5/4]"
                    src="{{ asset('images/galeria/10.jpg') }}" alt="">
            </div>
        </div>
    </section> --}}
    <section class="py-12 bg-white">
        <div x-data="{ imgModal : false, imgModalSrc : '' }"
            class="max-w-screen-xl px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <p class="text-[#3C137C] font-black text-xl lg:text-3xl text-center mb-6">Explora la galería de fotos de
                Argentina</p>

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
            }" @image-gallery-next.window="imageGalleryNext()" @image-gallery-prev.window="imageGalleryPrev()"
                @keyup.right.window="imageGalleryNext();" @keyup.left.window="imageGalleryPrev();"
                class="w-full h-full select-none">
                <div class="w-full duration-1000 delay-300 opacity-0 select-none ease animate-fade-in-view"
                    style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                    <div x-ref="gallery" id="gallery"
                        class="grid grid-cols-[1fr_1fr_1fr_1fr_1fr] grid-rows-[1fr_1fr_1fr_1fr] gap-1 lg:gap-4 ">
                        <div class="w-full h-full overflow-hidden [grid-area:1/1/2/3] ">
                            <img @click="imageGalleryOpen"
                                class="object-cover w-full h-full transition duration-500 rounded cursor-pointer hover:scale-105"
                                src="{{ asset('images/galeria/1.jpg') }}" alt="" data-index="1">
                        </div>
                        <div class="w-full h-full overflow-hidden [grid-area:1/3/2/6] ">
                            <img @click="imageGalleryOpen"
                                class="object-cover w-full h-full transition duration-500 rounded cursor-pointer hover:scale-105"
                                src="{{ asset('images/galeria/2.jpg') }}" alt="" data-index="2">
                        </div>
                        <div class="w-full h-full overflow-hidden [grid-area:2/1/3/2] ">
                            <img @click="imageGalleryOpen"
                                class="object-cover w-full h-full transition duration-500 rounded cursor-pointer hover:scale-105"
                                src="{{ asset('images/galeria/3.jpg') }}" alt="" data-index="3">
                        </div>
                        <div class="w-full h-full overflow-hidden [grid-area:2/2/3/3] ">
                            <img @click="imageGalleryOpen"
                                class="object-cover w-full h-full transition duration-500 rounded cursor-pointer hover:scale-105"
                                src="{{ asset('images/galeria/4.jpg') }}" alt="" data-index="4">
                        </div>
                        <div class="w-full h-full overflow-hidden [grid-area:2/3/3/5] ">
                            <img @click="imageGalleryOpen"
                                class="object-cover w-full h-full transition duration-500 rounded cursor-pointer hover:scale-105"
                                src="{{ asset('images/galeria/5.jpg') }}" alt="" data-index="5">
                        </div>
                        <div class="w-full h-full overflow-hidden [grid-area:2/5/3/6] ">
                            <img @click="imageGalleryOpen"
                                class="object-cover w-full h-full transition duration-500 rounded cursor-pointer hover:scale-105"
                                src="{{ asset('images/galeria/6.jpg') }}" alt="" data-index="6">
                        </div>
                        <div class="w-full h-full overflow-hidden [grid-area:3/1/4/4] ">
                            <img @click="imageGalleryOpen"
                                class="object-cover w-full h-full transition duration-500 rounded cursor-pointer hover:scale-105"
                                src="{{ asset('images/galeria/7.jpg') }}" alt="" data-index="7">
                        </div>
                        <div class="w-full h-full overflow-hidden [grid-area:3/4/5/6] ">
                            <img @click="imageGalleryOpen"
                                class="object-cover w-full h-full transition duration-500 rounded cursor-pointer hover:scale-105"
                                src="{{ asset('images/galeria/8.jpg') }}" alt="" data-index="8">
                        </div>
                        <div class="w-full h-full overflow-hidden [grid-area:4/1/5/3] ">
                            <img @click="imageGalleryOpen"
                                class="object-cover w-full h-full transition duration-500 rounded cursor-pointer hover:scale-105"
                                src="{{ asset('images/galeria/9.jpg') }}" alt="" data-index="9">
                        </div>
                        <div class="w-full h-full overflow-hidden [grid-area:4/3/5/4] ">
                            <img @click="imageGalleryOpen"
                                class="object-cover w-full h-full transition duration-500 rounded cursor-pointer hover:scale-105"
                                src="{{ asset('images/galeria/10.jpg') }}" alt="" data-index="10">
                        </div>
                    </div>
                </div>
                <template x-teleport="body">
                    <div x-show="imageGalleryOpened" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90" @click="imageGalleryClose"
                        @keydown.window.escape="imageGalleryClose" x-trap.inert.noscroll="imageGalleryOpened"
                        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black bg-opacity-75">
                        <div @click.outside="imgModal = false"
                            class="relative flex justify-center w-full h-full lg:w-2/3" x-cloak>
                            <div @click="$event.stopPropagation(); $dispatch('image-gallery-prev')"
                                class="absolute p-3 text-white transform -translate-y-1/2 rounded-full cursor-pointer -left-4 -translate-x-0 bg-white/10 hover:bg-white/20 lg:-left-16 top-1/2">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 19.5L8.25 12l7.5-7.5" />
                                </svg>
                            </div>
                            <div @click="$event.stopPropagation(); $dispatch('image-gallery-next');"
                                class="absolute p-3 text-white transform -translate-y-1/2 rounded-full cursor-pointer -right-4 -translate-x-0 bg-white/10 hover:bg-white/20 lg:-right-16 top-1/2">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </div>

                            <div class="flex flex-col justify-center w-full h-100">
                                <div class="flex justify-end">
                                    <button @click="imgModal = false" class="outline-none focus:outline-none">
                                        <svg class="text-white fill-current " xmlns="http://www.w3.org/2000/svg"
                                            width="18" height="18" viewBox="0 0 18 18">
                                            <path
                                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                                <img x-show="imageGalleryOpened"
                                    x-transition:enter="transition ease-in-out duration-300"
                                    x-transition:enter-start="opacity-0 transform scale-50"
                                    x-transition:leave="transition ease-in-in duration-300"
                                    x-transition:leave-end="opacity-0 transform scale-50"
                                    class="object-contain w-full h-full" :src="imageGalleryActiveUrl" alt=""
                                    style="display: none;">
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </section>
</x-app-layout>
