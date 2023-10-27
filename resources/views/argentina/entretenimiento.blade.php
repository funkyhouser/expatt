<x-app-layout>
    {{-- HERO --}}
    <section class="min-h-[350px] h-[400px] bg-no-repeat bg-entretenimiento bg-center bg-cover">
        <div class="flex flex-col justify-end h-full max-w-screen-lg px-4 pb-16 mx-auto my-auto sm:px-6 lg:px-8">
            <h1 class="text-4xl font-black text-white uppercase lg:text-7xl leading-[.9_!important]">
                Entretenimiento
            </h1>
        </div>
    </section>

    {{-- Articulo --}}
    <section class="py-12 bg-white">
        <div class="max-w-screen-lg px-4 mx-auto my-auto sm:px-6 lg:px-8">
            <article class="text-black">
                <p class="mb-4">
                    Argentina es famosa por su vida social y patrimonio cultural. Los espectáculos, el deporte, la vida nocturna, la música y la historia hacen del país un sitio interesante para recorrer, relacionarse con gente y conocer lugares increíbles.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Gastronomía</h3>
                <p class="mb-4">
                    Para los argentinos, la comida es motivo de reunión y celebración. En cada rincón del país, encontrarás exquisitos platos elaborados con productos de cada región.<br><br>

                    En la gastronomía argentina se destacan las empanadas tucumanas, el cordero patagónico, el pescado mesopotámico, el dulce de leche, el mate y el asado; estos últimos de consumo generalizado en todo el país.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Vida nocturna</h3>
                <p class="mb-4">
                    En Argentina es muy fácil hacer planes de noche. A diferencia de otros países de Latinoamérica, en la tierra de la bandera celeste y blanca la cena no se concreta antes de las 8.30 PM; por lo que los encuentros y las reuniones suelen comenzar a esa hora o aún más tarde.<br><br>

                    Hay opciones para todos los gustos: clubes, restaurantes, milongas donde bailar tango, bares, shows, cafés, y muchas más actividades que tienen sello porteño. Es que la Ciudad de Buenos Aires es cita obligada de los turistas y expat la hora de conocer la famosa noche porteña.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Patrimonio histórico y cultural</h3>
                <p class="mb-4">
                    Para los amantes de la historia, los museos son un gran plan ya que, además, son en su mayoría de entrada gratuita o a precios muy accesibles.<br><br>

                    El Museo de Arte Latinoamericano de Buenos Aires (MALBA) es uno de los más visitados, y fue declarado Sitio de Interés Cultural por parte de la Legislatura de la Ciudad Autónoma de Buenos Aires en 2007.<br><br>

                    Reúne piezas del siglo XX a la actualidad, y tiene por objetivo coleccionar, preservar, estudiar y difundir el arte latinoamericano.<br><br>

                    Ubicado en el barrio porteño de Recoleta, el Museo Nacional de Bellas Artes cuenta con una de las más grandes colecciones de arte en América del Sur y pinturas de reconocidos artistas internacionales como Rembrandt, Goya, Degas o Manet; y, también, artistas locales muy importantes que retratan las costumbres y las tradiciones del país y la vida en la ciudad en Argentina.<br><br>

                    En el Museo Histórico Nacional, ubicado en San Telmo, encontrarás piezas de arte y objetos importantes relacionados a los fundadores de Argentina y a los hitos más importantes de la historia nacional.<br><br>

                    La visita puede ir acompañada de una caminata por el barrio y su famoso mercado de productos regionales.
                </p>

                <h3 class="text-[#3C137C] font-bold text-2xl">Deporte</h3>
                <p class="mb-4">
                    En Argentina el deporte por excelencia es el fútbol. Su seleccionado es el último campeón de la Copa del Mundo Qatar 2022 y, a nivel local, los clubes River Plate y Boca Juniors convocan a millones de hinchas cada domingo.<br><br>

                    Por su gran historia futbolística, además, es cuna de grandes jugadores como lo fue Diego Armando Maradona y, en la actualidad, Lionel Messi.
                </p>

            </article>
            <div class="my-6 text-center">
                <a href="{{ route('argentina') }}"
                    class="mx-auto block w-full lg:w-max rounded-xl px-0 lg:px-4 py-3 shadow-lg bg-[#3C137C] font-bold text-xl text-white">
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
