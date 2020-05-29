(() => {
  // Register the service worker.
  if ('serviceWorker' in navigator && 'PushManager' in window) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('/service-worker.js')
        .then(reg => console.log('[🦅] Service worker registered', reg))
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
    },
    online: () => {
      const offlineWrapper = document.getElementById('offlineWrapper')
      if (offlineWrapper) {
        offlineWrapper.parentElement.removeChild(offlineWrapper)
      }
    }
  }
  navigator.onLine ? Connection.online() : Connection.offline()
  window.addEventListener('offline', () => Connection.offline())
  window.addEventListener('online', () => Connection.online())

  // change light/dark themes
  document.addEventListener('dblclick', () => {
    const styles = getComputedStyle(document.documentElement)
    const primary = styles.getPropertyValue('--color__primary')
    const white = styles.getPropertyValue('--color__white')
    const postsFg = styles.getPropertyValue('--color__posts_fg')
    const postsGb = styles.getPropertyValue('--color__posts_bg')
    const link = styles.getPropertyValue('--color__link')

    document.documentElement.style.setProperty('--color__primary', primary === '#8a4040' ? '#542727' : '#8a4040')
    document.documentElement.style.setProperty('--color__white', white === '#fff' ? '#ddc9c9' : '#fff')
    document.documentElement.style.setProperty('--color__link', link === '#3d2222' ? '#b39797' : '#3d2222')
    document.documentElement.style.setProperty('--color__posts_fg', postsFg === '#1A202C' ? '#ddc9c9' : '#1A202C')
    document.documentElement.style.setProperty('--color__posts_bg', postsGb === '#f2f2f2' ? '#293242' : '#f2f2f2')
  })
})()
