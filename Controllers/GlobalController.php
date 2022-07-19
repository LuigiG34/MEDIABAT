<?php 

namespace App\Controllers;
use Exception;

abstract class GlobalController
{
    static public function ajoutImage($file,$dir)
    {
        if(isset($_POST['valider'])){
            if(!file_exists($dir)){
                mkdir($dir,0777);
                }
    
                $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

                $titre = str_replace(" ", "_",$file['name']);
                $target_file = $dir.$titre;
    
                if(!getimagesize($file['tmp_name'])){
                    throw new Exception("error");
                }
    
                if($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png"){
                    throw new Exception("error format");
                }
    
                if($file['size'] > 1000000){
                    throw new Exception("error size");
                }
    
                move_uploaded_file($file['tmp_name'], $target_file);
                $name = $dir.$titre;

                return $name;
        } 
    }
}

?>