<?php

function printToScreen(string $pageName, string $content): void
{
    $template = globalHeaderTemplate($pageName);
    $template .= $content;
    $template .= globalFooterTemplate();

    $domDoc = new DOMDocument();

    libxml_use_internal_errors(true);
    $domDoc->loadHTML($template);
    libxml_clear_errors();

    echo $domDoc->saveHTML();
}
