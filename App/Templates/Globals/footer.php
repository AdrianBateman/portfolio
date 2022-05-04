<?php

function globalFooterTemplate(): string
{
    $footer = '</main><footer><address>' .
        '<p>Copyright &copy;';

    $footer .= date('Y');

    $footer .= 'Adrian Bateman ' .
        '| <a href="/about">About</a>' .
        '</p></address>' .
        '</footer><script>';

    $footer .= file_get_contents(BASE_PATH . 'html/dist/script.js');

    $footer .= '</script></body></html>';

    return $footer;
}
