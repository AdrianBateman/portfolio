<?php

function globalHeaderTemplate(string $pageTitle): string
{
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'navigation.php';
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'header-hero.php';

    $style = file_get_contents(BASE_PATH . 'html/dist/style.css');

    $template = '<!doctype html><html lang="en"><head>';
    $template .= '<meta charset="UTF-8">';
    $template .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    $template .= '<meta http-equiv="X-UA-Compatible" content="ie=edge">';
    $template .= "<title>A-Bateman | {$pageTitle}</title>";
    $template .= "<style>$style</style></head><body>";

    $template .= globalNavigationTemplate($pageTitle);

    $template .= globalHeaderHeroTemplate();

    $template .= '<main>';

    return $template;
}
