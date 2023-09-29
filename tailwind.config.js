import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                clamp: "clamp(1rem, 20vw, 10.625rem)",
            },
            backgroundImage: {
                'hero-pattern': "url('/public/images/hero-pattern.svg')",

                'banner-argentina': "url('/public/images/argentina/banner-argentina.jpg')",

                'visado-documentacion': "url('/public/images/banners/visado.jpg')",
                'informacion': "url('/public/images/banners/informacion.jpg')",
                'impuestos': "url('/public/images/banners/impuestos.jpg')",
                'educacion': "url('/public/images/banners/educacion.jpg')",
                'mundo-laboral': "url('/public/images/banners/mundo-laboral.jpg')",
                'healt-care': "url('/public/images/banners/healt-care.jpg')",
                'carnet-conducir': "url('/public/images/banners/carnet-conducir.jpg')",
                'movimiento': "url('/public/images/banners/movimiento.jpg')",
                'entretenimiento': "url('/public/images/banners/entretenimiento.jpg')",
                'turismo': "url('/public/images/banners/turismo.jpg')",

                'spotlight-pattern': "url('/public/images/spotlight/spotlight-pattern.svg')",
                'santander-pattern': "url('/public/images/santander/bg-santander.svg')",

                'alojamiento': "url('/public/images/banners/alojamiento.jpg')",
                'apoyo': "url('/public/images/banners/apoyo-psicologico.jpg')",
                'juridica': "url('/public/images/banners/asesoria-juridica.jpg')",
                'bancos': "url('/public/images/banners/bancos.jpg')",
                'gastronomia': "url('/public/images/banners/gastronomia.jpg')",
                'idiomas': "url('/public/images/banners/idiomas-intercambio.jpg')",
                'mudanzas': "url('/public/images/banners/mudanzas.jpg')",
                'domestico': "url('/public/images/banners/servicio-domestico.jpg')",
                'internet': "url('/public/images/banners/telefonia-internet.jpg')",
                'transferencia': "url('/public/images/banners/transferencia-de-dinero.jpg')",
            }
        },
    },

    plugins: [forms, typography],
};
