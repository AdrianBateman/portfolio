const descriptionButtons = document.querySelectorAll( '.work-article__details-button' );

descriptionButtons.forEach( ( button ) =>
{
  button.addEventListener( 'click', ( { target } ) =>
  {
    const description = target
      .parentElement
      .querySelector( '.work-article__description' );

    description.classList.toggle( 'work-article__description--open' );

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

    const arrow = target.querySelector( '.arrow--down' );
    arrow.classList.toggle( 'arrow--up' );

  } );

} );
