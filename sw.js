importScripts('./components/data/js/serviceworker-cache-polyfill.js');

var filesToCache = [
    '/',
    '/components/images/star.svg',
    '/components/images/work-sites/alphaclean.png',
    '/components/images/work-sites/claphamholmefarm.png',
    '/components/images/work-sites/dreams.png',
    '/components/images/work-sites/jamesthorprcarpentry.png',
    '/components/images/work-sites/southhantslawns.png',
    '/components/images/work-sites/townncountry.png',
    '/components/images/work-sites/websitesbylime.png',
    '/components/images/logos/php.png',
    '/components/images/logos/php.webp',
    '/components/images/logos/magento.png',
    '/components/images/logos/less.webp',
    '/components/images/logos/less.png',
    '/components/images/logos/javascript.png',
    '/components/images/logos/java.webp',
    '/components/images/logos/java.png',
    '/components/images/logos/html5.webp',
    '/components/images/logos/html5.png',
    '/components/images/logos/github.webp',
    '/components/images/logos/github.png',
    '/components/images/logos/css3.webp',
    '/components/images/logos/css3.png',
    '/components/images/logos/bootstrap.png',
    '/components/images/logos/ampproject.png',
    '/components/images/logos/amplience.webp',
    '/components/images/logos/amplience.png'
];

var staticCacheName = 'a-bateman-cache-v1';

self.addEventListener('install', function (event) {
    event.waitUntil(
        caches.open(staticCacheName)
        .then(function (cache) {
            return cache.addAll(filesToCache);
        })
    );
});

self.addEventListener('fetch', function (event) {
    event.respondWith(
        caches.match(event.request).then(function (response) {
            if (response) {
                return response;
            }
            return fetch(event.request)
                .then(function (response) {

                    // TODO 5 - Respond with custom 404 page

                    return caches.open(staticCacheName).then(function (cache) {
                        if (event.request.url.indexOf('test') < 0) {
                            cache.put(event.request.url, response.clone());
                        }
                        return response;
                    });
                });

        }).catch(function (error) {

            // TODO 6 - Respond with custom offline page
            console.log('error returning the cache');
        })
    );
});