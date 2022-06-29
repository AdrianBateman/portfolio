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
        $images = json_decode(file_get_contents(DATA . 'hobbies.json'), true);

        require_once TEMPLATES_PATH . 'Hobbies/Hobbies.php';

        $title = 'Hobbies';

        echo globalHeaderTemplate($title);

        echo hobbiesTemplate($images['images']);

        echo globalFooterTemplate();
    }
);

Route\Route::add(
    '/apps',
    function () {
        require_once TEMPLATES_PATH . 'Apps/Apps.php';

        $title = 'Apps';

        echo globalHeaderTemplate($title);

        echo appsTemplate();

        echo globalFooterTemplate();
    }
);
