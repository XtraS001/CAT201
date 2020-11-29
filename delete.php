<?php
  include "removeNextL.php" ;
  extract($_REQUEST);
  $filename = $title .".txt";
    if(file_exists($filename))
    {
      $noteArr = array("string ") ;
      $x = 0;
      $file = fopen("storage.txt", "r") or die("Unable to open file!");
      if($file)
      {
        while(!feof($file))
        {
          $str = fgets($file);
          $noteArr[$x] = $str;
          $noteArr[$x] = removeLn($noteArr[$x]);
          $x++;
        }
        $x--;
      }
      fclose($file);
      $file = fopen("storage.txt", "w") or die("Unable to open file!");
      for($i=0; $i < $x ; $i++)
      {
            if($noteArr[$i] != $filename)
            {
              fwrite($file, $noteArr[$i]."\n");
            }

      }
      fclose($file);
      unlink($filename);
    }
  header("Location:View.php");
 ?>
