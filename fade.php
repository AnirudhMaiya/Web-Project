<!DOCTYPE html>
<html>
<body>
<style>
body, html {
    height: 100%;
}
#cf3 {
  

    
    
}

#cf3 img {
	position:absolute;
	height: 100%;
	width:100%;
	left:0;
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  margin:0 auto;
  -webkit-transition: opacity 1s ease-in-out;
  -moz-transition: opacity 1s ease-in-out;
  -o-transition: opacity 1s ease-in-out;
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
<div id="cf3">
  <img class="bottom" src="watchdogs.jpg" />
  <img class="top" src="watchdogs2.jpg" />
  </div>
</body>

</html>