<?php

function appsTemplate(): string
{
    $template = '<h2 class="page-title">';

    $template .= '<svg style="margin: 0 1rem 0 0;" width="32" height="32" fill="none" stroke-width="2">';
    $template .= '<rect stroke="#ebebeb" width="14" height="14" x="1" y="16" />';
    $template .= '<rect stroke="#ebebeb" width="22" height="22" x="8" y="1" />';
    $template .= '</svg>Apps</h2>';

    $template .= '<h3>Wizzy Pop</h3>';

    $template .= '<a href="https://wizzypop.a-bateman.co.uk">Play</a>';

    return $template;
}
