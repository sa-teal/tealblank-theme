module.exports = {
  content: [
    "./*.php",
    "./inc/**/*.php",
    "./template-parts/**/*.php",
    "./blocks/**/*.php",
    "./patterns/**/*.php",
    "./src/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['"Work Sans"', 'sans-serif']
      }
    }
  },
  plugins: [],
  safelist: [
    'text-sm',
    'text-base',
    'text-lg',
    'text-xl',
    'text-2xl',
    'text-3xl',
  ],
}
