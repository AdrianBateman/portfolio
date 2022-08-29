<?php

function homeTemplate(): string
{
    $template = '<section class="work-section"><h2 class="page-title">';
    $template .= '<svg style="margin: 0 1rem 0 0;" width="32" height="32" fill="none" stroke-width="2">';
    $template .= '<rect stroke="#ebebeb" width="14" height="14" x="1" y="16" />';
    $template .= '<rect stroke="#ebebeb" width="22" height="22" x="8" y="1" />';
    $template .= '</svg>Work</h2>';

    $template .= file_get_contents(TEMPLATES_PATH . 'Articles/dreams.html', FILE_USE_INCLUDE_PATH);

    $template .= file_get_contents(TEMPLATES_PATH . 'Articles/moose-artist.html', FILE_USE_INCLUDE_PATH);

    $template .= file_get_contents(TEMPLATES_PATH . 'Articles/websites-by-lime.html', FILE_USE_INCLUDE_PATH);

    $template .= '</section>';

    return $template;
}
