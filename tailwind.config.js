import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import daisyui from "daisyui";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },

        mytheme: {
            primary: "#d600fd",

            "primary-content": "#100016",

            secondary: "#00b0db",

            "secondary-content": "#000b11",

            accent: "#0073ff",

            "accent-content": "#000516",

            neutral: "#0a0c08",

            "neutral-content": "#c7c7c6",

            "base-100": "#faf7ff",

            "base-200": "#d9d7de",

            "base-300": "#bab7be",

            "base-content": "#151516",

            info: "#00ccff",

            "info-content": "#000f16",

            success: "#53cf00",

            "success-content": "#021000",

            warning: "#ff3300",

            "warning-content": "#160100",

            error: "#cb0f44",

            "error-content": "#fbd6d7",
        },
    },

    plugins: [forms, daisyui, require("tailgrids/plugin")],

    daisyui: {
        themes: ["dark", "light", "mytheme", "cupcake"],
        darkTheme: "dark",
        base: true,
        styled: true,
        utils: true,
        prefix: "",
        logs: true,
        themeRoot: ":root",
    },
};
