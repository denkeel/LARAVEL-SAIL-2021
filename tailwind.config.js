module.exports = {
  purge: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    boxShadow: {
      sm: '0 2px 6px 0 rgba(0, 0, 0, 0.14)',
      DEFAULT: '0 0px 15px 0px rgba(0, 0, 0, 0.14)',
      md: '0 4px 15px 0px rgba(0, 0, 0, 0.14)',
      lg: '0 6px 17px 0px rgba(0, 0, 0, 0.17)',
      xl: '0 7px 18px 0px rgba(0, 0, 0, 0.15)',
      '2xl': '0 8px 19px 0px rgba(0, 0, 0, 0.15)',
      '3xl': '0 9px 20px 0px rgba(0, 0, 0, 0.15)',

      inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
      none: 'none',
    }
  },
  variants: {
    extend: {
      backgroundColor: ['active'],
    },
  },
  plugins: [],
}
