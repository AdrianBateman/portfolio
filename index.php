<?php
// set page name
$active = "home";

// Global header
include './components/blocks/global-header.php';

// Global classes
include './components/functions/global-functions.php';

/***************************
 *  
 *  load json data
 * 
 ***************************/

$skillsJsonObj = new loadJsonFile();

$skillsJsonObj->set_FileUrl("./components/data/json/skills.json");

$skillsJsonData = $skillsJsonObj->get_jsonArr();


/*************************************
 * 
 *  languages / skills section
 *
 *************************************/

echo '<div class="language__wrapper margin-top-50">';

foreach ($skillsJsonData['skills'] as $key) {

    echo '
            <a href="' . $key['url'] . '" target="_blank" rel="noopener" title="' . $key['title'] . '" class="language__item margin-bottom-25">

                <picture>
                    <source srcset="' . $key['image-webp'] . '" type="image/webp">
                    <source srcset="' . $key['image'] . '" type="image/jpeg">
                    <img src="' . $key['image'] . '" width="' . $key['width'] . '" height="' . $key['height'] . '" alt="' . $key['alt'] . '">
                </picture>

               <!-- <p class="language__title">' . $key['title'] . '</p>  -->
            </a>';

}

echo '</div>';

/**********************
 * 
 *  work section
 *
 **********************/

echo '<div class="js-workArticle work__wrapper margin-top-50">';

foreach ($skillsJsonData['work'] as $key) {
    echo '
    <div class="work-card margin-bottom-50">

        <h2 class="work-card__title text--center margin-bottom-25">'.$key['title'].'<br><small><a href="'.$key['link'].'" target="_blank" rel="noopener" title="Dreams.co.uk">'.$key['link-text'].'</a></small></h2>

        <div class="work-card__image-wrapper text--center margin-bottom-25">
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

echo '<div class="js-skillsArticle work__wrapper margin-top-50">
<h2>Skills</h2>
<div style="display:block; height: 600px;width: 100%;"></div>
</div>';

//  include footer
include './components/blocks/global-footer.php';
?>