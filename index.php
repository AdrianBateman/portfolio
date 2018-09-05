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
 *  languages section
 *
 *************************************/

echo '<div class="js-languagesArticle language__wrapper">
        
        <h2 class="text--center color--white">Languages</h2>

        <div class="language__inner-wrapper color-light">';


foreach ($jsonData['languages'] as $key) {
    $starImages = "";
    $i = 0;
    while ($i++ < $key['competency'])
    {
        $starImages .= '<img src="components/images/star.svg" alt="A yellow star" >'; 
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
                    <p class="language__text">' . $key['url-short'] . '</p>
                    <div>' . $starImages . '</div>
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

echo '<div class="work">
        <div class="js-workArticle work__wrapper">';

foreach ($jsonData['work'] as $key) 
{
    echo '
        <div class="work-card margin-bottom-md">
            <div class="work-card__image-wrapper text--center order--'.$key['sort-order'].'" >
                <a href="'.$key['link'].'" target="_blank" rel="noopener" title="'.$key['title'].'">
                    <img src="/components/images/nexus4.png" width="300" height="568" alt="Mobile phone image frame" class="work-card__image-frame">
                    <img src="'.$key['image-placeholder'].'" width="'.$key['image-width'].'" height="'.$key['image-height'].'" class="work-card__image lazy" data-src="'.$key['image'].'" data-srcset="'.$key['image'].'" alt="'.$key['title'].'">
                </a>
            </div>

            <div class="work-card__text-wrapper align--'.$key['text-direction'].'">
                <h2 class="work-card__title margin-bottom-sm">'.$key['title'].'</h2>
                <a href="'.$key['link'].'" target="_blank" rel="noopener" title="'.$key['title'].'" class="work-card__title--small ">'.$key['link-text'].'</a>

                '.$key['description'].'
            </div>

        </div>
    ';

    if ($key['sites-created']){
        echo '<div class="work-card-examples__wrapper">';
        
        foreach($key['sites-created'] as $value){
            echo '
                <div class="work-card-examples">
                        <div class="work-card-examples__image-wrapper text--center order--'.$value['sort-order'].'">
                            <a href="'.$value['link'].'" target="_blank" rel="noopener" title="'.$value['title'].'">
                                <img src="'.$value['image-placeholder'].'" width="'.$value['image-width'].'" height="'.$value['image-height'].'" class="work-card-examples__image lazy" data-src="'.$value['image'].'" data-srcset="'.$value['image'].'"  alt="'.$value['title'].'">
                            </a>
                        </div>
                
                        <div class="work-card-examples__text-wrapper align--'.$value['text-direction'].' color--light"">
                            <h2 class="work-card__title color--white">'.$value['title'].'</h2>
                            <a href="'.$value['link'].'" target="_blank" rel="noopener" title="'.$value['title'].'" class="work-card__title--small color--light">'.$value['link-text'].'</a>
                            '.$value['description'].'
                            <p>Skills: '.$value['skills'].'</p>
                            <hr class="work-card-examples__divider">
                        </div>
                </div>
            ';    
        }

        echo '</div>';
    }
}

echo '</div>
</div>';


/**********************
 * 
 *  skills section
 *
 **********************/

echo '<div class="js-skillsArticle language__wrapper skills__wrapper">
        
        <h2 class="text--center color--white">Skills</h2>

        <div class="language__inner-wrapper color--light">';


foreach ($jsonData['skills'] as $key) 
{
    $starImages = "";
    $i = 0;
    while ($i++ < $key['competency'])
    {
        $starImages .= '<img src="components/images/star.svg" alt="A yellow star">'; 
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
                    <p class="language__text">' . $key['url-short'] . '</p>
                    <p>' . $starImages . '</p>
                </div>
            </a>';
}

echo '</div>
    </div>';


echo '</div>';


/**********************
 * 
 *  hobbies section
 *
 **********************/

echo '<div class="js-hobbiesArticle language__wrapper">
        
        <h2 class="text--center margin-bottom-sm color--white">Hobbies</h2>
        <div class="work-card-examples">
            <div class="work-card-examples__image-wrapper text--center">
                <img src="/components/images/art/natural_healing_logo_by_abateman1982-400.jpg" 
                    alt="Natural Healing Logo"
                    width="400"
                    height="220"
                    class="art-image">
            </div>
            <div class="work-card-examples__text-wrapper align--center color--light">
                <img src="/components/images/art/corvette_z06_line_art_by_abateman1982-400.png" 
                    alt="Corvette Z06"
                    width="400"
                    height="283"
                    class="art-image">
            </div>
        </div>
        <div class="work-card-examples">
            <div class="work-card-examples__image-wrapper text--center order--1">
                <img src="/components/images/art/AlphaCleanLogo.png" 
                    alt="Alpha Cleaning logo"
                    width="400"
                    height="123"
                    class="art-image">
            </div>
            <div class="work-card-examples__text-wrapper align--left color--light">
                <img src="/components/images/art/mugen_civic_typer_by_abateman1982-400.png" 
                    alt="Mugen Civic TypeR"
                    width="400"
                    height="283"
                    class="art-image">
            </div>
        </div>
        <div class="work-card-examples">
            <div class="work-card-examples__image-wrapper text--center">
                <img src="/components/images/art/STBType.png" 
                alt="STBType Application"
                width="300"
                height="339"
                class="art-image">
            </div>
            <div class="work-card-examples__text-wrapper align--left color--light">
                <h2>STB Type</h2>    

                <p>I created this application whilst working for QubeGB. I found it time consuming to continue looking through the vast table on paper to find the specific type of equipment by looking for a bar-code pattern.</p>

                <p>What you do is to simply scan the bar-code and it will search it\'s database, returning the type of STB for my paperwork. This has vastly improved my productivity.</p>
            </div>
        </div>

    </div>';


/**********************
 * 
 *  contact section
 *
 **********************/

echo '<div class="js-contactArticle language__wrapper margin-top-lg">
        
    <h2 class="text--center margin-bottom-sm color--white">Contact</h2>

    <div style="display: block;width: 80%;margin: auto;height: 500px;border:1px solid black;"></div>

</div>';



//  include footer
include './components/blocks/global-footer.php';
?>