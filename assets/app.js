(() => {
  const DRIM = {}

  // Register the service worker.
  if ('serviceWorker' in navigator && 'PushManager' in window) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('/service-worker.js')
        .then(reg => console.log('[Service worker registered]', reg))
    })
  }

  // Connection status change.
  const Connection = {
    offline: () => {
      const offlineWrapper = document.createElement('div')
      offlineWrapper.id = 'offlineWrapper'
      offlineWrapper.classList.add('rect', 'offline')
      offlineWrapper.appendChild(document.createTextNode('No connection, you are offline ...'))
      document.body.prepend(offlineWrapper)
      document.querySelector('.wrapper').style.opacity = .5
    },
    online: () => {
      const offlineWrapper = document.getElementById('offlineWrapper')
      if (offlineWrapper) {
        offlineWrapper.parentElement.removeChild(offlineWrapper)
        document.querySelector('.wrapper').style.opacity = 1
      }
    }
  }
  navigator.onLine ? Connection.online() : Connection.offline()
  window.addEventListener('offline', () => Connection.offline())
  window.addEventListener('online', () => Connection.online())

  // Layout with Alpine.
  const Layout = () => {
    return {
      content: null,
      projectsFetched: false,
      close() { this.content = null },
      showProjects() {
        this.projectsFetched || this.fetchProjects()
        this.content = 'work'
      },
      fetchProjects() {
        fetch('/assets/projects/projects.json')
          .then(response => response.json())
          .then(projects => {
            Projects.renderAll(projects)
            this.projectsFetched = true
          })
      },
      showProjectPopup(url) {
        Projects.renderPopup(url)
      }
    }
  }

  const Projects = {
    renderSingle ({ name, title, type }) {
      return `<div class="project ${type}">
        <img src="/assets/projects/screenshots/${name}.jpg" alt="${name}-project">
        <a @click.prevent="showProjectPopup('https://${name}')" href="#">${title}</a>
      </div>`
    },
    renderAll (projects) {
      const projectsHtml = Array.from(projects).map(project => Projects.renderSingle(project)).join('')
      document.querySelector('.projects').innerHTML = projectsHtml
    },
    renderPopup (url) {
      Projects.removePopup()
      const popupWrapper = document.createElement('div')
      popupWrapper.classList.add('project-popup')

      const projectPopup = document.createElement('section')

      const iframeHeader = document.createElement('header')
      iframeHeader.classList.add('project-header')

      const urlIcon = document.createElement('a')
      urlIcon.classList.add('project-action', 'project-icon')
      urlIcon.innerHTML = '<svg viewBox="0 0 24 24"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" x2="21" y1="14" y2="3"/></svg>'
      urlIcon.href = url
      urlIcon.target = '_blank'
      urlIcon.rel = 'nofollow,noopener,noreferrer'
      iframeHeader.appendChild(urlIcon)

      const addressBar = document.createElement('a')
      addressBar.classList.add('project-action', 'project-url')
      addressBar.innerText = url
      addressBar.href = url
      addressBar.target = '_blank'
      addressBar.rel = 'nofollow,noopener,noreferrer'
      iframeHeader.appendChild(addressBar)

      const closePopupButton = document.createElement('a')
      closePopupButton.classList.add('project-action', 'project-close')
      closePopupButton.href = "#"
      closePopupButton.innerHTML = '<svg viewBox="0 0 100 100"><polygon fill="#010101" points="77.6,21.1 49.6,49.2 21.5,21.1 19.6,23 47.6,51.1 19.6,79.2 21.5,81.1 49.6,53 77.6,81.1 79.6,79.2   51.5,51.1 79.6,23 "/></svg>'
      closePopupButton.role = 'button'
      closePopupButton.setAttribute('aria-label', 'Close Project')
      closePopupButton.onclick = (e) => {
        e.preventDefault()
        Projects.removePopup()
      }
      iframeHeader.appendChild(closePopupButton)

      const iframe = document.createElement('iframe')
      iframe.src = url
      iframe.frameBorder = 0

      projectPopup.appendChild(iframeHeader)
      projectPopup.appendChild(iframe)
      popupWrapper.appendChild(projectPopup)
      document.body.appendChild(popupWrapper)
    },
    removePopup () {
      const popup = document.querySelector('.project-popup')
      if (popup) {
        document.body.removeChild(popup)
      }
    }
  }

  document.addEventListener('keydown', (e) => {
    if (e.keyCode === 27) {
      Projects.removePopup()
    }
  })

  DRIM.layout = () => Layout()
  window.DRIM = DRIM
})()
