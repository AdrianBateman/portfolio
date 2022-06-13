const descriptionButtons = document.querySelectorAll( '.work-article__details-button' );

descriptionButtons.forEach( ( button ) =>
{
  button.addEventListener( 'click', ( { target } ) =>
  {
    const description = target
      .parentElement
      .querySelector( '.work-article__description' );

    description.classList.toggle( 'work-article__description--open' );
    const descriptionStyleHeight = description.style.height;

    description.style.height = (
      descriptionStyleHeight === ''
      || descriptionStyleHeight === '0px'
    )
      ? `${ description.scrollHeight }px`
      : '0px';

    if ( description.classList.contains( 'work-article__description--open' ) )
    {
      description.scrollIntoView(
        {
          behavior: "smooth",
          block: "start",
        },
      );
    } else
    {
      target
        .parentElement
        .scrollIntoView(
          {
            behavior: "smooth",
            block: "start",
          },
        );
    }

    target.classList.toggle( 'arrow--up' );

  } );

} );
