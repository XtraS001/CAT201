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
        <li><a href = "View.php" >View</a></li>
      </ul>

        <div class = "time">
          <?php echo date("l F j, Y ", time());?>
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
          //  echo $x ;
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

.Menu li
{
  list-style-type: none;
  float: left;
  display: inline;
}

.Menu li a
{
  display: block;
  text-decoration: none;
  color:#c5dedd;
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
  text-decoration: none;
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
  margin: 0 0 0px;
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

</style>
</html>
