<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Adrian Bateman's Portfolio</title>
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <link type="text/css" rel="stylesheet" href="/components/style/css/main.css" >
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
</head>
<body>
<a href="/" class="header__wrapper">
  <h1 class="header__title">Adrian Bateman</h1>
  <p class="header__text">Website Developer</p>
</a>

<div class="navigation__wrapper">
  <a href="/" class="navigation__item navigation--<?php if($active == "home"){echo 'active';} ?>">Home</a>
  <a href="/work.php" class="navigation__item navigation--<?php if($active == "work"){echo 'active';} ?>">Work</a>
  <a href="/skills.php" class="navigation__item navigation--<?php if($active == "skills"){echo 'active';} ?>">Skils</a>
  <a href="/bio.php" class="navigation__item navigation--<?php if($active == "bio"){echo 'active';} ?>">Bio</a>
  <a href="/hobbies.php" class="navigation__item navigation--<?php if($active == "hobbies"){echo 'active';} ?>">Hobbies</a>
</div>
