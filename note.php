<?php
    extract($_REQUEST);
    $filename = $title .".txt";
    if(!file_exists($filename))
    {
      $file1=fopen($filename,"w") or die("Failed to create file");
      fwrite($file1,"Title : ");
      fwrite($file1, $title ."\n");
      fwrite($file1,"Note : \n");
      fwrite($file1, $note ."\n");;
      fclose($file1);

      $file2 = fopen("storage.txt", "a") or die ("Failed to create file");
      fwrite($file2, $filename."\n");
      fclose($file2);
    }

    header("Location:Home.php");
?>
