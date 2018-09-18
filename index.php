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

echo '<div id="mainContent" class="js-languagesArticle language__wrapper background--black">
        
        <h2 class="text--center color--white">Languages</h2>

        <div class="language__inner-wrapper color-light">';


foreach ($jsonData['languages'] as $key) {
    $starImages = "";
    $i = 0;
    while ($i++ < $key['competency'])
    {
        $starImages .= '<img src="components/images/star.svg" alt="Star review '.$i.'" width="20" height="18.4">'; 
    }
    
    $imageWebp = "";
    if ($key['image-webp'] != ""){
        $imageWebp = '<source srcset="' . $key['image-webp'] . '" type="image/webp">';
    }

    echo '
            <a href="' . $key['url'] . '" target="_blank" rel="noopener" title="' . $key['title'] . '" class="language__item">

                <picture class="width--40">
                    '.$imageWebp.'
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
                <a href="'.$key['link'].'" target="_blank" rel="noopener" title="'.$key['title'].'" class="work-card__title--small" style="color:#335554;">'.$key['link-text'].'</a>

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
                
                        <div class="work-card-examples__text-wrapper align--'.$value['text-direction'].' color--light">
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
?>
<div class="js-skillsArticle language__wrapper skills__wrapper">
    
    <h2 class="text--center color--white">Skills</h2>
    
    <picture>
        <source media="(max-width: 699px)" srcset="/components/images/backgrounds/header-background-720.webp" type="image/webp">
        <source media="(max-width: 699px)" srcset="/components/images/backgrounds/header-background-720.jpg" type="image/jpeg"> 
        <source media="(min-width: 700px)" srcset="/components/images/backgrounds/header-background-1350.webp" type="image/webp">
        <source media="(min-width: 700px)" srcset="/components/images/backgrounds/header-background-1350.jpg" type="image/jpeg"> 
        <img src="/components/images/backgrounds/header-background-1350.jpg" alt="Adrian Bateman's Portfolio" class="background-image">
    </picture>

    <div class="language__inner-wrapper color--light">

<?php
foreach ($jsonData['skills'] as $key) 
{
    $starImages = "";
    $i = 0;
    while ($i++ < $key['competency'])
    {
        $starImages .= '<img src="components/images/star.svg" alt="A yellow star '.$i.'" width="20" height="18.4">'; 
    }

    $imageWebp = "";
    if ($key['image-webp'] != ""){
        $imageWebp = '<source srcset="' . $key['image-webp'] . '" type="image/webp">';
    }

    echo '
            <a href="' . $key['url'] . '" target="_blank" rel="noopener" title="' . $key['title'] . '" class="language__item">

                <picture class="width--40">
                    '.$imageWebp.'
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

?>
    </div>
</div>

<div class="js-hobbiesArticle hobbies__wrapper">
    <h2 class="text--center">Hobbies</h2>
    <h3>Art</h3>
    <div class="work-card-examples">
        <div class="work-card-examples__image-wrapper text--center art-card">
            <img src="/components/images/art/natural_healing_logo_by_abateman1982-400-ph.jpg" 
                data-src="/components/images/art/natural_healing_logo_by_abateman1982-400.jpg"
                data-srcset="/components/images/art/natural_healing_logo_by_abateman1982-400.jpg"
                alt="Natural Healing Logo"
                width="400"
                height="220"
                class="art-image lazy">
        </div>
        <div class="work-card-examples__text-wrapper align--center color--light art-card">
            <img src="/components/images/art/corvette_z06_line_art_by_abateman1982-400-ph.png" 
                data-src="/components/images/art/corvette_z06_line_art_by_abateman1982-400.png"
                data-srcset="/components/images/art/corvette_z06_line_art_by_abateman1982-400.png"
                alt="Corvette Z06"
                width="400"
                height="283"
                class="art-image lazy">
        </div>
    </div>
    <div class="work-card-examples">
        <div class="work-card-examples__image-wrapper text--center order--1 art-card">
            <img src="/components/images/art/AlphaCleanLogo.png" 
                alt="Alpha Cleaning logo"
                width="400"
                height="123"
                class="art-image">
        </div>
        <div class="work-card-examples__text-wrapper align--left color--light art-card">
            <img src="/components/images/art/mugen_civic_typer_by_abateman1982-400-ph.png" 
                data-src="/components/images/art/mugen_civic_typer_by_abateman1982-400.png"
                data-srcset="/components/images/art/mugen_civic_typer_by_abateman1982-400.png"
                alt="Mugen Civic TypeR"
                width="400"
                height="283"
                class="art-image lazy">
        </div>
    </div>

    <h3>Mobile Apps</h3>
    <div class="work-card-examples">
        <div class="work-card-examples__image-wrapper text--center">
            <img src="/components/images/art/STBType-ph.png"
            data-src="/components/images/art/STBType.png" 
            data-srcset="/components/images/art/STBType.png" 
            alt="STBType Application"
            width="300"
            height="339"
            class="art-image lazy"
            style="max-width:300px;">
        </div>
        <div class="work-card-examples__text-wrapper align--left color--light">
            <h2>STB Type</h2>    

            <p>I created this application whilst working for QubeGB. I found it time consuming to continue looking through the vast table on paper to find the specific type of equipment by looking for a bar-code pattern.</p>

            <p>What you do is to simply scan the bar-code and it will search it's database, returning the type of STB for my paperwork. This has vastly improved my productivity.</p>
        </div>
    </div>

</div>

<div class="js-contactArticle language__wrapper">
    <h2 class="text--center">Contact</h2>
    <table class="contact__table">
        <caption>Contact details</caption>
        <tbody>
            <tr>
                <td>Email:</td>
                <td><a href="mailto:adrian@a-bateman.co.uk">Adrian@A-Bateman.co.uk</a></td>
            </tr>

            <tr>
                <td>Location:</td>
                <td>Hampshire - Farnborough - UK</td>
            </tr>
        </tbody>
    </table>  
</div>

<?php
//  include footer
include './components/blocks/global-footer.php';
?>