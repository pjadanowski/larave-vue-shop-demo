const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
                body: ["'Open Sans', sans-serif"],
            },
            colors: {
                body: "#5A5A5A",
                heading: "#212121",
                input: "#1D1E1F",
                black: "#000",
                white: "#fff",
                linen: "#FBF1E9",
                linenSecondary: "#ECE7E3",
                olive: "#3D9970",
                maroon: "#B03060",
                brown: "#C7844B",
                placeholder: "#707070",
                borderBottom: "#f7f7f7",
                facebook: "#4267B2",
                facebookHover: "#395fad",
                google: "#4285F4",
                googleHover: "#307bf9",
                gray: {
                    50: "#FBFBFB",
                    100: "#F1F1F1",
                    150: "#F4F4F4",
                    200: "#F9F9F9",
                    300: "#E6E6E6",
                    350: "#E9ECEF",
                    400: "#999999",
                    500: "#D8D8D8",
                    600: "#3A3A3A",
                    700: "#292929",
                    800: "#707070",
                },
            },
            fontSize: {
                "10px": ".625rem",
            },
            screens: {
                sm: "480px",
                lg: "1025px",
                "2xl": "1500px",
                "3xl": "1780px",
            },
            spacing: {
                "430px": "430px",
                "450px": "450px",
                "500px": "500px",
                "64vh": "64vh",
            },
            minHeight: {
                "50px": "50px",
            },
            scale: {
                80: "0.8",
                85: "0.85",
                300: "3",
                400: "4",
            },
            animation: {
                shine: "shine 1s",
            },
            keyframes: {
                shine: {
                    "100%": { left: "125%" },
                },
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
