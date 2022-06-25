<?php

function globalHeaderHeroTemplate(): string
{
    return <<<END
    <header class="header-hero">
        <h1 class="header-hero__title">
            <small class="header-hero__title--small">
                Adrian Bateman
            </small>
            Website Developer
            <small class="header-hero__title--small header-hero__title--right">
                Building responsive web applications since 2012
            </small>
        </h1>
    </header>
    END;
}
