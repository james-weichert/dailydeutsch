<!DOCTYPE html>
<html>
<head>
<title>Daily Deutsch</title>

<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500" rel="stylesheet">

<link rel="shortcut icon" type="image/png" href="New Assets/GermanFlag.ico"/>

<script src="Finalgerman.js" charset="utf-8"></script>

<meta charset="utf-8"/>

	<style type="text/css">

body {
	overflow-x: hidden;
	/*overflow-y: hidden;*/
	font-family: 'Roboto', sans-serif;
}

#header {
	width: 100%;
	position: absolute;
	height: 25vh;
	left: 0;
	top: 0;
	z-index: 3;
}

#topBlue {
	background-color: #39A2AE;
	height: 75%;

}

#bottomBlue {
	background-color: #34949F;
	height: 25%;
}

#logo {
	height: 70%;
	display: block;
	margin: auto;
	padding-top: 2.7vh;
}

table {
	height: 100%;
	padding: 0;
	border-spacing: 0;
}

td img {
	
	height: 5vh;
	display: block;
	margin-left: auto;
	margin-right: auto;
}

td {
	height: 100%;
	width: 33.3vw;
	border-spacing: 0;
	padding: 0; margin: 0;

}

tr {
	height: 100%;
	padding: 0;
	border: 0;
}


#tdOne:hover {

	background-color: #328E99;
}
#tdTwo:hover {
	background-color: #328E99;
}
#tdThree:hover {
	background-color: #328E99;
}

#main {
	top: 0;
	margin-top: 30vh;
	color: #444444;
	text-align: center;
	margin-left: 5vw;
	margin-right: 5vw;
}

.instr {
	font-weight: 300;

}

#mainInstr {
	display: inline-block;
	font-size: 3vh;
	line-height: 3.5vh;
	margin-bottom: -2vh;

}

#answers {
	font-size: 5vh;
	line-height: 5vh;
	font-weight: 500;
}

#germanButton {
	color: #FFF;
	background-color: #39A2AE;
	display: inline-block;

	border-radius: 0.15vw;

	font-size: 4vh;
	line-height: 5vh;
	font-weight: 300;

	 -webkit-box-shadow: 1px 1px 2px #aaa;
     -moz-box-shadow: 1px 1px 2px #aaa;
          box-shadow: 1px 1px 2px #aaa;
}

#germanButton:hover {
	background: #34949F;

	-webkit-box-shadow: inset 0px 0px 4px #aaa;
     -moz-box-shadow: inset 0px 0px 4px #aaa;
          box-shadow: inset 0px 0px 4px #aaa;
}

#uben {
	padding-left: 2vw;
	padding-right: 2vw;
	line-height: 0.5vh;
}

#wort {
	-webkit-transition: opacity 0.5s; /* Safari */
            transition: opacity 0.5s;

    line-height: 4vh;
}
#artikel {
	-webkit-transition: opacity 0.5s; /* Safari */
            transition: opacity 0.5s;

    line-height: 4vh;
}
#level {
	margin-top: 7vh;
}

#levelTable {
	display: inline-block;
	height: 5vh;
}
#levelTable td {
	width: 13vh;
	border-spacing: 10%;
	font-weight: 500;
}
#levelTable p {
	width: 10vh;
	margin-left: auto;
	margin-right: auto;
}
#tdMeanings {
	border-top-left-radius: 5px;
	border-bottom-left-radius: 5px;
	background-color: #328E99;
	color: #FFF;
}
#tdArticles {
	background-color: #39A2AE;
	color: #FFF;
}
#tdBoth {
	border-top-right-radius: 5px;
	border-bottom-right-radius: 5px;
	background-color: #328E99;
	color: #FFF;
}

#footer {
	visibility: hidden;
	color: #328E99;
	width: 80vw;
	left: 10%;
	position: absolute;
	bottom: 0;
	text-align: center;
	font-size: 2vh;
	font-weight: 300;
	z-index: -1;
}

#rightBox {
	position: absolute;
	width: 20vw;
	height: 60vh;
	right: 0;
	top: 0;
	margin-top: 25vh;
	z-index: 5;
	text-align: center;
}
#leftBox {
	position: absolute;
	width: 20vw;
	height: 60vh;
	left: 0;
	top: 0;
	margin-top: 25vh;
	z-index: 5;
	text-align: center;
}

#fillScreen {
	-webkit-transition: background-color 0.4s; /* Safari */
            transition: background-color 0.4s;

	position: absolute;
	z-index: -2;
	top: 0;
	left: 0;
	width: 100vw;
	height: 100vh;
}

#wrongIcon {
	width: 60%;
	margin-top: 60%;
	opacity: 0;

	-webkit-transition: opacity 0.4s; /* Safari */
            transition: opacity 0.4s;
}
#rightIcon {
	width: 60%;
	margin-top: 60%;
	opacity: 0;

	-webkit-transition: opacity 0.4s; /* Safari */
            transition: opacity 0.4s;
}
	
</style>

</head>

<body onload="onRun()">

<div id="header">
	<div id="topBlue">
		<img id="logo" src="New Assets/LogoSVG.svg"/>
	</div>
	<div id="bottomBlue">
		<table id="navBar">
			<tr>
				<td id="tdOne">
					<img src="New Assets/DotsWhite.svg" id="dots"/>
				</td>
				<td id="tdTwo">
					<img src="New Assets/List.svg" id="list"/>
					
				</td>
				<td id="tdThree">
					<img src="New Assets/Pig.svg" id="improve"/>
					
				</td>
			</tr>
		</table>
	</div>	
</div>
<div id="main">
	<div id="mainInstr">
		<p class="instr">Klicken sie auf "Üben," um ihren Deutsch zu verbessern.</p>
	</div>
	<div id="answers">
		<p id="wort"><?php echo $result ?></p>
		<p id="artikel">???</p>
	</div>
	<!--<div id="germanButton" onclick="generatePractice()"><p id="uben">Üben</p></div>-->
	<div id="germanButton"><p id="uben">Üben</p></div>
	<div id="level">
		<table id="levelTable">
			<tr>
				<td id="tdMeanings">
					<p>Meanings</p>
				</td>
				<td id="tdArticles">
					<p>Articles</p>
				</td>
				<td id="tdBoth">
					<p>Both</p>
				</td>
			</tr>
		</table>
	</div>

</div>

<div id="leftBox" onclick="wrongAnswer()">
	<img src="New Assets/Wrong.svg" id="wrongIcon"/>
</div>
<div id="rightBox" onclick="rightAnswer()">
	<img src="New Assets/Right.svg" id="rightIcon"/>
</div>

<div id="fillScreen">

<div id="footer">
	<p>Home | About</p>
	<p>DailyDeutsch.de by James Weichert. All Rights Reserved.</p>
	<p><?php echo $result ?> </p>
</div>

<script type="text/javascript">

	function onRun() {
		if (detectMobile() == true) {
			document.getElementById('footer').style.visibility = "hidden";
			document.body.style.height = window.availHeight - 100;
		} else {
			document.getElementById('footer').style.visibility = "visible";
		}
	}


	function detectMobile() {
   if(window.innerWidth <= 1000) {
     return true;
   } else {
     return false;
   }
}
</script>

</body>
</html>