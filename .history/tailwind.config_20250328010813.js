/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['index.html'],
  theme: {
    container : {
      center : true,
      padding : '8px',
    },
    extend: {
      colors : {
        primary : '#2563eb',
        dark : '#0f172a',
      },
    },
    screens : {
      '2xl' : '1700px',
    }
  },
  plugins: [],
}

