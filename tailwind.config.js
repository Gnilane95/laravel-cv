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
        sans: ["Nunito", ...defaultTheme.fontFamily.sans],
      },
      container: {
        center: true,
        padding: {
          DEFAULT: "1.5rem",
          xs: "1.5rem",
          sm: "2rem",
          lg: "4rem",
          xl: "7rem",
          "2xl": "12rem",
        },
      },
      borderRadius: {
        xl: "30px",
        xxl: "50px",
      },
      spacing: {
        30: "30px",
        50: "50px",
        60: "60px",
        70: "70px",
        80: "80px",
        90: "90px",
        100: "100px",
        110: "110px",
        120: "120px",
        130: "130px",
      },
    },
  },

  plugins: [require("@tailwindcss/forms")],
};
