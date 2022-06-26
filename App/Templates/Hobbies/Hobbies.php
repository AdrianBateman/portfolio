<?php

function hobbiesTemplate(array $images): string
{
    $template = '<h2 class="page-title">';

    $template .= '<svg style="margin: 0 1rem 0 0;" width="32" height="32" fill="none" stroke-width="2">';
    $template .= '<rect stroke="#ebebeb" width="14" height="14" x="1" y="16" />';
    $template .= '<rect stroke="#ebebeb" width="22" height="22" x="8" y="1" />';
    $template .= '</svg>Art</h2>';

    $template .= '<p class="page-title__intro">When not coding, I love to kick back and do some creative work.';
    $template .= 'I use a range of media, both real and digital.</p>';
    $template .= '<div class="hobbies">';

    foreach ($images as $image) {
        $template .= '<div class="hobbies-img">';

        $template .= '<h3 class="hobbies-img__title">' . $image['title'] . '</h3>';

        $template .= '<p class="hobbies-img__type">' . $image['type'] . '</p>';
        $template .= '<picture>';
        $template .= '<source srcset="' . $image['src'] . '.avif" type="image/avif">';
        $template .= '<source srcset="' . $image['src'] . '.webp" type="image/webp">';
        $template .= '<img src="' . $image['src'] . '.png"';
        $template .= 'alt="' . $image['alt'] . '"';
        $template .= 'width="' . $image['width'] . '"';
        $template .= 'height="' . $image['height'] . '" class="hobbies__image" loading="lazy" decoding="async">';
        $template .= '</picture>';

        if (array_key_exists('description', $image)) {
            $template .= '<p class="hobbies-img__description">' . $image['description'] . '</p>';
        }

        $template .= '</div>';
    }

    $template .= '</div>';

    return $template;
}
