import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                mygold: {
                    DEFAULT: "#f7bf4f",
                    100: "#fef9ed",
                    200: "#fdf2dc",
                    300: "#fdecca",
                    400: "#fce5b9",
                    500: "#fbdfa7",
                    600: "#fad995",
                    700: "#f9d284",
                    800: "#f9cc72",
                    900: "#f7bf4f"   
                }
            }
        },
    },

    plugins: [forms],
};
