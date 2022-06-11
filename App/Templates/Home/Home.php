<?php
require_once TEMPLATES_PATH . 'Home/language-list.php';

function homeTemplate(): string
{
    $template = getLaguageList();

    $template .= '<h2 class="page-title">Work</h2>';

    $template .= file_get_contents(TEMPLATES_PATH . 'Articles/dreams.html', FILE_USE_INCLUDE_PATH);

    return $template;
}
