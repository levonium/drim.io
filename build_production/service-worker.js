'use strict'

const MAIN_CACHE_NAME = 'main-cache-v0.3'

const mainCacheFiles = [
  '/offline',
  '/assets/build/css/main.css',
  '/assets/build/js/main.js',
  '/assets/build/js/posts.js',
  '/assets/icons/drim-128.png',
  '/manifest.json'
]

self.addEventListener('install', (e) => {
  self.skipWaiting()

  e.waitUntil(
    caches.open(MAIN_CACHE_NAME).then(cache => cache.addAll(mainCacheFiles))
  )
})

self.addEventListener('activate', (e) => {
  e.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(cacheNames.map(cacheName => {
        if (cacheName.includes('main-cache') && cacheName !== MAIN_CACHE_NAME) {
          return caches.delete(cacheName)
        }
      }))
    })
  )

  self.clients.claim()
})

self.addEventListener('fetch', (e) => {
  e.respondWith(
    caches.match(e.request).then(cachedResponse => {
      if (cachedResponse) {
        return cachedResponse
      }

      return fetch(e.request)
        .then(fetchResponse => fetchResponse)
        .catch(err => {
          console.log(err)
          if (e.request.method === 'GET' &&
            e.request.headers.get('accept').includes('text/html')) {
            return caches.match('/offline')
          }
        })
    })
  )
})
