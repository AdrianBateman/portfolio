<?php

function wizzyPopTemplate(): string
{
    $template = '<h2>Wizzy Pop</h2>';
    $template .= '<div id="app" title="Wizzy Popper Game"></div>';
    $template .= '<script async src="../dist/wizzyPop.js"></script>';
    $template .= '<link rel="stylesheet" href="../dist/wizzyPop.css">';

    return $template;
}
