<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("pubg.jpg");
    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	}

.bg {
  overflow: hidden;
}

.bg a {
  float:left;
  color: white;
  font-family:Poppins-Regular;
  text-align: center;
  padding: 15px 15px;
  text-decoration: none;
  font-size: 20px;
}
.bg-centred a
{
  float: none;
  position: absolute;
  top: 4%;
  left: 18%;
  transform: translate(-50%, -50%);
}
.bg-centredgames a
{
  float: none;
  position: absolute;
  top: 4%;
  left: 24.8%;
  transform: translate(-50%, -50%);
}
.bg-centredgames1 a
{
  float: none;
  position: absolute;
  top: 4%;
  left: 31%;
  transform: translate(-50%, -50%);
}
.bg-centredgames2 a
{
  float: none;
  position: absolute;
  top: 4%;
  left: 47%;
  transform: translate(-50%, -50%);
}
.bg-centredgames3 a
{
  float: none;
  position: absolute;
  top: 4%;
  left: 54.5%;
  transform: translate(-50%, -50%);
}
.bg-centredgames4 a
{
  float: none;
  position: absolute;
  top: 4%;
  left: 61%;
  transform: translate(-50%, -50%);
}
.bg-centredgames5 a
{
  float: none;
  position: absolute;
  top: 4%;
  left: 87%;
  transform: translate(-50%, -50%);
}
.bg-centredgames6 a
{
  float: none;
  position: absolute;
  top: 4%;
  left: 95%;
  transform: translate(-50%, -50%);
}
.bg a:hover {
  color: white;
}
.bg-right {
  float: right;
}
.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.bg a:hover, .dropdown:hover .dropbtn {
	color: white;
	background-color:#f72020;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
	background-color: black;
	color:white;
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
	background-color:grey;
	opacity:0.9;
	color:white;
}

.dropdown:hover .dropdown-content {
	display: block;
}
@font-face { font-family: Poppins-Regular; src: url('Poppins-Regular.otf'); } 
    .poppins { font-family: Poppins-Regular; font-size: 4.2em; }
.topnav .search-container {
  float: right;
}

</style>
</head>
<body>
<div class="bg">
  <div class ="bg-centredgames"><a href="gamedelay.php">GAMES</a></div>
  <div class ="bg-centred"><a href="#">HOME</a></div>
  <div class="dropdown">
    <button class="dropbtn" style = "position:absolute;top:-2px;left:450px;font-size:20px;"><font face="Poppins-Regular">MERCHANDISE &darr;</font> 
    </button>
    <div class="dropdown-content" style= "position:absolute;top:50px;left:450px;">
      <a href="lol1.html"><font color="white";>For Him</font></a>
      <a href="forher.html"><font color= "#FF1493";>For Her</font></a>
	</div>
	</div>
  <div class ="bg-centredgames2 "><a href="careersgames.html">CAREERS</a></div>
  <div class ="bg-centredgames3 "><a href="about.html">ABOUT</a></div>
  <div class ="bg-centredgames4 "><a href="#">FORUM</a></div>
  <div class ="bg-centredgames5 "><a href="#"><?php print($_SESSION["username"]); ?></a></div>
  <div class ="bg-centredgames6 "><a href="33.php?logout='1'">Logout</a></div>
  <img id = "theImage" style="position:absolute; BOTTOM:1px; right:55.2px" SRC="speakerplay.gif">
<img id = "theImageo" style="position:absolute; BOTTOM:1px; right:0px" SRC="speakerstop.gif">
<audio id="audio" src="Interstellar.mp3" ></audio>
 </div>
<script>
	  var audio = document.getElementById("audio");
      var img = document.getElementById("theImage");
	  var imgo = document.getElementById("theImageo");

      document.addEventListener("click", function(e){
         if( e.target === img ){
           audio.src = "Interstellar.mp3";
           audio.play();
         }
		 else if (e.target === imgo){
			audio.src = "";
            audio.play();
		 }
		},true);
</script>
</body>
</html>
