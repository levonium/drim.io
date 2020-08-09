module.exports = {
  theme: {
    extend: {
      rotate: {
        '-1': '-1deg',
        '-2': '-2deg',
      },
    },
    fill: () => ({
      none: 'none',
    }),
  },
  variants: {},
  plugins: [],
  purge:
    process.env.NODE_ENV === 'production'
      ? {
          enabled: true,
          content: ['src/**/*.njk', 'src/**/*.js', 'utils/**/*.js'],
        }
      : {},
}
