<?php

function hobbiesTemplate($images): string
{
    $template = '<h2 class="page-title">Art</h2>';
    $template .= '<p class="page-title__intro">When not coding, I love to kick back and do some creative work. I use a range of media, both real and digital.</p>';
    $template .= '<div class="hobbies">';

    foreach ($images as $image) {
        $template .= '<div class="hobbies-img">';
        $template .= '<h3 class="hobbies-img__title">' . $image['title'] . '</h3>';
        $template .= '<p class="hobbies-img__type">' . $image['type'] . '</p>';
        $template .= '<img src="' . $image['src'] . '"';
        $template .= 'alt="' . $image['alt'] . '"';
        $template .= 'width="' . $image['width'] . '"';
        $template .= 'height="' . $image['height'] . '" class="hobbies__image">';
        if (array_key_exists('description', $image)) {
            $template .= '<p class="hobbies-img__description">' . $image['description'] . '</p>';
        }

        $template .= '</div>';
    }

    $template .= '</div>';

    return $template;
}
