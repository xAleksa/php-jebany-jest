<?php
	 
	 session_start();
	
	
	?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Sprzedaż części AleksCar</title>
	
		
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	
	
	<style>
	@import url('https://fonts.googleapis.com/css?family=Josefin+Sans|Lato&subset=latin-ext');
	</style>
	
</head>

<SCRIPT language="javascript" type="text/javascript">

//Ukrycie przed przeglÄ…darkami nie obsĹ‚ugujÄ…cymi JavaScriptĂłw

var MSIE = navigator.appName == "Microsoft Internet Explorer"?true:false;
var NN = navigator.appName == "Netscape"?true:false;
function blockMouseClick(evt)
{
  if(MSIE && (event.button == 2)){
      alert("Blokada prawego przycisku myszy");
      return false;
  }
  else if(NN && ((evt.which == 2) || (evt.which == 3))){
      alert("Blokada prawego przycisku myszy");
      return false;
  }
}
document.onmousedown=blockMouseClick;

</SCRIPT>


<body 


	background="img/droga.jpg"
	
	link="white" vlink="white" alink="white"

	<div id="container"></div>
	
		<div class="rectangle">
			<div id="logo"> <a href="index.php" class="logo">
			<img src="img/ikona.png"/></br></br><b><span style="font-size: medium">AleksCar</span></b></a></div>
			
		
				
		<div id="menu">
				


		        
		        <div class="tile1">
					<a href="logadm.php" class="tilelink"><font color="black"><i class="icon-wpforms"></i>AdminLogIn</a>
				</div>
				<div class="tile1">
					<a href="czesci.php" class="tilelink"><font color="black"><i class="icon-cab"></i>Części</a>
				</div>
				<div class="tile1">
					<a href="lokalizacja.php" class="tilelink"><font color="black"><i class="icon-wpforms"></i>Lokalizacja</a>
				</div>
				<div class="tile1">
					<a href="index.php" class="tilelink"><font color="black"><i class="icon-flag-checkered"></i>Start</a>
				</div>
				<div class="tile1">
				
				
				
					<a href="wyloguj.php" class="tilelink"><font color="black"><i class="icon-flag-checkered"></i>Wyloguj</a>
				</div>
				<div class="tile1">
					<a href="log.php" class="tilelink"><font color="black"><i class="icon-mail"></i>Zaloguj</a>
				</div>
		</div>
			<div style="clear: both;"></div>
			</div>
		
		<div class="square">
			<div class="tile2"><font color="black" align="center">
<br><br><br>
Sukces!<br><br>
		
		Zamówienie zostało złożone, zapraszamy po odbiór do naszego sklepu stacjonarnego! (Niezapominajki 8 w Łodzi) Więcej informacji znajduje się w zakładce Lokalizacja.<br><br><br><br>
		
	


  <a target="blank" href="https://www.facebook.com/" ><font color="black"><i class="icon-facebook-rect"></i>Zajrzyj na naszego fanpage'a</a>

</div>
		
		</div>
		
	<div id="zegarek" style="FONT-WEIGHT:bold;font-size: 34px;;COLOR:white; text-align:center;"></div>
<script type="text/javascript">

function zegar() {
var data = new Date();
var godzina = data.getHours();
var min = data.getMinutes();
var sek = data.getSeconds();
 var terazjest = ""+godzina+
((min<10)?":0":":")+min+
((sek<10)?":0":":")+sek;
document.getElementById("zegarek").innerHTML = terazjest;
setTimeout("zegar()", 1000); }
zegar();

</script>	
		<div class="rectangle2"><font color="white">2021 &copy; Aleksandra Kordalewska <a href="mailto:aleksandra.kordalewska@gmail.com" <font color="white"><i class="icon-mail-alt"></i>aleksandra.kordalewska</div>		
		
</body>


</html>
