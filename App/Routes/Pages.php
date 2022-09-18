<?php

require_once GLOBAL_TEMPLATES . 'header.php';
require_once GLOBAL_TEMPLATES . 'footer.php';
require_once FUNCTIONS . 'printToScreen/printToScreen.php';

Route\Route::add(
    '/',
    function () {
        require_once TEMPLATES_PATH . 'Home/Home.php';

        printToScreen(
            'Home',
            homeTemplate()
        );
    }
);

Route\Route::add(
    '/hobbies',
    function () {
        require_once TEMPLATES_PATH . 'Hobbies/Hobbies.php';

        $images = json_decode(
            file_get_contents(DATA . 'hobbies.json'),
            true
        );

        printToScreen(
            'Hobbies',
            hobbiesTemplate($images['images'])
        );
    }
);

Route\Route::add(
    '/apps',
    function () {
        require_once TEMPLATES_PATH . 'Apps/Apps.php';

        printToScreen(
            'Apps',
            appsTemplate()
        );
    }
);

Route\Route::add(
    '/contact',
    function () {
        require_once TEMPLATES_PATH . 'Contact/Contact.php';

        printToScreen(
            'Contact',
            contactTemplate()
        );
    }
);
