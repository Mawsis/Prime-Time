/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    fontFamily:{
      "mont" : "Montserrat",
      "play" : "Playfair Display"
    },
    colors:{
      "gold":"#D89F00",
      "white":"#FFFFFF",
      "yellow":"#FFC107",
      "black":"#000000",
      "gray":"#363636"
    },
    backgroundImage: {
      'home-bg': "url('/img/home-bg.jpg')",
    },
    extend: {},
  },
  plugins: [],
}

