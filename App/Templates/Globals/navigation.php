<?php

function globalNavigationTemplate(string $pageTitle): string
{
    $navigation = array(
        'Home' => '/',
        'Hobbies' => '/hobbies',
        'Apps' => '/apps',
        'Contact' => '/contact'
    );

    $template = '<nav><ul class="main-nav">';

    foreach ($navigation as $item => $key) {
        if ($item === $pageTitle) {
            $template .= '<li class="main-nav__item main-nav__item--active">' . $item . '</li>';
        } else {
            $template .= '<li><a class="main-nav__item" href="' . $key . '">' . $item . '</a></li>';
        }
    }

    unset($item);
    unset($key);

    $template .= '</ul></nav>';

    return $template;
}
