const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            // fontFamily: {
            //     sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            // },
        },
    },

    plugins: [require("daisyui")],

    daisyui: {
        themes: [
            {
                mytheme: {
                    "primary": "#010080",
                    "secondary": "#FFCC00",
                    "accent": "#5B5F62",
                    "neutral": "#000000",
                    "base-100": "#ffffff",
                  },   
            },
            'light'
        ],
      },
};
