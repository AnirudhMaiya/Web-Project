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
    background-image: url("best-nature-image-2560x1440.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.container {
    position: relative;
    text-align: center;
    color: white;
}

.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 16px;
}

.top-left {
    position: absolute;
    top: 8px;
    left: 16px;
}

.top-right {
    position: absolute;
    top: 8px;
    right: 16px;
}

.bottom-right {
    position: absolute;
    bottom: 8px;
    right: 16px;
}

.centered {
    position: absolute;
	left : 500px;
    top :205px;
	text-align :center;
}
input[type=text]{
	position:absolute;
	width: 25%;
	top:25%;
	right:36.7%;
    padding: 21px 20px;
    margin: 8px 0;
	background: transparent;
    border: none;
	background-color: rgba(0,0,0, 0.5);
}
::placeholder {
    color: white;
    opacity: 1; /* Firefox */
}
input.example {
        border: none;
        font-size: 16px;
		position:absolute;
		width: 25%;
		top:38%;
		right:36.7%;
		padding: 21px 20px;
		margin: 8px 0;
		background: transparent;
		border: none;
		background-color: rgba(0,0,0, 0.5);
}
input.op {
        border: none;
        font-size: 16px;
		position:absolute;
		width: 25%;
		top:51%;
		right:36.7%;
		padding: 21px 20px;
		margin: 8px 0;
		background: transparent;
		border: none;
		background-color: rgba(0,0,0, 0.5);
}
input.lulu {
        border: none;
        font-size: 16px;
		position:absolute;
		width: 25%;
		top:64%;
		right:36.7%;
		padding: 21px 20px;
		margin: 8px 0;
		background: transparent;
		border: none;
		background-color: rgba(0,0,0, 0.5);
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  position:absolute;
  top:82%;
  left:36.5%;
  color: #FFFFFF;
  text-align: center;
  font-size: 22px;
  padding: 16px;
  width: 385px;
  border-radius:35px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.button:hover{
background:rgb(0,0,0,0.5);
}
.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.error{
	width:92%;
	margin :0px auto;
	padding:10px;
	border:1px solid #a94442;
	color:#a94442;
	background : #f2dede;
	border-radius:5px;
	text-align :left;
}
</style>
</head>
<body>
<div style = "position:absolute ;top:75px;left :655px;color:#ffffff;font-size:50px;font-family:Impact, Charcoal, sans-serif;">Register</div>
<form method="post" action="register.php">
	<?php include('errors.php');?>
	<input type="text" placeholder="                       User Name" name="username" value = "<?php echo $username;?>" style="font-family: Arial;color: #ffffff;font-weight: 200;font-size: 18px;"  autofocus required>
	</input> 
	<input class = "example" type="text" placeholder="                         Email-Id" name="email" value = "<?php echo $username;?>" style="font-family: Arial;color: #ffffff;font-weight: 200;font-size: 18px;"  required>
	</input> 
	<input class = "op" type="password" placeholder="                         Password" name="password_1" style="font-family: Arial;color: #ffffff;font-weight: 200;font-size: 18px;"  required>
	</input>
	<input class = "lulu" type="password" placeholder="                    Confirm Password" name="password_2" style="font-family: Arial;color: #ffffff;font-weight: 200;font-size: 18px;"  required>
	</input>
		<button class = "button" name = "register"type="submit";><span>REGISTER</span></button>

</form>
<div class="bg"></div>

</body>
</html>
