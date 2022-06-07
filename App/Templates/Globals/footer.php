<?php

function globalFooterTemplate(): string
{
    $footer = '</main><footer><address>' .
        '<p>Copyright &copy;';

    $footer .= date('Y');

    $footer .= 'Adrian Bateman ' .
        '| <a href="/about">About</a>' .
        '</p></address>' .
        '</footer>';

    $footer .= '</body></html>';

    return $footer;
}
