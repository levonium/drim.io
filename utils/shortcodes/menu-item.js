module.exports = {
  fn: (anchor, section) => {
    return `
    <li class="block border-b mb-1 pl-1">
      <a href="#" class="block no-underline text-body" @click.prevent="openSection('${section}')">
        ${anchor}
      </a>
    </li>`
  },
}
