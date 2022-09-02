const descriptionButtons = document.querySelectorAll('.work-article__details');

if (descriptionButtons.length) {
  descriptionButtons.forEach((button) => {
    button.addEventListener('click', ({ target }) => {
      const description = target
        .parentElement
        .querySelector('.work-article__main') ||

        target
          .parentElement
          .parentElement
          .querySelector('.work-article__main') ||

        target
          .parentElement
          .parentElement
          .parentElement
          .querySelector('.work-article__main');

      description
        .classList
        .toggle('work-article__main--open');
    });
  });
}

const descriptionCloseButtons = document.querySelectorAll('.work-article__details-close');

if (descriptionCloseButtons.length) {
  descriptionCloseButtons.forEach((button) => {
    button.addEventListener('click', ({ target }) => {
      target
        .parentElement
        .classList
        .toggle('work-article__main--open');
    });
  });
}
