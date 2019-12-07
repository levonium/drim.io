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
})()
