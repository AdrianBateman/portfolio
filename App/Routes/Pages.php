<?php

require_once GLOBAL_TEMPLATES . 'header.php';
require_once GLOBAL_TEMPLATES . 'footer.php';

Route\Route::add(
    '/',
    function () {
        require_once TEMPLATES_PATH . 'Home/Home.php';

        echo globalHeaderTemplate('Home');

        echo homeTemplate();

        echo globalFooterTemplate();
    }
);

Route\Route::add(
    '/hobbies',
    function () {
        $images = [
            [
                "src" => "/img/inkscape/natural-healing-shop-logo.jpg",
                "alt" => "Logo for website: Natural Healing",
                "width" => 900,
                "height" => 495,
                "description" => "Logo designed for an online shop."
            ],
            [
                "src" => "/img/inkscape/natural-healing-banner.png",
                "alt" => "Banner design for website: Natural Healing",
                "width" => 650,
                "height" => 150,
                "description" => "Banner incorperating logo design with website title."
            ],
            [
                "src" => "/img/inkscape/ufo-pattern.svg",
                "alt" => "UFO design with lines",
                "width" => 501,
                "height" => 331,
                "description" => "Line art, originaly on A3 paper, transformed into SVG for web."
            ],
            [
                "src" => "/img/inkscape/mugen-civic-type-r.jpg",
                "alt" => "Civic car line art",
                "width" => 900,
                "height" => 637,
                "description" => "Line art inspired by Civic Type R car."
            ],
            [
                "src" => "/img/inkscape/triumph.jpg",
                "alt" => "Triumph line art",
                "width" => 900,
                "height" => 637,
                "description" => "Line art inspired by Triumph car."
            ],
            [
                "src" => "/img/gimp/angel.jpg",
                "alt" => "Angel image",
                "width" => 900,
                "height" => 686,
                "description" => "Digital Angel design from stock photograph"
            ],
            [
                "src" => "/img/gimp/star.jpg",
                "alt" => "Start idea for logo",
                "width" => 400,
                "height" => 400,
                "description" => "Logo idea combining both vector and bitmap"
            ],
            [
                "src" => "/img/pencil/houses-come-in-two.jpg",
                "alt" => "Pencil drawing of two sideds to a house",
                "width" => 900,
                "height" => 675,
                "description" => "Pencil drawing, done seperatly on two peices of A4, combined."
            ],
            [
                "src" => "/img/my-paint/house.jpg",
                "alt" => "House drawing test using myPaint",
                "width" => 900,
                "height" => 742,
                "description" => "Digital drawing, using similar techniques to chalk on digital canvas."
            ],
            [
                "src" => "/img/my-paint/tree.png",
                "alt" => "Tree idea for website",
                "width" => 338,
                "height" => 600,
                "description" => "Concept image for sidebar navigation. Digital drawing."
            ],
            [
                "src" => "/img/my-paint/white-eagle.jpg",
                "alt" => "Portrait drawing",
                "width" => 900,
                "height" => 840,
                "description" => "Digital portrait inspited by Native American culture."
            ],
            [
                "src" => "/img/my-paint/logo-idea-pencil.png",
                "alt" => "Logo idea in pencil",
                "width" => 448,
                "height" => 256,
                "description" => "Logo idea for personal portfolio, digital drawing."
            ]
        ];

        require_once TEMPLATES_PATH . 'Hobbies/Hobbies.php';

        $title = 'Hobbies';

        echo globalHeaderTemplate($title);

        echo hobbiesTemplate($images);

        echo globalFooterTemplate();
    }
);
