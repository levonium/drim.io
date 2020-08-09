import 'alpinejs'

const DRIM = {
  isPopupOpen: false
}

const Projects = {
  fetch: async () => {
    const response = await window.fetch('static/projects.json')
    const json = await response.json()
    return json
  },
  render: async () => {
    const projects = await Projects.fetch()
    const projectsHtml = Array.from(projects)
      .map(project => Projects.renderSingle(project))
      .join('')
    document.getElementById('projects').innerHTML = projectsHtml
  },
  renderSingle({ name, title, ext }) {
    return `<div class="project">
      <a @click.prevent="showProjectPopup('https://${name}')" href="#" class="focus:shadow-none">
        <img src="static/img/projects/${name}.${ext}" alt="${title} Project - ${name}" class="border border-gray-400 rounded shadow-lg">
      </a>
    </div>`
  },
  renderPopup(url) {
    Projects.removePopup()

    const popupData = {
      wrapper: document.getElementById('projects').parentElement,
      urlIcon: '<svg viewBox="0 0 24 24" class="w-4 h-4 fill-none stroke-current" style="stroke-width: 2px;"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" x2="21" y1="14" y2="3"/></svg>',
      closeIcon: '<svg viewBox="0 0 100 100" class="w-4 h-4 fill-none stroke-current" style="stroke-width: 6px;"><polygon points="77.6,21.1 49.6,49.2 21.5,21.1 19.6,23 47.6,51.1 19.6,79.2 21.5,81.1 49.6,53 77.6,81.1 79.6,79.2   51.5,51.1 79.6,23 "/></svg>',
      makeSection: (href, anchor, atts = []) => {
        const tag = document.createElement('a')
        tag.classList.add('flex', 'items-center', 'py-1', 'px-2', 'text-center', 'text-sm', 'font-light', 'rounded', 'shadow', 'no-underline', 'border')
        tag.href = href
        tag.innerHTML = anchor
        if (atts.length) atts.forEach(attr => tag.setAttribute(attr.attribute, attr.value))
        return tag
      }
    }

    const urlIcon = popupData.makeSection(url, popupData.urlIcon, [
      { attribute: 'target', value: '_blank' },
      { attribute: 'rel', value: 'nofollow noopener noreferrer' },
      { attribute: 'aria-label', value: 'Open Project URL in a new tab' },
    ])
    const addressBar = popupData.makeSection(url, url, [
      { attribute: 'target', value: '_blank' },
      { attribute: 'rel', value: 'nofollow noopener noreferrer' },
    ])
    const closePopupButton = popupData.makeSection('#', popupData.closeIcon, [
      { attribute: 'role', value: 'button' },
      { attribute: 'aria-label', value: 'Close Project Popup' },
      { attribute: 'x-on:click.prevent', value: 'closeWhateverIsOpen()' },
    ])

    const iframeHeader = document.createElement('header')
    iframeHeader.classList.add('flex', 'justify-between', 'p-2', 'gradient__main')
    iframeHeader.appendChild(urlIcon)
    iframeHeader.appendChild(addressBar)
    iframeHeader.appendChild(closePopupButton)

    const iframe = document.createElement('iframe')
    iframe.src = url
    iframe.frameBorder = 0
    iframe.style.height = '100%'
    iframe.style.width = '100%'

    const projectPopup = document.createElement('section')
    projectPopup.classList.add('project-popup', 'absolute', 'inset-0', 'mt-2', 'bg-gray-300', 'border-t', 'z-10')
    projectPopup.appendChild(iframeHeader)
    projectPopup.appendChild(iframe)

    popupData.wrapper.appendChild(projectPopup)
    DRIM.isPopupOpen = true
  },
  removePopup() {
    const popup = document.querySelector('.project-popup')
    popup && popup.parentElement.removeChild(popup)
    DRIM.isPopupOpen = false
  }
}

const Layout = () => ({
  mode: '',
  menu: null,
  section: null,
  activeSection: null,
  settings: null,
  projectsFetched: false,
  init() {
    this.mode = window.matchMedia('(prefers-color-scheme: light)').matches ? 'light-mode' : 'dark-mode'
  },
  switchMode() {
    this.mode = this.mode === 'light-mode' ? 'dark-mode' : 'light-mode'
  },
  fetch(section) {
    if (section !== 'projects') return

    Projects.render()
    this.projectsFetched = true
  },
  openSection(section) {
    if (section === 'projects' && !this.projectsFetched) {
      this.fetch(section)
    }

    this.menu = null
    this.settings = null
    this.section = section
    this.activeSection = section
    this.$refs.header.querySelector('.button--close-section').focus()
    this.removeTabindex()
  },
  toggleSettings() {
    this.settings !== null ? this.settings = null : this.settings = 'settings'
    this.menu = null
  },
  toggleMenu() {
    this.menu !== null ? this.menu = null : this.menu = 'menu'
    this.settings = null
  },
  showProjectPopup(url) {
    Projects.renderPopup(url)
  },
  closeWhateverIsOpen() {
    if (DRIM.isPopupOpen) {
      Projects.removePopup()
    } else if (this.menu !== null) {
      this.menu = null
    } else if (this.settings !== null) {
      this.settings = null
      this.$refs.header.querySelector('.button--toggle-settings').focus()
    } else if (this.section !== null) {
      this.section = null
      if (this.$refs[`${this.activeSection}_link`]) {
        this.$refs[`${this.activeSection}_link`].focus()
      }
    }
    this.setTabindex()
  },
  removeTabindex() {
    this.$refs.page
      .querySelectorAll('[role="button"]', 'button', '[tabindex="0"]')
      .forEach((el) => el.setAttribute('tabindex', -1))
  },
  setTabindex() {
    this.$refs.page
      .querySelectorAll('[role="button"]', 'button', '[tabindex="-1"]')
      .forEach((el) => el.setAttribute('tabindex', 0))
  },
})

DRIM.layout = () => Layout()
window.DRIM = DRIM

DRIM.orientationChange = (angle) => {
  const wrapper = document.getElementById('oops')
  angle !== 0
    ? wrapper.classList.remove('opacity-0', 'translate-x-full')
    : wrapper.classList.add('opacity-0', 'translate-x-full')
}
window.addEventListener('load', () => DRIM.orientationChange(window.screen.orientation.angle))
window.addEventListener('orientationchange', (e) => DRIM.orientationChange(window.screen.orientation.angle))
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
  document.body.classList.toggle('light-mode')
  document.body.classList.toggle('dark-mode')
})
