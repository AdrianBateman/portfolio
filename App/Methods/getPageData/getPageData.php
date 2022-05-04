<?php

function getPageData(string $pageData)
{
    return json_decode(file_get_contents(DATA . $pageData), true)['0'];
}
