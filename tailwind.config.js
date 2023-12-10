import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                atas: "#845EC2",
                tengah: "#0081CF",
                bawah: "#0089BA",
                main: "#008b9e",
                lembut: "#ff6f91",
                isi: "#ffc75f",
                tutup: "#1c6f9c",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
