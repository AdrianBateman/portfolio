<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="description" content="Adrian Bateman, Website Developer, Full Stack Developer, Front End Developer, Back End Developer."/>
    <meta name="keywords" content="Website Developer, PHP, Javascript, Hybris, Amplience, CSS, HTML5, CSS3, OOPHP, Front End Developer, Back End Developer"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta property="og:type" content="og:website" />
    <meta property="og:title" content="Adrian Bateman - Full Stack Website Developer" />
    <meta property="og:image" content="/components/images/icon/signiture.svg" />
    <meta property="og:description" content="Adrian Bateman, Website Developer, Full Stack Developer, Front End Developer, Back End Developer." />
    <meta property="og:url" content="http://www.a-bateman.co.uk/" />
    
    <title>Adrian Bateman's Portfolio - Full Stack Website Developer</title>
    
    <!-- Icon Links -->
    <link rel="icon" href="/components/images/icon/a-bateman-icon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/components/images/icon/a-bateman-icon.ico" type="image/x-icon" />

    <!-- Style -->
    <style>
        <?php  
            include ('./components/style/css/main.css');
        ?>
    </style>

</head>

<body>
<?php  
    include('./components/blocks/global-menu.php');
?>

<div class="js-TopLinkTo header__wrapper">
    <picture>
        <source media="(max-width: 699px)" srcset="/components/images/backgrounds/halfwayBackground-720.webp" type="image/webp">
        <source media="(max-width: 699px)" srcset="/components/images/backgrounds/halfwayBackground-720.jpg" type="image/jpeg"> 
        <source media="(min-width: 700px)" srcset="/components/images/backgrounds/halfwayBackground-1152.webp" type="image/webp">
        <source media="(min-width: 700px)" srcset="/components/images/backgrounds/halfwayBackground-1152.jpg" type="image/jpeg"> 
        <img src="/components/images/backgrounds/halfwayBackground-1152.jpg" alt="Adrian Bateman's Portfolio" class="background-image">
    </picture>
    
    <div class="column header__logo-wrapper text--center">
        <h1 class="header__text header--title">Adrian Bateman</h1>
        <h2 class="header__text">Website Developer</h2>
    </div>
</div>
