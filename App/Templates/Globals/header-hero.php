<?php

function globalHeaderHeroTemplate(): string
{
    return <<<END
    <div class="header-hero">
        <h1 class="header-hero__title">
            <small class="header-hero__title--small">Adrian Bateman</small>
            Senior Website Developer
            <small class="header-hero__title--small">HTML5 CSS JS PHP NODE SASS NPM</small>
        </h1>
    </div>
    END;
}
