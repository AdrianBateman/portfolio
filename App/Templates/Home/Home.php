<?php

function homeTemplate(): string
{

    $languageList = [
        ['HTML', 'CSS', 'JS', 'SASS', 'LESS'],
        ['OOPHP', 'Node', 'Java', 'SQL']
    ];

    $template = '<aside class="language">';

    foreach ($languageList as $listItem) {
        $template .= '<ul class="language-list">';

        foreach ($listItem as $item) {
            $template .= "<li class=\"language-list__item\">$item</li>";
        }
        unset($item);

        $template .= '</ul>';
    }

    unset($listItem);

    $template .= "</aside>";

    $template .= <<<END
    <h2 class="page-title">Projects</h2>

    <article class="project-article">
        <h1 class="project-article__title">
            <a
                href="https://www.dreams.co.uk"
                rel="noopener noreferrer nofollow"
            >
                Dreams Ltd
            </a>
        </h1>

        <h2>Vue JS</h2>

        <p>
            The original frontend for Dreams was written using dated techniques that were causing page
            loading times to be too high for our visitors.  The decition was made to rewrite the front
            end using VueJS.  We have been rewriting the front end to improve speed and stability.  Unit
            testing was introduced during this process, playing a key role in improing overal coding
            standards.
        </p>

        <h2>Website Benchmarking Tool</h2>

        <p>
            Using NodeJS, an internal website speed testing tool has been developed to help monitor
            changes to our staging site before pushing live.  This help with communicating to the
            wider business.
        </p>

        <p>
            Results are stored in a MS SQL database and retrieved with HTML front
            end using NodeJS.
        </p>

        <h2>
            <a
                href="https://www.dreams.co.uk/amp/beds"
                rel="noopener noreferrer nofollow"
            >AMP</a> - Accelerated Mobile Pages
        </h2>

        <p>
            Develped in PHP, the aim of this project is to recreate key landing pages using Google's
            HTML framework.  This improves core metrics including site loading times, which in turn
            drive more mobile trafic.
        </p>
    </article>
    END;

    return $template;
}
