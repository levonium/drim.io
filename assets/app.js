// REGISTER SERVICE WORKERS
if ('serviceWorker' in navigator && 'PushManager' in window) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('/service-worker.js')
      .then(reg => console.log('[Service worker registered]', reg))
  })
}

(() => {
  const page = document.querySelector('.page')
  document.addEventListener('mousemove', e => {
    if (e.clientX <= window.innerWidth / 2) {
      page.classList.remove('gradient--reverse')
    } else {
      page.classList.add('gradient--reverse')
    }
  })
})()
