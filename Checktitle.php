<?php
    function Checktitle($file){
      if (file_exists($file)) {
        echo "The title existed.";
        return 1;
      }
   }
 ?>
