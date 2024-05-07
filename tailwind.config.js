/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      spacing:{
        '250px': '250px',
        '450px': '450px',
      }
    },
  },
  plugins: [],
}

