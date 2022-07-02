<?php

function wizzyPopTemplate(): string
{
    $template = '<h2>Wizzy Pop</h2>';
    $template .= '<div id="app" title="Wizzy Popper Game"></div>';
    $template .= '<script async src="dist/wizzy-pop.js"></script>';

    return $template;
}
