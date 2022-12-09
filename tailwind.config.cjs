// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    extend: {
      backgroundImage: {
        'radial-bottom-post': 'radial-gradient(circle,#86c7f0 50%,#4e86b1 100%)', 
        'header_hero': 'url("images/hero_bg.png")', 
        'recurso-header': 'url("images/recursos/bg_hero.png")', 
      },
      colors: {
        'primary': '#349AD5',
        'secondary': '#161848', 
        'info': '#349AD5',
        'dark': '#323848',
        'cyan': '#7BC5D0',
        'light': '#f1f1f1',
        'blue': '#597BF7',
        'verde': '#081f2d',
        'gris': {
          100: '#EFEFEF'
        }, 
      }, // Extend Tailwind's default colors
    },
    container: {
      center: true,
    }, 
 
    //   // screens: {
    //   //   sm: '600px',
    //   //   md: '728px',
    //   //   lg: '984px',
    //   //   xl: '1240px',
    //   //   '2xl': '1496px',
    //   // },
    //   // margin: {
    //   //   DEFAULT: '1rem',
    //   //   sm: '2rem',
    //   //   lg: '4rem',
    //   //   xl: '5rem',
    //   //   '2xl': '6rem',
    //   // },
    // },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
};
