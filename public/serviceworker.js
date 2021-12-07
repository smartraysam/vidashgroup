var staticCacheName = "vidash-v" + new Date().getTime();
var filesToCache = [
    '/offline',
    '/images/apple-icon-57x57.png',
    '/images/apple-icon-60x60.png',
    '/images/apple-icon-72x72.png',
    '/images/apple-icon-76x76.png',
    '/images/apple-icon-114x114.png',
    '/images/apple-icon-120x120.png',
    '/images/apple-icon-144x144.png',
    '/images/apple-icon-152x152.png',
    '/images/apple-icon-180x180.png',
    '/images/android-icon-192x192.png',
    '/images/favicon-32x32.png',
    '/images/favicon-96x96.png',
    '/images/favicon-16x16.png',
    '/images/icons/apple-splash-640-1136.jpg',
    '/images/icons/apple-splash-750-1334.jpg ',
    '/images/icons/apple-splash-828-1792.jpg',
    '/images/icons/apple-splash-1125-2436.jpg',
    '/images/icons/apple-splash-1242-2208.jpg',
    '/images/icons/apple-splash-1242-2688.jpg',
    '/images/icons/apple-splash-1536-2048.jpg',
    '/images/icons/apple-splash-1668-2224.jpg',
    '/images/icons/apple-splash-1668-2388.jpg',
    '/images/icons/apple-splash-2048-2732.jpg',
    '/welcome/images/vidashpaint.jpg',
    '/welcome/images/vidashlogistics.jpg',
    '/welcome/images/vidashproperty.jpg',
    '/welcome/images/vidashshelter.jpg'


]


// Cache on install
self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
        .then(cache => {
            return cache.addAll(filesToCache);
        })
    )
});

// Clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                .filter(cacheName => (cacheName.startsWith("pwa-")))
                .filter(cacheName => (cacheName !== staticCacheName))
                .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});

// Serve from Cache
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
        .then(response => {
            return response || fetch(event.request);
        })
        .catch(() => {
            return caches.match('offline');
        })
    )
});