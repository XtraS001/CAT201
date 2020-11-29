<?php
    function removeLn($str){


    $newStr = substr($str ,0 ,(strlen($str)-1));

    return $newStr;
   }
   //This function remove the last word in a String
   //EXP: echo removeLn("Hello");
   //Output: Hell
   function removetxt($str){
   $newStr = substr($str ,0 ,(strlen($str)-5));
   return $newStr;
  }
 ?>
