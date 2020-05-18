'use strict'

const CACHE_NAME = 'site-cache-v0.1'

self.addEventListener('install', (e) => {
  self.skipWaiting()
})

self.addEventListener('activate', (e) => {
  e.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (cacheName !== CACHE_NAME) {
            return caches.delete(cacheName)
          }
        }))
    })
  )
  self.clients.claim()
})

self.addEventListener('fetch', (e) => {
  e.respondWith(
    fetch(e.request)
      .then((response) => {
        console.log(e.request)
        if (e.request.method === 'GET') {
          const responseClone = response.clone()
          caches.open(CACHE_NAME).then(cache => cache.put(e.request, responseClone))
        }
        return response
      })
      .catch(error => caches.match(e.request).then(res => res))
  )
})
