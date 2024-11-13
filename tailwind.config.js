/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            sm: "340px",
            md: "540px",
            lg: "768px",
            xl: "1180px",
        },
        extend: {},
        keyframes: {
            move: {
                "50%": { transform: "translateY(-1rem)" },
            },
        },
        animation: {
            movingY: "move 2s linear infinite",
            rotating: "rotate 15s linear infinite",
            scalingUp: "scaleup 3s linear infinite",
        },
        rotate: {
            "0%": { transform: "rotate(0rem)" },
            "100%": { transform: "rotate(360rem)" },
        },
        scaleUp: {
            "0%": { transform: "scale(0.8)" },
            "50%": { transform: "scale(1.2)" },
            "100%": { transform: "scale(0.8)" },
        },
        fontFamily: {
            Poppins: ["Poppins", "sans-serif"],
        },
        container: {
            center: true,
            padding: {
                DEFAULT: "12px",
                md: "32px",
            },
        },
    },
    plugins: [],
};
