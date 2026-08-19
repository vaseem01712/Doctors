
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./vendor/filament/**/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          50:'#eef6ff',100:'#d9ecff',200:'#b7dcff',300:'#84c4ff',400:'#4aa5ff',
          500:'#1f83fb',600:'#0f63e0',700:'#0c4fb5',800:'#0e4291',900:'#0a2e66',950:'#071c40'
        },
        accent:{50:'#effcfc',100:'#d8f7f7',200:'#b6eeee',300:'#78dfdf',400:'#2dd4d9',500:'#14b8bd',600:'#0e8c91'},
        navy:{900:'#0b1f3a',800:'#122a4d'}
      },
      fontFamily:{sans:['"Plus Jakarta Sans"','ui-sans-serif','system-ui']},
      boxShadow:{
        soft:'0 20px 70px -35px rgba(7,28,64,.28)',
        premium:'0 28px 90px -42px rgba(7,28,64,.34)'
      },
      borderRadius:{'4xl':'2rem'}
    }
  },
  plugins:[]
}
