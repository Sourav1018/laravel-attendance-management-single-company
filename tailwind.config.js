/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
        zIndex: {
            '999' : '999'
        },
        width: {
            '300' : '300px'
        },
        padding: {
            '17' : '72px'
        }
    },
  },
  plugins: [],
}

