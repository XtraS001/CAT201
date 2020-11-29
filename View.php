<!DOCTYPE html>
<html lang ="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <meta charset="utf-8">
    <title>Take a Note</title>
  </head>
  <header>
    <div class = "note">Your Note</div>
  </header>
  <body>
    <div class = "Menu" >
      <ul>
        <li><a href = "Home.php"> Home </a></li>
        <li><a href = "About.php"> About </a></li>
        <li><a href = "View.php" >view</a></li>
      </ul>

        <div class = "time">
          <?php echo date("l F j, Y ", time());?>
        </div>

    </div>
    <div>
      <button class = "openButton" type = "button" onclick = "openNOTES()"> Delete Note </button>
      <div id = "deleteNote" class="openDeleting">
        <form class = "notepad" action = "delete.php" method = "post">
          <h2>Deletion</h2>
          <button class = "extraButton" type = "button" onclick = "closeNOTES()"> X </button>
           <div class="keyin">
             <input type="text" name="title" autocomplete="off" required>
             <label >Title</label>
           </div>
           <div>
           <button type ="submit" class = "closeButton" action> Delete </button>
         </div>
         </form>
      </div>
    </div>
    <?php
      include "removeNextL.php" ;
      $noteArr = array("string ") ;
      $x = 0;
      $file = fopen("storage.txt", "r") or die("Unable to open file!");
      if($file)
      {
        while(!feof($file)) {
          $str = fgets($file);
          $noteArr[$x] = $str ;
          $noteArr[$x] = removeLn($noteArr[$x]);
          $x++;
        }
      }
      fclose($file);

      $x--;
      if($x >= 0)
      {
            for($i=0; $i < $x ; $i++)
            {
              echo "<br><div class = 'retrieve'>";
                $file = fopen($noteArr[$i], "r") or die("Unable to open file!");
                if($file)
                {
                  echo "<h2>";
                  $note = fgets($file);
                  echo $note;
                  echo "</h2>";
                  echo "<div class = 'inside'>";
                    echo "<h4>";
                      $note = fgets($file);
                      echo $note;
                      echo "</h4>";
                      echo "<div class = 'insideContent'>";
                      while(!feof($file))
                      {
                        $note = fgets($file);
                        echo "<br>";
                        echo $note;
                      }
                      echo "</div>";
                  echo "</div>";
                  fclose($file);
                }
              echo "</div>";
            }
      }
?>

<?php
  function deletefile($title)
  {
    $filename = $title .".txt";
    if(file_exists($filename))
    {
      unlink($filename);
      unlink("storage.txt", $filename);
    }
  }
 ?>
 <script>
   function openNOTES()
   {
     document.getElementById("deleteNote").style.display = "block";
   }

   function closeNOTES()
   {
     document.getElementById("deleteNote").style.display = "none";
   }

 </script>
</body>

<style>

/*design of header */
header
{
  text-align: center;
  width:100%;
  height:100px;
  margin:0;
  background:#536b78;
  padding: 20px;
}

/* Design the background and the whole design of the body */
body
{
  margin:0;
  font-family: Arial, Helvetica, sans-serif;
  background-image:url("mountain1.jpg");
  background-attachment:fixed;
  background-size:cover;
}

.note
{
  width:100%;
  float:left;
  font-weight: bold;
  color:#ffb627;
  text-transform:uppercase;
  line-height:60px;
  font-size:35px;
  font-family: courier;
}

.Menu
{
  font-size: 20px;
  float: left;
  width: 100%;
  transform: translate(0%,-100%);
}
.Menu ul li
{
  display: inline;
}

.Menu li a
{
  text-decoration: none;
  color:RGB(119,240,210);
  font-family:verdana;
  border-right: 2px solid #FFFFFF;
  padding: 3px 10px;
  float: left;
}

.Menu li a:hover
{
  background-color: #CCCCCC;
}

.Menu .time
{
  color:#abc4ff;
  font-family:verdana;
  border-right: 2px solid #FFFFFF;
  padding: 3px 10px;
  float: right;
  font-size: 20px;
}

.retrieve
{
  position:relative;;
  transform: translate(50%,0%);
  margin : 30px 20px;
  float: left;
  width: 33.3%;
  padding: 10px;
  background: rgba(116, 234, 255, 0.3);
  box-sizing: border-box;
  box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.5);
  word-wrap:break-word;
  border-radius:5px;
}

.retrieve h2
{
  padding: 0px;
  color: #73ba9b;
  text-align: center;
}

.retrieve .inside
{
  padding: 10px;
  color: #2d6a4f;
  background: rgba(255, 240, 236, 0.5);
  box-sizing: border-box;
  height: 200px;
  box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.5);
  overflow-y: scroll;
}

.openDeleting
{
  display: none;
}
.notepad{
  position: relative;
  left: 50%;
  transform: translate(-50%,-10%);
  width: 70%;
  padding: 20px;
  margin:0;
  background: rgba(255, 240, 236, 0.5);
  box-sizing: border-box;
  box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.5);
  border-radius: 30px;
}

.notepad input:{
  position: sticky;
  margin-top:100px;
  top: 200%;
  left: 50%;
  width: 70%;
  padding: 50px;
  background: rgba(255, 240, 236, 0.5);
  box-sizing: border-box;
  box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.5);
  border-radius: 30px;
}

/*  design the h2 word */
.notepad h2{
  margin: 0 0 5px;
  padding: 0px;
  color: #880d1e;
  text-align: center;
}
/* design position of the output word */
.notepad .keyin{
  position: relative;
}

/* design the input place */
.notepad .keyin input{
  width: 100%;
  padding: 5px 5px;
  font-size: 16px;
  color: rgb(188, 110, 144);
  letter-spacing: 1px;
  margin-bottom: 30px;
  border: none;
  outline: none;
  background: transparent;
  border-bottom: 1px solid #fff;
}

/* design the output to promt user key in */
.notepad .keyin label{
  position: absolute;
  transform: translate(0%,-80%);
  top: 0;
  left: 0;
  letter-spacing: 1px;
  padding: 10px 0px;
  font-size: 30px;
  color: #004e98;
  transition: .5s;
}
.notepad .keyin input:focus ~ label,
.notepad .keyin input:valid ~ label{
  top: -18px;
  left: 0px;
  color: rgb(188, 110, 144);
  font-size: 20px;
}
.openButton[type = "button"]
{
  position: relative;
  background: transparent;
  border: none;
  outline: none;
  color: #fff;
  background: #bc4749;
  cursor:pointer;
  padding:20px 30px;
  border-radius: 100%;
}
.extraButton[type = "button"]
{
  position: relative;
  transform: translate(200%,-300%);
  background: transparent;
  border: none;
  outline: none;
  color: #fff;
  background: #bc4749;
  cursor:pointer;
  padding:10px 20px;
  border-radius: 100%;
}

.closeButton[type="submit"]
{
  border: none;
  outline: none;
  color: #fff;
  background: #a11d33;
  padding: 10px 20px;
  border-radius: 5px;
}
.openButton[type="button"]:hover,
.extraButton[type="button"]:hover,
.closeButton[type="submit"]:hover{
  background-color:#DCDCDC ;
}
</style>
</html>
