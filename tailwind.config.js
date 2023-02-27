module.exports = {
  content: ['./components/**/*.{html,js,php}',
  './pages/**/*.{html,js,php}',
  './index.html',],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        bg: '#171717',
        bg2: '#0f0f0f',
        sc: '#444444',
        sc2: '#292929',
        tr: '#DA0037',
        tx: '#EDEDED',
        tx2: '#cccccc',
      },
      screens: {
        '2xl': '1320px',
      },
    },
  },
  plugins: [],
};
