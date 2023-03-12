module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
    './resources/js/components/**/*.vue',
  ],
  theme: {
    extend: {}
  },
  variants: {},
  plugins: [
    // require('@tailwindcss/ui'),
  ]
}
