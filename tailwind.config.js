/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {},
      container: {
        center: true,
        padding: '2rem'
      },
      safelist: [
        'text-red-500',
        'text-green-500',
      ],
      fontFamily: {
        english: ["Kode mono", "monospace"]
      },
      screens: {
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
      }
    },
    plugins: [],
  }
