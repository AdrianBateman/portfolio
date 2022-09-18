<?php

function globalFooterTemplate(): string
{
    $footer = '</main><footer><address>' .
        '<p>Copyright &copy; ';

    $footer .= date('Y');

    $footer .= ' Adrian Bateman ' .
        '| <a href="/contact">Contact</a>' .
        '</p></address>' .
        '</footer>';

    $footer .= '<script>';
    $footer .= file_get_contents(DIST . 'script.js', FILE_USE_INCLUDE_PATH);
    $footer .= '</script></body></html>';

    return $footer;
}
