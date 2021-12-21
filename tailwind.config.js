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
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
    require('@tailwindcss/forms'),
  ]
}
