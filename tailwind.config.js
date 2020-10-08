module.exports = {
  future: {
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true,
  },
  purge: {
    enabled: true,
    preserveHtmlElements: false,
    content: [
      "./**/*.njk",
      "./.eleventy.js",
      "./_includes/*.svg",
      "./assets/js/app.js",
    ],
  },
  theme: {
    extend: {
      fontFamily: {
        main: "'IBM Plex Sans', sans-serif",
      },
      opacity: {
        1: "0.01",
      },
    },
  },
  variants: {},
  plugins: [],
};
