const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
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
            colors: {
                "verses-blue": "#223462",
                "verses-blue-h": "#22579E",
                "verses-yellow": "#FFB92C",
                "verses-yellow-h": "#FFD570",
                "verses-blue-c": "#0593FE",
                "verses-blue-c-h": "#21B4FE",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
