<?php

function appsTemplate(): string
{
    $template = '<h1>Apps</h1>';

    $template .= '<h2>Wizzy Pop</h2>';

    $template .= '<a href="/apps/wizzy-pop">Play</a>';

    return $template;
}
