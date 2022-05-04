function lazyLoad(target) {
  new IntersectionObserver(
    (entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const image = entry.target;
          const source = image.parentElement.querySelector('source');
          source.setAttribute('srcset', source.getAttribute('data-srcset'));

          image.setAttribute('src', image.getAttribute('data-src'));
          image.classList.remove('lazy-image');

          observer.disconnect();
        }
      });
    }
  ).observe(target)
}

const lazyImages = document.querySelectorAll('.lazy-image');
if (lazyImages) lazyImages.forEach(lazyLoad);