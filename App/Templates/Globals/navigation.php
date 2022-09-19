<?php

function globalNavigationTemplate(string $pageTitle): string
{
    $navigation = array(
        'Home' => '/',
        'Hobbies' => '/hobbies',
        'Apps' => '/apps',
        'Contact' => '/contact'
    );

    $template = '<nav><div class="nav-wrapper"><ul class="main-nav">';

    foreach ($navigation as $item => $key) {
        if ($item === $pageTitle) {
            $template .= '<li class="main-nav__item main-nav__item--active">' . $item . '</li>';
        } else {
            $template .= '<li><a class="main-nav__item" href="' . $key . '">' . $item . '</a></li>';
        }
    }

    unset($item);
    unset($key);

    $template .= <<<'EOT'
    </ul>

    <ul class="main-nav-social">
        <li class="main-nav-social__item">
            <a href="https://github.com/AdrianBateman"
                rel="noopener noreferrer nofollow"
                target="_blank"
                class="main-nav-social__link"
                title="Find me on Github"
            >
                <img src="/img/GitHub-Mark-Light-120px-plus.png"
                    width="24"
                    height="24"
                    alt="Find me on Github"
                    class="main-nav-social__logo" />
            </a>
        </li>

        <li class="main-nav-social__item">
            <a href="https://www.linkedin.com/in/adrian-bateman-ba2444122/"
                rel="noopener noreferrer nofollow"
                target="_blank"
                class="main-nav-social__link"
                title="Find me on LinkedIn"
            >
                <img src="/img/LI-In-Bug.png"
                    width="28"
                    height="24"
                    alt="Find me on Github"
                    class="main-nav-social__logo"
                />
            </a>
        </li>
    </ul>
    </div>
</nav>
EOT;

    return $template;
}
