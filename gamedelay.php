<?php include('server.php');?>
<!DOCTYPE html>
<html>
<body>
<style>

#cf3 img {
	position:absolute;
	height: 100%;
	width:100%;
	left:0;
	top:0;
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
   -moz-transition: opacity 1s ease-in-out;
  transition: opacity 1s ease-in-out;
}

  @keyframes cf3FadeInOut {
  0% {
  opacity:1;
}
45% {
opacity:1;
}
55% {
opacity:0;
}
100% {
opacity:0;
}
}

#cf3 img.top {
animation-name: cf3FadeInOut;
animation-timing-function: ease-in-out;
animation-iteration-count: infinite;
animation-duration: 2s;
animation-direction: alternate;
}
</style>
<meta http-equiv="refresh" content="5; url=game123.html">
	<div class = "content">
	<?php if(isset($_SESSION['success'])): ?>
		<div class = "error success">
		<h3>
		<?php 
			echo $_SESSION['success'];
			unset($_SESSION['success']);
		?>
		</h3>
		</div>
	<?php endif ?>
	<?php if(isset($_SESSION["username"])): ?>
		<div id="cf3">
		<img class="bottom" src="watchdogs3.jpg" />
		<img class="top" src="uncharted.jpg" />
		<div style = "position:absolute;top:50px;left:130px;color:#ffffff;font-size:80px;"><?php print('We are fetching your games '.$_SESSION["username"]); ?></div>
		<div style  = "position:absolute;top:150px;left:140px;color:#ffffff;font-size:25px;">Please wait for <span id="countdowntimer">5 </span> Seconds</div>
		</div>
		<?php endif ?>
		</div>
<script>
    var timeleft = 5;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
</script>
</body>
</html>
		
	
	
