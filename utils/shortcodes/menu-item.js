module.exports = {
  fn: (section, i18n) => {
    return `
    <li class="block border-b mb-1 pl-1">
      <a href="#" class="block no-underline text-body"
        @click.prevent="openSection('${section}')"
        data-en="${i18n.en}" data-es="${i18n.es}">
        ${i18n.en}
      </a>
    </li>`
  },
}
