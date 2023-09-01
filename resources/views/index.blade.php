<x-app-layout>
    <section class="min-h-[590px] lg:h-[590px] bg-[#47108E] bg-hero-pattern py-12">
        <div
            class="grid items-center h-full max-w-screen-xl grid-cols-1 gap-4 px-4 mx-auto my-auto sm:px-6 lg:px-8 lg:grid-cols-2">
            {{-- COL-1 --}}
            <div>
                <h1 class="text-lg font-medium text-white lg:text-4xl">La comunidad de<br>expatriados más grande de<br>
                </h1>
                <p class="text-[#25E59B] text-clamp font-black uppercase -mt-4 lg:-mt-8">latam</p>
            </div>
            {{-- COL-2 --}}
            <section>
                <h2 class="mb-5 font-semibold text-white">¿Dónde te gustaría vivir?</h2>
                <div class="grid gap-3 font-medium lg:grid-cols-2 text-[#272727]">
                    {{-- COL 1 --}}
                    <div class="flex flex-col space-y-4">
                        {{-- Arg --}}
                        <a href="#" target="_blank"
                            class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                            <div class="flex items-center p-3">
                                <img class="mr-2" src="{{ asset('images/flags/argentina.png') }}"
                                    alt="Bandera Argentina">
                                <span>Argentina</span>
                            </div>
                            <span
                                class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                <i class="px-3 fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                        {{-- Bol --}}
                        <a href="#" target="_blank"
                            class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                            <div class="flex items-center p-3">
                                <img class="mr-2" src="{{ asset('images/flags/bolivia.png') }}" alt="Bandera Bolivia">
                                <span>Bolivia</span>
                            </div>
                            <span
                                class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                <i class="px-3 fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                        {{-- Brasil --}}
                        <a href="#" target="_blank"
                            class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                            <div class="flex items-center p-3">
                                <img class="mr-2" src="{{ asset('images/flags/brasil.png') }}" alt="Bandera Brasil">
                                <span>Brasil</span>
                            </div>
                            <span
                                class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                <i class="px-3 fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                        {{-- Chile --}}
                        <a href="#" target="_blank"
                            class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                            <div class="flex items-center p-3">
                                <img class="mr-2" src="{{ asset('images/flags/chile.png') }}" alt="Bandera Chile">
                                <span>Chile</span>
                            </div>
                            <span
                                class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                <i class="px-3 fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                        {{-- Col --}}
                        <a href="#" target="_blank"
                            class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                            <div class="flex items-center p-3">
                                <img class="mr-2" src="{{ asset('images/flags/colombia.png') }}" alt="Bandera Colombia">
                                <span>Colombia</span>
                            </div>
                            <span
                                class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                <i class="px-3 fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                    {{-- COL 2 --}}
                    <div class="flex flex-col space-y-4">
                        {{-- Ecu --}}
                        <a href="#" target="_blank"
                            class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                            <div class="flex items-center p-3">
                                <img class="mr-2" src="{{ asset('images/flags/ecuador.png') }}" alt="Bandera Argentina">
                                <span>Ecuador</span>
                            </div>
                            <span
                                class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                <i class="px-3 fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                        {{-- Ecu --}}
                        <a href="#" target="_blank"
                            class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                            <div class="flex items-center p-3">
                                <img class="mr-2" src="{{ asset('images/flags/mexico.png') }}" alt="Bandera Argentina">
                                <span>México</span>
                            </div>
                            <span
                                class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                <i class="px-3 fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                        {{-- Par --}}
                        <a href="#" target="_blank"
                            class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                            <div class="flex items-center p-3">
                                <img class="mr-2" src="{{ asset('images/flags/paraguay.png') }}" alt="Bandera Paraguay">
                                <span>Paraguay</span>
                            </div>
                            <span
                                class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                <i class="px-3 fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                        {{-- Per --}}
                        <a href="#" target="_blank"
                            class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                            <div class="flex items-center p-3">
                                <img class="mr-2" src="{{ asset('images/flags/peru.png') }}" alt="Bandera Perú">
                                <span>Perú</span>
                            </div>
                            <span
                                class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                <i class="px-3 fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                        {{-- Otro --}}
                        <a href="#" target="_blank"
                            class="flex items-center justify-between overflow-hidden bg-white rounded group/dondevivir">
                            <div class="flex items-center p-3">
                                <img class="mr-2" src="{{ asset('images/flags/otros.png') }}" alt="Bandera Otros">
                                <span>Otros</span>
                            </div>
                            <span
                                class="group-hover/dondevivir:bg-gray-200 ease-in-out transition-all flex items-center justify-center h-full w-12 bg-gray-50 rounded-l-[60px] text-[#47108E]">
                                <i class="px-3 fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class="bg-[#F9F9F9] py-12">
        <div class="max-w-screen-xl px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <p class="text-[#3C137C] font-black text-xl lg:text-3xl text-center mb-6">Destacado del mes: Argentina</p>
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
                <div class="flex flex-col overflow-hidden bg-white rounded">
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
                        <div class="flex flex-wrap pt-3 mt-auto">
                            <a href="#" target="_blank"
                                class="font-black text-[#3C137C] mb-2 mr-2 border-b-4 border-[#25E59B]">Leer más</a>
                        </div>
                    </div>
                </div>
                {{-- --}}
                <div class="flex flex-col overflow-hidden bg-white rounded">
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
                            <a href="#" target="_blank"
                                class="font-black text-[#3C137C] mb-2 mr-2 border-b-4 border-[#25E59B]">Leer más</a>
                        </div>
                    </div>
                </div>
                {{-- --}}
                <div class="flex flex-col overflow-hidden bg-white rounded">
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
                            <a href="#" target="_blank"
                                class="font-black text-[#3C137C] mb-2 mr-2 border-b-4 border-[#25E59B]">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12">
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
                        {{-- @click.outside="imgModal = false" --}}
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
                    class="object-cover w-full h-full rounded [grid-area:1/1/2/3]"
                    src="{{ asset('images/galeria/1.jpg') }}" alt="">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/2.jpg') }}' })"
                    class="object-cover w-full h-full rounded [grid-area:1/3/2/6]"
                    src="{{ asset('images/galeria/2.jpg') }}" alt="">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/3.jpg') }}' })"
                    class="object-cover w-full h-full rounded [grid-area:2/1/3/2]"
                    src="{{ asset('images/galeria/3.jpg') }}" alt="">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/4.jpg') }}' })"
                    class="object-cover w-full h-full rounded [grid-area:2/2/3/3]"
                    src="{{ asset('images/galeria/4.jpg') }}" alt="">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/5.jpg') }}' })"
                    class="object-cover w-full h-full rounded [grid-area:2/3/3/5]"
                    src="{{ asset('images/galeria/5.jpg') }}" alt="">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/6.jpg') }}' })"
                    class="object-cover w-full h-full rounded [grid-area:2/5/3/6]"
                    src="{{ asset('images/galeria/6.jpg') }}" alt="">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/7.jpg') }}' })"
                    class="object-cover w-full h-full rounded [grid-area:3/1/4/4]"
                    src="{{ asset('images/galeria/7.jpg') }}" alt="">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/8.jpg') }}' })"
                    class="object-cover w-full h-full rounded [grid-area:3/4/5/6]"
                    src="{{ asset('images/galeria/8.jpg') }}" alt="">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/9.jpg') }}' })"
                    class="object-cover w-full h-full rounded [grid-area:4/1/5/3]"
                    src="{{ asset('images/galeria/9.jpg') }}" alt="">
                <img @click="$dispatch('notify', { imgModalSrc: '{{ asset('images/galeria/10.jpg') }}' })"
                    class="object-cover w-full h-full rounded [grid-area:4/3/5/4]"
                    src="{{ asset('images/galeria/10.jpg') }}" alt="">
            </div>
        </div>
    </section>
</x-app-layout>
