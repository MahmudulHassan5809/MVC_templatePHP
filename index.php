
<?php 
 //include_once "system/lib/Main.php";
spl_autoload_register(function($class){
  include_once "system/lib/".$class.".php";


});
 include_once "app/config/config.php";

 //$main=new Main();
?>
<?php 
  
  $main= new Main();







 //include 'app/controllers/'.$url[0].'.php';

   //$mahmudul=new $url[0]();
 //$a=$url[1];
 // $method = $url[1]; 
 // $para=$url[2];
  //$mahmudul->$method($para);﻿
  
 //$mahmudul->$url[1]($url(2));﻿

 //$mahmudul->$url[1]();
   /*echo "<pre>";
   print_r($url);
   echo "<pre>";*/

?>


















