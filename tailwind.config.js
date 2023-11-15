/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors:{
      "gold":"#D89F00",
      "white":"#FFFFFF",
      "yellow":"#FFC107",
      "black":"#000000"
    },
    backgroundImage: {
      'home-bg': "url('/img/home-bg.jpg')",
    },
    extend: {},
  },
  plugins: [],
}

