import hljs from 'highlight.js/lib/core'

hljs.registerLanguage('bash', require('highlight.js/lib/languages/bash'))
hljs.registerLanguage('php', require('highlight.js/lib/languages/php'))
hljs.registerLanguage('html', require('highlight.js/lib/languages/xml'))
hljs.registerLanguage('css', require('highlight.js/lib/languages/css'))

document.querySelectorAll('pre code').forEach((block) => {
  hljs.highlightBlock(block)

  const className = block.className // => `language-LANG hljs`
  block.setAttribute('data-lang', className.substring(9, className.indexOf(' ')))
})

function handlePostsCaching () {
  if (!('serviceWorker' in navigator) || !('caches' in window)) {
    return
  }

  const cachePostButton = document.getElementById('cache')
  if (!cachePostButton) {
    return
  }

  const CACHE_NAME = 'posts-cache'
  const postPath = window.location.pathname

  const isPostInCache = async () => {
    const cache = await caches.open(CACHE_NAME)
    const match = await cache.match(postPath)
    return !!match
  }

  const savePostToCache = async () => {
    const cache = await caches.open(CACHE_NAME)
    return await cache.add(postPath)
  }

  const removePostFromCache = async () => {
    const cache = await caches.open(CACHE_NAME)
    return await cache.delete(postPath)
  }

  const updateButton = isCached => {
    cachePostButton.classList[isCached ? 'add' : 'remove']('cached')
    cachePostButton.setAttribute('title', isCached ? 'Remove post from local cache' : 'Add post to local cache to read offline')
  }

  cachePostButton.removeAttribute('hidden')

  isPostInCache().then(updateButton)

  cachePostButton.addEventListener('click', (e) => {
    e.preventDefault()
    isPostInCache().then(isCached => {
      if (isCached) removePostFromCache().then(() => updateButton(false))
      else savePostToCache().then(() => updateButton(true))
    })
  })
}

handlePostsCaching()
