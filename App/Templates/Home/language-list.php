<?php

function getLaguageList(): string
{
    $languageList = [
        ['HTML', 'CSS', 'JS', 'SASS', 'LESS'],
        ['PHP', 'Node', 'Java', 'SQL']
    ];

    $languageListString = '<aside class="language">';

    foreach ($languageList as $listItem) {
        $languageListString .= '<ul class="language-list">';

        foreach ($listItem as $item) {
            $languageListString .= "<li class=\"language-list__item\">$item</li>";
        }
        unset($item);

        $languageListString .= '</ul>';
    }

    unset($listItem);

    $languageListString .= "</aside>";

    return $languageListString;
}
