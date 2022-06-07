<?php

function homeTemplate(): string
{
    return <<<END
    <aside class="language">
        <ul class="language-list">
            <li class="language-list__item">HTML</li>
            <li class="language-list__item">CSS</li>
            <li class="language-list__item">JS</li>
            <li class="language-list__item">SASS</li>
            <li class="language-list__item">LESS</li>
        </ul>
        <ul class="language-list">
            <li class="language-list__item">OOPHP</li>
            <li class="language-list__item">NODE</li>
            <li class="language-list__item">Java</li>
        </ul>
    </aside>

    <h1>Hello World!</h1>
    END;
}
