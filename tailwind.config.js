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
                'spotlight-pattern': "url('/public/images/spotlight/spotlight-pattern.svg')",
                'santander-pattern': "url('/public/images/santander/bg-santander.svg')",
                'desarrola-futuro': "url('/public/images/desarrolla-tu-futuro/bg.jpg')",
                'renta': "url('/public/images/banners/banner-compra.jpg')",
                'compra': "url('/public/images/banners/banner-renta.jpg')",
                'salud': "url('/public/images/banners/banner-salud.jpg')",
                'visado-documentacion': "url('/public/images/banners/banner-visado-documentacion.jpg')",
                'impuestos': "url('/public/images/banners/impuestos-para-extranjeros.jpg')",
                'mudarse': "url('/public/images/banners/mudarse-a-argentina.jpg')",
                'vivir': "url('/public/images/banners/vivir-en-argentina.jpg')",
                'educacion': "url('/public/images/banners/educacion.jpg')",
                'trabajar': "url('/public/images/banners/trabajar-en-argentina.jpg')",
                'finanzas': "url('/public/images/banners/finanzas-y-economia.jpg')",
            }
        },
    },

    plugins: [forms, typography],
};
