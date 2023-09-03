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
                exo: ['Exo', 'sans-serif'],
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                'dgreen': '#029642',
                'lgreen': '#D8F3DC',
                'nblue': '#222D5D',
                'dorange': '#FB6107',
                'violet': '#BE80B5',
                'venetian': '#CC1512',
                'thistle': '#DAC0D6',
                'dutchWhite': '#F3D6C0',
                'tumbleweed': '#E0AA80',
                'newYorkPink': '#DB7B82',
                'platinum': '#EAE4E9',
                'oldLace': '#FFF1E6',
                'mistyRose': '#FDE2E4',
                'paleChestnut': '#E3AEB2',
                'candyPink': '#D66D74',
                'cadetBlue': '#ADB5BD',

                // uni color
                'uorange': '#ED6326',
                'uyellow': '#FBA91E',
                'ugreen': '#ABD03B',
                'ublue': '#41A0D8',
                'uviolet': '#8253A0',
                'usweet': '#F16768',
                'udark': '#1B1A48',
                'ugray': '#5F5F7F',
                'ulorange': '#FFF7ED',
            },
            aspectRatio: {
                '4/3': '4 / 3',
            },
        },
    },

    plugins: [forms],
};
