<?php

require_once GLOBAL_TEMPLATES . 'header.php';
require_once GLOBAL_TEMPLATES . 'footer.php';

Route\Route::add(
    '/',
    function () {
        require_once TEMPLATES_PATH . 'Home/Home.php';
        $dom = new DOMDocument;
        $dom->loadHTML(globalHeaderTemplate('Home'));
        // if ($dom->validate()) {
        //     echo "This document is valid!\n";
        // }

        //echo globalHeaderTemplate('Home');

        //echo homeTemplate();

        //echo globalFooterTemplate();
    }
);

Route\Route::add(
    '/hobbies',
    function () {
        $images = json_decode(file_get_contents(DATA . 'hobbies.json'), true);

        require_once TEMPLATES_PATH . 'Hobbies/Hobbies.php';

        echo globalHeaderTemplate('Hobbies');

        echo hobbiesTemplate($images['images']);

        echo globalFooterTemplate();
    }
);

Route\Route::add(
    '/apps',
    function () {
        require_once TEMPLATES_PATH . 'Apps/Apps.php';

        echo globalHeaderTemplate('Apps');

        echo appsTemplate();

        echo globalFooterTemplate();
    }
);

Route\Route::add(
    '/contact',
    function () {
        require_once TEMPLATES_PATH . 'Contact/Contact.php';

        echo globalHeaderTemplate('Contact');

        echo contactTemplate();

        echo globalFooterTemplate();
    }
);
