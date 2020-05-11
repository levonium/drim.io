(() => {
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

  // change light/dark themes
  document.addEventListener('dblclick', () => {
    const styles = getComputedStyle(document.documentElement)
    const primary = styles.getPropertyValue('--color__primary')
    const white = styles.getPropertyValue('--color__white')

    document.documentElement.style.setProperty('--color__primary', primary === '#8a4040' ? '#542727' : '#8a4040');
    document.documentElement.style.setProperty('--color__white', white === '#fff' ? '#ddc9c9' : '#fff');
  })
})()
