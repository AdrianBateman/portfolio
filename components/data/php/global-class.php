<?php

class loadJsonFile
{
    public $fileURL;

    public function set_FileUrl($new_fileURL){
        $this -> fileURL = $new_fileURL;
    }

    public function get_jsonArr(){

        $string = file_get_contents($this -> fileURL);

        $json = json_decode($string, true);

        return $json;
    }
}

?>