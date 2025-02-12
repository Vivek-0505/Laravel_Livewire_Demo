import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                primarycolor: '#675DEF',
                titleblack: '#30313D',
                darkblack: '#353A44',
                lightgray: '#596171',
                draftbg: '#EBEEF1',
                paidbg: '#D3F2CD',
                paidtext: '#217005',
                outstandingbg: '#FAD5D5',
                outstandingtext: '#AD293B',
                bordercolor: '#d8dee4',
            },
        },
    },
    plugins: [],
};
