<?php

function homeTemplate(): string
{
    require_once TEMPLATES_PATH . 'Home/language-list.php';

    $template = getLaguageList();

    $template .= '<section class="work-section"><h2 class="page-title">Work</h2>';

    $template .= file_get_contents(TEMPLATES_PATH . 'Articles/dreams.html', FILE_USE_INCLUDE_PATH);

    $template .= file_get_contents(TEMPLATES_PATH . 'Articles/websites-by-lime.html', FILE_USE_INCLUDE_PATH);

    $template .= '</section>';

    return $template;
}
