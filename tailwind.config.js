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
                accent: "28282F",
            },
            fontFamily: {
                sans: ["Inter", "sans-serif"],
            },
            animation: {
                "spin-slow": "spin 5s linear infinite",
                "infinite-scroll": "infinite-scroll 40s linear infinite",
                "reverse-infinite-scroll":
                    "reverse-infinite-scroll 40s linear infinite",
            },
            keyframes: {
                "infinite-scroll": {
                    from: { transform: "translateX(0)" },
                    to: { transform: "translateX(-100%)" },
                },
                "reverse-infinite-scroll": {
                    from: { transform: "translateX(-100%)" },
                    to: { transform: "translateX(0)" },
                },
            },
        },
    },
    plugins: [],
};
