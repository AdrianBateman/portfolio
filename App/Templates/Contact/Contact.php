<?php

function contactTemplate(): string
{
    return <<<'EOD'
<h2 class="page-title">
    <svg
        style="margin: 0 1rem 0 0;transform:rotate(90deg)"
        width="32" height="32" fill="none" stroke-width="2">
        <rect stroke="#ebebeb" width="14" height="14" x="1" y="16" />
        <rect stroke="#ebebeb" width="22" height="22" x="8" y="1" />
    </svg>
    Contact
</h2>
<section class="contact">
    <ul class="contact__links contact-list">
        <li class="contact-list__item">
            <a
                href="mailto:adrian@a-bateman.co.uk"
                class="contact-list__link"
                title="Email me"
            >
                <svg version="1.1"
                    class="contact-list__logo"
                    x="0"
                    y="0"
                    viewBox="0 0 489.776 489.776"
                >
                    <path
                        fill="#ebebeb"
                        d="M469.075,64.488h-448.2c-10.3,0-18.8,7.5-20.5,17.3c-0.6,2.4-0.3,322.7-0.3,322.7c0,11.4,9.4,20.8,20.8,20.8h447.1
                        c11.4,0,20.8-8.3,21.8-19.8v-320.2C489.875,73.788,480.475,64.488,469.075,64.488z M404.275,106.088l-159.8,114.4l-159.8-114.4
                        H404.275z M40.675,384.788v-259.9l192.4,137.2c7.8,6.3,17.2,4.4,22.9,0l192.4-137.8v260.5L40.675,384.788L40.675,384.788z"
                    />
                </svg>
                Adrian@A-Bateman.co.uk
            </a>
        </li>

        <li class="contact-list__item">
            <a href="https://github.com/AdrianBateman"
                rel="noopener noreferrer nofollow"
                target="_blank"
                class="contact-list__link"
                title="Find me on Github"
            >
                <img src="/img/GitHub-Mark-Light-120px-plus.png"
                    width="120"
                    height="120"
                    alt="Find me on Github"
                    class="contact-list__logo" />
                Find me on Github
            </a>
        </li>

        <li class="contact-list__item">
            <a href="https://www.linkedin.com/in/adrian-bateman-ba2444122/"
                rel="noopener noreferrer nofollow"
                target="_blank"
                class="contact-list__link"
                title="Find me on LinkedIn"
            >
                <img src="/img/LI-In-Bug.png"
                    width="635"
                    height="540"
                    alt="Find me on Github"
                    class="contact-list__logo" />
                Find me on LinkedIn
            </a>
        </li>

        <li class="contact-list__item">
            <span
                class="contact-list__link"
                title="Location: Farnborough, Hampshire, UK"
            >
                <svg version="1.1"
                    x="0px"
                    y="0px"
                    viewBox="0 0 436.432 436.432"
                    class="contact-list__logo"
                >
                    <path
                        fill="#ebebeb"
                        d="M346.946,74.322C320.077,27.784,271.954,0,218.216,0c-53.737,0-101.86,27.784-128.729,74.322
                        c-26.869,46.538-26.869,102.106,0,148.644l120.502,208.716c1.697,2.939,4.833,4.75,8.227,4.75s6.53-1.811,8.227-4.75
                        l120.502-208.716C373.815,176.428,373.815,120.86,346.946,74.322z M330.491,213.466L218.216,407.932L105.941,213.466
                        c-23.434-40.59-23.434-89.055,0-129.644C129.376,43.232,171.348,19,218.216,19s88.841,24.232,112.275,64.822
                        C353.926,124.411,353.925,172.876,330.491,213.466z"
                    />
                    <path
                        fill="#ebebeb"
                        d="M218.216,41.193c-59.363,0-107.659,48.296-107.659,107.659c0,59.364,48.296,107.66,107.659,107.66
                        c59.364,0,107.66-48.296,107.66-107.66C325.876,89.488,277.58,41.193,218.216,41.193z M176.769,227.206v-6.352
                        c0-22.855,18.594-41.45,41.45-41.45s41.45,18.594,41.45,41.45v6.35c-12.378,6.575-26.486,10.308-41.452,10.308
                        C203.252,237.511,189.145,233.78,176.769,227.206z M218.216,107.558c14.568,0,26.421,11.853,26.421,26.421
                        S232.785,160.4,218.216,160.4c-14.569,0-26.421-11.853-26.421-26.421S203.648,107.558,218.216,107.558z M278.27,214.012
                        c-2.222-19.625-13.875-36.422-30.307-45.752c9.592-8.334,15.674-20.607,15.674-34.281c0-25.045-20.375-45.421-45.421-45.421
                        s-45.421,20.376-45.421,45.421c0,13.675,6.083,25.949,15.676,34.283c-16.432,9.331-28.085,26.129-30.305,45.754
                        c-17.579-16.212-28.609-39.422-28.609-65.164c0-48.887,39.772-88.659,88.659-88.659c48.887,0,88.66,39.772,88.66,88.659
                        C306.876,174.592,295.846,197.801,278.27,214.012z"
                    />
                </svg>
                Hampshire - Farnborough - UK
            </span>
        </li>
    </ul>
</section>
EOD;
}
