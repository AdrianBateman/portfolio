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
        require_once TEMPLATES_PATH . 'Hobbies/Hobbies.php';

        $title = 'Hobbies';

        echo globalHeaderTemplate($title);

        echo hobbiesTemplate();

        echo globalFooterTemplate();
    }
);
