module.exports = {
  fn: (section, i18n) => {
    return `
      <h2 class="mb-4 text-xl text-white bg-${section} font-bold uppercase transform -rotate-1 py-1 -skew-x-12 scale-90"
        style="text-shadow: 0 2px #1a202c;"
        data-en="${i18n.en}" data-es="${i18n.es}">
        ${i18n.en}
    </h2>`
  },
}
