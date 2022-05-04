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
    '/about',
    function () {
        require_once TEMPLATES_PATH . 'About/About.php';

        $title = 'About';

        echo globalHeaderTemplate($title);

        echo aboutTemplate();

        echo globalFooterTemplate();
    }
);
