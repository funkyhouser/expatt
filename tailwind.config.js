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
            }

        },
    },

    plugins: [forms, typography],
};
