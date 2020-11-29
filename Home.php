
<html lang ="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <meta charset="utf-8">
    <title>Take a Note</title>
  </head>
  <header>
    <div class = "note">NoteBook</div>
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
    <div id = "mario">
        <img src = "mario.gif" class = "mario" alt ="">
        <div class = "notification">
        <center><h1> Welcome to 201 NOTES</h1></center>
        <center><p><h3>Click on the "Add Note" button to add your note</h3></p></center>
        </div>
    </div>
    <button class = "openButton" type = "button" onclick = "openNOTES()"> Add Note </button>
    <div id = "addNote" class="openAdding">
      <mark><center><p><h3>Notice: The same title cannot be saved</h3></p></center>
      <center><p><h3>Please check the title in the View page</h3></p></center>
      <center><p><h3>'storage' is a reserved title</h3></p></center></mark>
      <button class = "extraButton" type = "button" onclick = "closeNOTES()"> X </button>
      <form class = "notepad" action="note.php" method = "post">
        <h2>Notes</h2>
         <div class="keyin">
           <input type="text" name="title"  autocomplete="on" required>
           <label >Title</label>
         </div>

          <div class="con">
           <textarea type="text" name="note" value = "note" placeholder="Write something.." autocomplete="off" required></textarea>
           <label>Note</label>
         </div>
         <div>
           <button type ="submit" class = "closeButton"> Save </button>
           <button type = "reset" class = "closeButton"> Clear</button>
         </div>
       </form>
    </div>
    <script>
      function openNOTES()
      {
        document.getElementById("addNote").style.display = "block";
      }

      function closeNOTES()
      {
        document.getElementById("addNote").style.display = "none";
        document.getElementById("addNote").value = '';
      }

    </script>
  </body>
  <footer id="footer">
    <center><p>About us</p></center>
    <center><br>CAT 201</center>
    <center>2020</center>
  </footer>
  <style>
  header{
  position: fixed;
  width:100%;
  height:100px;
  margin:0;
  background:#333234;
  padding:0 30px;
  }
  body{
    margin:0;
    font-family: Arial, Helvetica, sans-serif;
    background-image:url("colourful.png");
    background-attachment:fixed;
    background-size:cover;
  }
  .note{
    width:100%;
    float:left;
    font-weight: bold;
    color:RGB(218, 178, 181) ;
    text-transform:uppercase;
    line-height:95px;
    font-size:60px;
    font-family: courier;
    position: fixed;
  }
  .Menu {
    position: fixed;
    font-size: 20px;
    float: left;
    margin-top: 100px;
    width: 100%;
    background-color: RGB(81, 55, 0,0.8);
  }
  .Menu ul li {
    list-style-type: none;
    float: left;
    display: inline;
  }
  .Menu li a {
    display: block;
    text-decoration: none;
    color:#e26d5c;
    font-family:verdana;
    border-right: 2px solid #FFFFFF;
    padding: 3px 10px;
    float: left;
    font-size: 30px;
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
    font-size: 30px;
  }

  #mario{
    text-align:right;
  }
  #mario .mario{
    position:relative;
    transform: translate(0%,60%);
    opacity: 0.8;
    border-radius: 100%;
    height:250px;
    width: 250px;
  }

  #mario .notification{
    font-family:Courier, monospace;
    font-size: 30px;
    color:#15616d;
    transform: translate(0%,-50%);
  }

  /* design the form  */
  .openAdding
  {
    display: none;
  }
  .openAdding h3
  {
    font-family:Courier, monospace;
    font-size: 25px;

    color:#800000;
    transform: translate(0%,-300%);
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

  /*  design the login word */
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

  .notepad .con input{
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

  .notepad .con label{
    position: absolute;
    transform: translate(25%,135%);
    top: 0;
    left: 0;
    letter-spacing: 1px;
    padding: 9px 3px;
    font-size: 30px;
    color: #004e98;
    transition: .5s;
  }

  textarea {
    transform: translate(10%,0%);
    width: 80%;
    height: 300px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color:rgba(255, 240, 236, 0.5);
    resize: none;
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
    position: absolute;
    transform: translate(50%,-10%);
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
  .closeButton[type="submit"]{
    border: none;
    outline: none;
    color: #fff;
    background: #4c956c;
    padding: 10px 20px;
    border-radius: 5px;
    cursor:pointer;
  }

  .closeButton[type="reset"]
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
  .closeButton[type="submit"]:hover,
  .closeButton[type="reset"]:hover{
    background-color:#DCDCDC ;
  }

  #footer {
    position: absolute;
    transform: translate(0%,226%);
    width: 100%;
    height:15%;
    color: white;
    text-align: center;
    background-color: #495867;
    margin-bottom: 0px;
  }
  #footer center{
    font-size : 15px;
  }
  </style>
</html>
