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
        <p>
            Originally joining as a junior web developer in order to help out with day
            to day tasks, I quickly became a valued member of the online trading team.
            Assisting with not only the day to day tasks but also improving the site
            load speed, using tried and tested techniques. This helps improve customer
            experience and overall bounce rate & spend rate.
        </p>
        <p>
            We switched platforms from Magento to Hybris and Amplience to proved a
            "Headless Web" experience. This meant that we had only one source of
            information going to each required destination.
        </p>

        <p>
            Along with Hybris, we developed a mobile version of the site, working closely
            with Google. This version uses the same Amplience feed as Hybris but is build entirely
            in-house in PHP with Google's AMP project to help page load times.
        </p>
    </article>
    END;

    return $template;
}
