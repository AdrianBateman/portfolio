<?php
  $active = "home";

  include('./components/blocks/global-header.php');

  include('./components/functions/global-functions.php');

  echo '<div class="language__wrapper">';
  
  $skillsJsonObj = new loadJsonFile();

  $skillsJsonObj -> set_FileUrl("./components/data/json/skills.json");

  $skillsJsonData =  $skillsJsonObj -> get_jsonArr();

  foreach ($skillsJsonData['skills'] as $key ){
    
     echo '
     <a href="'. $key['url'] .'" target="_blank" title="'. $key['title'] .'" class="language__item">

      <p class="language__title">'. $key['title'] .'</p> 

      <img src="'. $key['image'] .'" width="'. $key['width'] .'" height="40" alt="'. $key['alt'] .'" class=""> 

     </a>';

  }
?>


  </div>

  <div class="article__wrapper">
    <img src="" width="" height="">

  </div>
  <?php
  include('./components/blocks/global-footer.php');
?>