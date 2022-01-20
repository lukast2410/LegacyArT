const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        emerald: colors.emerald,
        slate: colors.slate,
        'black-trans': '#2e2e2e45',
        'black-trans-60': '#2e2e2e60',
        'white-trans': '#91919140',
      },
      fontSize: {
        '4.5xl': '2.5rem',
        '4.75xl': '2.75rem',
      },
      width: {
        '104' : '26rem',
        '3/10' : '30%',
      },
      minWidth: {
        '96' : '24rem',
        '104' : '26rem',
      },
      height: {
        '18' : '4.5rem',
      },
      maxHeight: {
        'screen-60': '60vh',
        'screen-75': '75vh',
      },
      minHeight: {
        'full-without-nav': 'calc(100vh - 4.5rem)',
        '3/5': '60%'
      },
      gridTemplateColumns: {
        '2fr': 'repeat(2, 1fr)'
      },
    }
  },
  variants: {},
  plugins: [
    // require('@tailwindcss/ui'),
    // require('@tailwindcss/forms'),
  ]
}
