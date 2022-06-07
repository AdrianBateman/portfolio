<?php

function globalHeaderHeroTemplate(): string
{
    return <<<END
    <div class="header-hero">
        <h1 class="header-hero__title">
            <small class="header-hero__title--small">Adrian Bateman</small>
            Senior Website Developer
            <ul class="header-hero__list header-hero-list header-hero__title--small">
                <li class="header-hero-list__item">HTML</li>
                <li class="header-hero-list__item">CSS</li>
                <li class="header-hero-list__item">JS</li>
                <li class="header-hero-list__item">SASS</li>
                <li class="header-hero-list__item">LESS</li>
            </ul>
            <ul class="header-hero__list header-hero-list header-hero__title--small">
                <li class="header-hero-list__item">OOPHP</li>
                <li class="header-hero-list__item">NODE</li>
                <li class="header-hero-list__item">Java</li>
            </ul>
        </h1>
    </div>
    END;
}
