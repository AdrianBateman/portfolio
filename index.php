<?php
// set page name
$active = "home";

// Global header
include './components/blocks/global-header.php';

// Global classes
include './components/data/php/global-class.php';

/***************************
 *  
 *  load json data
 * 
 ***************************/

$jsonObj = new loadJsonFile();

$jsonObj->set_FileUrl("./components/data/json/main-data.json");

$jsonData = $jsonObj->get_jsonArr();


/*************************************
 * 
 *  languages / skills section
 *
 *************************************/

echo '<div class="language__wrapper margin-top-md">
        
        <h2 class="text--center margin-bottom-sm">Languages</h2>

        <div class="language__inner-wrapper">';

foreach ($jsonData['languages'] as $key) {
    $starImages = "";
    $i = 0;
    while ($i++ < $key['competency'])
    {
        $starImages .= '<img src="components/images/star.svg" >'; 
    }

    echo '
            <a href="' . $key['url'] . '" target="_blank" rel="noopener" title="' . $key['title'] . '" class="language__item">

                <picture class="width--40">
                    <source srcset="' . $key['image-webp'] . '" type="image/webp">
                    <source srcset="' . $key['image'] . '" type="image/jpeg">
                    <img src="' . $key['image'] . '" width="' . $key['width'] . '" height="' . $key['height'] . '" alt="' . $key['alt'] . '" class="margin-bottom-sm">
                </picture>
                <div class="language__text-wrapper text--left">
                    <h3 class="language__title">' . $key['title'] . '</h3>
                    <p>' . $starImages . '</p>
                </div>
            </a>';
}

echo '</div>
    </div>';

/**********************
 * 
 *  work section
 *
 **********************/

echo '<div class="js-workArticle work__wrapper margin-top-md">';

foreach ($jsonData['work'] as $key) {
    echo '
    <div class="work-card margin-bottom-md">

        <h2 class="work-card__title text--center margin-bottom-sm">'.$key['title'].'<br><small><a href="'.$key['link'].'" target="_blank" rel="noopener" title="Dreams.co.uk">'.$key['link-text'].'</a></small></h2>

        <div class="work-card__image-wrapper text--center margin-bottom-sm">
            <img src="'.$key['image-placeholder'].'" width="'.$key['image-width'].'" height="'.$key['image-height'].'" class="work-card__image lazy" data-src="'.$key['image'].'" data-srcset="'.$key['image'].'">
        </div>

        <div class="work-card__text-wrapper">
            '.$key['description'].'
        </div>

    </div>
    ';
}

echo '</div>';


/**********************
 * 
 *  skills section
 *
 **********************/

echo '<div class="js-skillsArticle work__wrapper margin-top-md">
<h2>Skills</h2>
<div style="display:block; height: 600px;width: 100%;"></div>
</div>';

//  include footer
include './components/blocks/global-footer.php';
?>