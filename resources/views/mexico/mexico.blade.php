<x-app-layout>
    {{-- HERO --}}
    <section class="min-h-[590px] lg:h-[590px] bg-banner-mexico bg-cover bg-center py-12">
        <div
            class="grid items-center h-full max-w-screen-xl grid-cols-1 gap-4 px-4 mx-auto my-auto sm:px-6 lg:px-8 lg:grid-cols-2">
            {{-- COL-1 --}}
            <div>
                <h1 class="mb-4 text-lg font-black text-white lg:text-8xl">
                    México
                </h1>
                <p class="text-[#25E59B] text-4xl font-semibold">Lo que tienes que saber</p>
                <p class="pt-4 pb-7 text-[#F9F9F9] lg:w-3/4">Descubre todo sobre mexico para comenzar tu vida como
                    expatriado con el pie correcto: su cultura e identidad, cuáles son las mejores ciudades para vivir y
                    mucho más.</p>
                <div class="flex text-center">
                    <a href="#conoce-mexico"
                        class="text-[#47108E] font-bold py-4 w-full lg:w-72 bg-white hover:bg-[#3CEBA7] transition  rounded-xl">
                        Conoce México
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- INFORMACION UTIL --}}
    <section class="py-12 bg-[#3C137C] relative isolate">
        <div id="informacion-util" class="max-w-screen-xl px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <p class="mb-6 text-xl font-black text-center text-white lg:text-3xl">Información útil para expatriados</p>
            <div class="grid gap-6 text-3xl font-black text-white lg:grid-cols-3">
                <a href="{{ url('/informacion-importante/mexico') }}" class="flex flex-col h-full text-center lg:items-end">
                    <div class="flex items-center justify-center h-40">
                        <div class="group/escala">
                            <div class="w-[150px] h-[150px] flex justify-center items-center relative rounded-full before:content-[''] before:absolute before:w-full before:h-full before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-[100%] before before:[clip-path:path('M148.896_62.1643H128.16L144.231_46.0969C140.574_37.3234_135.188_29.1036_128.046_21.9673C98.7488_-7.32243_51.2512_-7.32243_21.9544_21.9673C4.02587_39.8915_-2.91159_64.6274_1.10383_87.8357H21.8398L5.7686_103.903C9.4307_112.677_14.8116_120.896_21.9544_128.033C51.2512_157.322_98.7488_157.322_128.046_128.033C145.974_110.109_152.912_85.3727_148.896_62.1643Z')] before:bg-[#00BDFF]

                           after:content-[''] after:absolute after:border-4 after:border-white after:border-solid after:w-[90%] after:h-[90%] after:left-0 after:top-1/2 after:translate-x-[5%] after:-translate-y-1/2 after:rounded-[100%]">
                                <img class="flex items-center justify-center h-16 text-center transition scale-100 group-hover/escala:animate-pulse aspect-square"
                                    src="{{ asset('images/icons/informacion.svg') }}" alt="informacion">
                            </div>
                        </div>
                    </div>
                    <h2 class="mt-4 hover:animate-jump">Información <br>importante</h2>
                </a>
                <a href="{{ url('/visado-documentacion/mexico') }}" class="flex flex-col h-full text-center">
                    <div class="flex items-center justify-center h-40">
                        <div class="group/escala">
                            <div class="w-[150px] h-[150px] flex justify-center items-center relative rounded-full before:content-[''] before:absolute before:w-full before:h-full before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-[100%] before before:[clip-path:path('M148.896_62.1643H128.16L144.231_46.0969C140.574_37.3234_135.188_29.1036_128.046_21.9673C98.7488_-7.32243_51.2512_-7.32243_21.9544_21.9673C4.02587_39.8915_-2.91159_64.6274_1.10383_87.8357H21.8398L5.7686_103.903C9.4307_112.677_14.8116_120.896_21.9544_128.033C51.2512_157.322_98.7488_157.322_128.046_128.033C145.974_110.109_152.912_85.3727_148.896_62.1643Z')] before:bg-[#FF7300]

                           after:content-[''] after:absolute after:border-4 after:border-white after:border-solid after:w-[90%] after:h-[90%] after:left-0 after:top-1/2 after:translate-x-[5%] after:-translate-y-1/2 after:rounded-[100%]">
                                <img class="flex items-center justify-center h-16 text-center transition scale-100 group-hover/escala:animate-pulse aspect-square"
                                    src="{{ asset('images/icons/visado.svg') }}" alt="visado">
                            </div>
                        </div>
                    </div>
                    <h2 class="mt-4">Visado y <br>documentación</h2>
                </a>
                <a href="{{ url('/impuestos-extranjeros/mexico') }}" class="flex flex-col h-full text-center lg:items-start">
                    <div class="flex items-center justify-center h-40">
                        <div class="group/escala">
                            <div class="w-[150px] h-[150px] flex justify-center items-center relative rounded-full before:content-[''] before:absolute before:w-full before:h-full before:left-0 before:top-1/2 before:-translate-y-1/2 before:rounded-[100%] before before:[clip-path:path('M148.896_62.1643H128.16L144.231_46.0969C140.574_37.3234_135.188_29.1036_128.046_21.9673C98.7488_-7.32243_51.2512_-7.32243_21.9544_21.9673C4.02587_39.8915_-2.91159_64.6274_1.10383_87.8357H21.8398L5.7686_103.903C9.4307_112.677_14.8116_120.896_21.9544_128.033C51.2512_157.322_98.7488_157.322_128.046_128.033C145.974_110.109_152.912_85.3727_148.896_62.1643Z')] before:bg-[#FF008C]

                           after:content-[''] after:absolute after:border-4 after:border-white after:border-solid after:w-[90%] after:h-[90%] after:left-0 after:top-1/2 after:translate-x-[5%] after:-translate-y-1/2 after:rounded-[100%]">
                                <img class="flex items-center justify-center h-16 text-center transition scale-100 group-hover/escala:animate-pulse aspect-square"
                                    src="{{ asset('images/icons/impuestos.svg') }}" alt="impuestos">
                            </div>
                        </div>
                    </div>
                    <h2 class="mt-4">Impuestos</h2>
                </a>
            </div>
        </div>
        <div class="absolute left-0 right-0 bottom-0 max-w-[80%] lg:max-w-[1216px] bg-[#47108E] -z-10 h-[90%] lg:h-[55%] mx-auto rounded-t-[100px]">
        </div>
    </section>
    {{-- Comienza tu vida en --}}
    <section class="py-12 bg-white">
        <div id="conoce-mexico" class="max-w-screen-xl px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <p class="mb-6 text-xl font-black text-center text-[#3C137C] lg:text-3xl">
                Comienza tu nueva vida en México
            </p>
            <div class="grid gap-3 font-black text-white gap-y-6 lg:grid-cols-3">
                <a href="{{ url('/educacion/mexico') }}" class="flex flex-col overflow-hidden bg-white rounded drop-shadow-md">
                    <div class="h-64">
                        <img class="object-cover w-full h-full" src="{{ asset('images/comienza/educacion.jpg') }}"
                            alt="">
                    </div>
                    <p class="text-center py-3 text-2xl font-black text-white bg-[#47108E]">Educación</p>
                </a>
                <a href="{{ url('/mundo-laboral/mexico') }}" class="flex flex-col overflow-hidden bg-white rounded drop-shadow-md">
                    <div class="h-64">
                        <img class="object-cover w-full h-full" src="{{ asset('images/comienza/mundo-laboral.jpg') }}"
                            alt="vivir">
                    </div>
                    <p class="text-center py-3 text-2xl font-black text-white bg-[#47108E]">Mundo laboral</p>
                </a>
                <a href="{{ url('/health-care/mexico') }}" class="flex flex-col overflow-hidden bg-white rounded drop-shadow-md">
                    <div class="h-64">
                        <img class="object-cover w-full h-full" src="{{ asset('images/comienza/healt-care.jpg') }}"
                            alt="educacion">
                    </div>
                    <p class="text-center py-3 text-2xl font-black text-white bg-[#47108E]">Health Care</p>
                </a>
                {{-- --}}
                <a href="{{ url('/carnet-de-conducir/mexico') }}" class="flex flex-col overflow-hidden bg-white rounded drop-shadow-md">
                    <div class="h-64">
                        <img class="object-cover w-full h-full" src="{{ asset('images/comienza/carnet-de-conducir.jpg') }}"
                            alt="carnet-de-conducir">
                    </div>
                    <p class="text-center py-3 text-2xl font-black text-white bg-[#47108E]">Carnet de conducir</p>
                </a>
                <a href="{{ url('/mudanzas/mexico') }}" class="flex flex-col overflow-hidden bg-white rounded drop-shadow-md">
                    <div class="h-64">
                        <img class="object-cover w-full h-full" src="{{ asset('images/comienza/mudanza.jpg') }}"
                            alt="mudanza">
                    </div>
                    <p class="text-center py-3 text-2xl font-black text-white bg-[#47108E]">Mudanzas/Relocalizacion</p>
                </a>
                <a href="{{ url('/alojamiento/mexico') }}" class="flex flex-col overflow-hidden bg-white rounded drop-shadow-md">
                    <div class="h-64">
                        <img class="object-cover w-full h-full" src="{{ asset('images/comienza/alojamiento.jpg') }}"
                            alt="Alojamiento">
                    </div>
                    <p class="text-center py-3 text-2xl font-black text-white bg-[#47108E]">Alojamiento</p>
                </a>
            </div>
        </div>
    </section>
    {{-- SPOTLIGHT --}}
    <section class="bg-[#43ECB1]">
        <div id="disfruta" class="grid font-black text-lg text-white lg:grid-cols-[1.5fr_1fr_1fr] lg:h-[570px]">
            <div
                class="flex items-center flex-col justify-center bg-spotlight-pattern bg-[left_0%] lg:bg-[left_-24%] py-12 lg:py-0">
                <p class="text-2xl font-black lg:leading-tight lg:text-5xl">Entérate de la <br>diversión <br>en <span class="text-[#3C137C]">México</span></p>
            </div>
            <a href="{{ url('/turismo/mexico') }}"
                class="relative flex flex-col items-center justify-end isolate min-h-[300px]">
                <p
                    class="w-2/3 lg:w-1/3 flex justify-center py-2 rounded-t-md px-6 bg-[#25E59B] hover:bg-white transition hover:text-[#3C137C]">
                    Turismo</p>
                <img src="{{ asset('images/spotlight/turismo.jpg') }}" alt="Turismo"
                    class="absolute inset-0 object-cover w-full h-full -z-10">
            </a>
            <a href="{{ url('/entretenimiento/mexico') }}"
                class="relative flex flex-col items-center justify-end isolate min-h-[300px]">
                <p
                    class="w-2/3 lg:w-1/3 flex justify-center py-2 rounded-t-md px-6 bg-[#25E59B] hover:bg-white transition hover:text-[#3C137C]">
                    Entretenimiento</p>
                <img src="{{ asset('images/spotlight/entretenimiento.jpg') }}" alt="entretenimiento"
                    class="absolute inset-0 object-cover w-full h-full -z-10">
            </a>
        </div>
    </section>
     {{-- Conoce más--}}
     <section class="py-12 bg-white">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <p class="mb-6 text-xl font-black text-center text-[#3C137C] lg:text-3xl">Conoce más</p>
            <div class="grid justify-center gap-4 text-lg font-black text-white lg:grid-cols-3 lg:text-2xl">
                <a href="{{ url('/en-movimiento/mexico') }}" class="overflow-hidden rounded hover:shadow-md">
                    <img class="object-cover w-full h-64" src="{{ asset('images/conoce-mas/en-movimiento.jpg') }}" alt="movimiento">
                    <p class="text-center w-full py-2 lg:py-4 bg-[#3C137C]">En movimiento</p>
                </a>
                <a href="{{ url('/asesoria-juridica/mexico') }}" class="overflow-hidden rounded hover:shadow-md">
                    <img class="object-cover w-full h-64" src="{{ asset('images/conoce-mas/asesoria-juridica.jpg') }}" alt="Asesoria Jurídica">
                    <p class="text-center w-full py-2 lg:py-4 bg-[#3C137C]">Asesoria Jurídica</p>
                </a>
                <a href="{{ url('/telefonia-internet/mexico') }}" class="overflow-hidden rounded hover:shadow-md">
                    <img class="object-cover w-full h-64" src="{{ asset('images/conoce-mas/telefonia-internet.jpg') }}" alt="telefonia internet">
                    <p class="text-center w-full py-2 lg:py-4 bg-[#3C137C]">Telefonía/Internet</p>
                </a>
            </div>
        </div>
    </section>
    {{-- SPOTLIGHT 2 --}}
    <section class="bg-[#25E59B]">
        <div class="grid font-black text-lg text-white lg:grid-cols-[1.5fr_1fr_1fr] lg:h-[570px]">
            <div
                class="flex items-center flex-col justify-center bg-spotlight-pattern bg-[left_0%] lg:bg-[left_-24%] py-12 lg:py-0">
                <p class="text-2xl font-black lg:leading-tight lg:text-5xl">¿Cómo y dónde <br>realizar tus <br>tramites?</p>
            </div>
            <a href="{{ url('/bancos/mexico') }}"
                class="relative flex flex-col items-center justify-end isolate min-h-[300px]">
                <p class="w-2/3 lg:w-1/3 flex justify-center py-2 rounded-t-md px-6 bg-[#25E59B] hover:bg-white transition hover:text-[#3C137C]">
                    Bancos</p>
                <img src="{{ asset('images/spotlight/banco.jpg') }}" alt=""
                    class="absolute inset-0 object-cover w-full h-full -z-10">
            </a>
            <a href="{{ url('/transferencia-de-dinero/mexico') }}"
                class="relative flex flex-col items-center justify-end isolate min-h-[300px]">
                <p class="w-2/3 lg:w-1/3 flex justify-center py-2 rounded-t-md text-center px-6 bg-[#25E59B] hover:bg-white transition hover:text-[#3C137C] leading-4">
                    Transferencia <br>de dinero</p>
                <img src="{{ asset('images/spotlight/transferencia-de-dinero.jpg') }}" alt="transferencia de dinero"
                    class="absolute inset-0 object-cover w-full h-full -z-10">
            </a>
        </div>
    </section>
    {{-- Encontrá tu mejor servicio --}}
    <section class="py-12 bg-white">
        <div id="conoce-mexico" class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <p class="mb-6 text-xl font-black text-center text-[#3C137C] lg:text-3xl">
                Encontrá tu mejor servicio
            </p>
            <div class="grid gap-3 font-black text-white gap-y-6 lg:grid-cols-2">
                <a href="{{ url('/gastronomia-delivery/mexico') }}" class="flex flex-col overflow-hidden bg-white rounded drop-shadow-md">
                    <div class="h-64">
                        <img class="object-cover w-full h-full" src="{{ asset('images/servicios/gastronomia-delivery.jpg') }}"
                            alt="delivery">
                    </div>
                    <p class="text-center py-3 text-2xl font-black text-white bg-[#47108E]">Empresas que contratan</p>
                </a>
                <a href="{{ url('/servicio-domestico/mexico') }}" class="flex flex-col overflow-hidden bg-white rounded drop-shadow-md">
                    <div class="h-64">
                        <img class="object-cover w-full h-full" src="{{ asset('images/servicios/servicio-domestico.jpg') }}"
                            alt="niñeras Servicio Domestica">
                    </div>
                    <p class="text-center py-3 text-2xl font-black text-white bg-[#47108E]">Niñeras/Servicio Domestica</p>
                </a>
                {{-- --}}
                <a href="{{ url('/apoyo-psicologico/mexico') }}" class="flex flex-col overflow-hidden bg-white rounded drop-shadow-md">
                    <div class="h-64">
                        <img class="object-cover w-full h-full" src="{{ asset('images/servicios/apoyo-psicologico.jpg') }}"
                            alt="apoyo psicológico">
                    </div>
                    <p class="text-center py-3 text-2xl font-black text-white bg-[#47108E]">Apoyo Psicológico</p>
                </a>
                <a href="{{ url('/idiomas-intercambio/mexico') }}" class="flex flex-col overflow-hidden bg-white rounded drop-shadow-md">
                    <div class="h-64">
                        <img class="object-cover w-full h-full" src="{{ asset('images/servicios/idiomas.jpg') }}"
                            alt="idiomas">
                    </div>
                    <p class="text-center py-3 text-2xl font-black text-white bg-[#47108E]">Idiomas/Intercambio</p>
                </a>
            </div>
        </div>
    </section>
    {{-- SANTANDER --}}
    <section class="py-12 bg-white">
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

    <section class="pb-12 bg-white">
        <div x-data="{ imgModal : false, imgModalSrc : '' }"
            class="max-w-screen-xl px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <p class="text-[#3C137C] font-black text-xl lg:text-3xl text-center mb-6">Explora la galería de fotos de México</p>

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
    {{-- SUMARTE android/ios --}}
    {{-- <section class="bg-[#F9F9F9]">
        <div class="px-4 mx-auto my-auto sm:px-6 lg:px-8 grid lg:grid-cols-2 lg:h-[570px]  py-8 lg:py-0">
            <div
                class="flex flex-col justify-center text-4xl bg-spotlight-pattern bg-[left_-24%] w-full lg:w-3/4 mx-auto mb-6 lg:mb-0">
                <h2 class="text-[#3C137C] font-black mb-4">Súmate a la comunidad <br>de expatriados más grande.</h2>
                <p class="mb-6 text-lg">Descarga nuestra aplicación exclusiva para usuarios de <span
                        class="font-bold">Soy Expat</span> y conecta con más de 25.000 personas.<br> Úsala para
                    conseguir tu próximo empleo, hacer nuevas amistades y organizar salidas en grupo.</p>
                <div class="flex">
                    <a href="#" class="mr-3">
                        <img src="{{ asset('images/sumate/appstore.svg') }}" alt="">
                    </a>
                    <a href="#" class="">
                        <img src="{{ asset('images/sumate/googleplay.svg') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="relative min-h-[300px] ">
                <img src="{{ asset('images/sumate/sumate-mobile.jpg') }}" alt=""
                    class="absolute inset-0 object-cover w-full h-full">
            </div>
        </div>
    </section> --}}
</x-app-layout>
