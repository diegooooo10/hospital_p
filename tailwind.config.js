/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './src/front/**/*.{html,js,php}',  
    './src/back/**/*.{html,js,php}',  
    './src/bd/**/*.{html,js,php}',     
    ],
  theme: {
    extend: {
        height: {
        'vh-50': '50vh',
        'vh-80': '80vh',
        'vh-70': '70vh',
  
      },
    },
  },
  plugins: [
  ],
}

