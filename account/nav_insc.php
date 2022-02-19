<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="../CSS/style12.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
	<title>Document</title>
</head>

<body>
	<div class="banniere" id="navbar">
		<!--debut des liens de gauche-->
		<div class="gauche">
			<a href="../index.php" class="brand"><span><img src="../IMG/innovlogo.jfif"></span></a>
		</div>
		<span class="mnbton" onmouseout="closeMenu()" onclick="openMenu()">&#9776;</span>
		<div class="droite" id="menuid">
			<span href="javascript:void(0)" class="mnbton" onclick="closeMenu()" id="back_button" style="position: absolute;position: absolute; right: 5vw; top: 5vh;border: 0;cursor:pointer;">&times;</span>															
			<a href="./form_login.php" class="teacher">Login</a>
			<a href="./inscription.php" id="back_button"> Register</a>
			<a href="../contact.php" id="back_button"> Contact</a>
			<a href="../Meet.php" id="back_button"> Our Speakers</a>
			<a href="../Agenda.php" id="back_button"> Agenda</a>
			<a href="../index.php" id="back_button"> Home</a>

		</div>
	</div>
	<script>
		var start = window.pageYOffset;
		window.onscroll = function() {
			var current = window.pageYOffset;
			if (start > current) {
				document.getElementById("navbar").style.top = "0";
			} else {
				document.getElementById("navbar").style.top = "-350px";
			}
			start = current;
		}

		function openMenu() {
			document.getElementById("menuid").style.width = "60%";
			
		}

		function closeMenu() {
			document.getElementById("menuid").style.width = "0px";
			
		}
	</script>

</body>

</html>