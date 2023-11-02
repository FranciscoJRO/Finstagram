/** @type {import('tailwindcss').Config} */
export default {
  content: [ //Colocamos lor archivos que queremos que tailwind analice
    "./resources/**/*.blade.php",
    "./resources/**/*.blade.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

