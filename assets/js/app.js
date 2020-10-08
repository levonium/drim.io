const DRIM = {}

const Projects = {
  fetch: async () => {
    const response = await window.fetch('assets/projects/_list.json')
    const json = await response.json()
    return json
  },
  render: async () => {
    const projects = await Projects.fetch()
    const html = Array.from(projects).map(project => Projects.renderSingle(project))
    document.getElementById('projects-wrapper').innerHTML = html.join('')
  },
  renderSingle: ({ name, title, ext }) => {
    return `
      <a href="https://${name}" target="_blank" rel="noopener noreferrer"
        class="relative flex items-center justify-center pb-4 overflow-hidden"
        data-name="${title}">
        <img src="assets/projects/${name}.${ext}" class="block shadow"
          alt="${title} Project - ${name}" title="${title} - ${name}">
      </a>`;
  }
}

const Tech = {
  icons: [
    { name: 'php', url: 'https://php.net' },
    { name: 'laravel', url: 'https://laravel.com' },
    { name: 'wordpress', url: 'https://wordpress.org' },
    { name: 'woocommerce', url: 'https://woocommerce.com' },
    { name: 'mysql', url: 'https://mysql.com' },
    { name: 'node-js',url: 'https://nodejs.org' },
    { name: 'javascript', url: 'https://en.wikipedia.org/wiki/JavaScript' },
    { name: 'vue-js', url: 'https://vuejs.org' },
    { name: 'typescript', url: 'https://typescriptlang.org' },
    { name: 'tailwind-css', url: 'https://tailwindcss.com' },
    { name: 'sass', url: 'https://sass-lang.com' },
    { name: 'python', url: 'https://python.org' },
  ],
  fetch: async () => {
    const fetchSingleIcon = name => fetch(`assets/tech/${name}.svg`)
    return await Promise.all(
      Tech.icons.map(async({ name, url }) => {
        const res = await fetchSingleIcon(name)
        const icon = await res.text()
        return { name, icon, url }
      })
    )
  },
  render: async () => {
    const icons = await Tech.fetch()
    const html = icons.map(icon => Tech.renderSingle(icon))
    document.getElementById('tech-wrapper').innerHTML = html.join('')
  },
  renderSingle: ({ name, icon, url }) => {
    return `
      <a href="${url}" target="_blank" rel="noopener noreferrer"
        class="relative flex items-center justify-center pb-4 overflow-hidden"
        data-name="${name.replace("-", " ")}">
        ${icon}
      </a>`;
  }
}

const Layout = () => ({
  lang: 'en',
  init() {
    this.lang = this.getLang()
    this.translate()
    this.setYear()
    Projects.render()
    Tech.render()
  },
  getLang() {
    const lang = navigator.language || navigator.userLanguage
    return lang && lang.startsWith('es') ? 'es' : 'en'
  },
  translate() {
    const lang = this.lang === 'en' ? 'es' : 'en'
    this.$refs.site.querySelectorAll(`[lang="${lang}"]`).forEach(el => { el.style.display = 'none' })
    this.$refs.site.querySelectorAll(`[lang="${this.lang}"]`).forEach(el => { el.style.display = 'block' })
    this.lang = lang
  },
  setYear() {
    const year = (new Date()).getFullYear()
    document.getElementById('current-year').innerText = year
  },
  scroll(to) {
    const section = document.getElementById(to)
    if (!section) return
    section.scrollIntoView({ behavior: 'smooth' })
    const anchor = section.querySelector('.anchor')
    anchor && anchor.focus()
  }
})

document.addEventListener('scroll', () => {
  document.getElementById('header')
    .classList[window.scrollY >= 64 ? 'add' : 'remove']('bg-gray-900')
})
