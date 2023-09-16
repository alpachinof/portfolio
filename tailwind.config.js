/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                background: "#18181B",
                primary: "#0080F5",
                secondary: "#1f1f24",
            },
            fontFamily: {
                sans: ["Inter", "sans-serif"],
            },
        },
    },
    plugins: [],
};
