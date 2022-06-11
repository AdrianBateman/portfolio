const descriptionButtons = document.querySelectorAll( '.work-article__details-button' );

descriptionButtons.forEach( ( button ) =>
{
  button.addEventListener( 'click', ( { target } ) =>
  {
    target
      .parentElement
      .querySelector( '.work-article__description' )
      .classList.toggle( 'work-article__description--open' );
  } );

} );
