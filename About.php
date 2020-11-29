<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Impact, Charcoal, sans-serif;;
  margin: 0;
}

html {
  box-sizing: border-box;
}

.Menu {
  font-size: 20px;
  float: left;
  width: 100%;
  transform: translate(0%,-100%);
}
.Menu ul li {
  list-style-type: none;
  float: left;
  display: inline;
}
.Menu li a {
  display: block;
  text-decoration: none;
  color:RGB(119,240,210);
  font-family:verdana;
  border-right: 2px solid #FFFFFF;
  padding: 3px 10px;
  float: left;
}
.Menu li a:hover {
  background-color: #CCCCCC;
}
.Menu .time{
  text-decoration: none;
  color:#abc4ff;
  font-family:verdana;
  border-right: 2px solid #FFFFFF;
  padding: 3px 10px;
  float: right;
  font-size: 20px;
}

.box {
  position: relative;
  transform: translate(75%,10%);
  text-align: center;
  width: 40%;
  margin-bottom: 16px;
  padding: 20px;
  box-sizing: border-box;
  box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.5);
  background-image: url("card.jpg");
  background-attachment:fixed;
  background-size:cover;
}

.team {
  padding: 50px;
  background-color: #474e5d;
  color: white;
}


.Job {
  color: #b36a5e;
}

.Matric
{
  color: #00296b;
}
</style>
</head>
<body>
<div class="team">
  <center><h1>About Us</h1><center>
</div>
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
<center><h2>Our Team</h2></center>
  <div class="box">
    <div class="personal">
      <div class="information">
        <h2>Chin Xu Sheng</h2>
        <p class="Job">Designer</p>
        <p class = "Matric">12345</p>
      </div>
    </div>
  </div>

  <div class="box">
    <div class="personal">
      <div class="information">
        <h2>Lee Hui Ying</h2>
        <p class=" Job">Designer</p>
        <p class = "Matric">149044</p>
      </div>
    </div>
  </div>

</body>
</html>
