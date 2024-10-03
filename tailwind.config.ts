import { Config } from "tailwindcss";

const tailwindConfig: Config = {
    darkMode: "class",
    prefix: "tw-",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};

export default tailwindConfig;
