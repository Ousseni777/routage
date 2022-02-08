<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="CSS/style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <title>Document</title>

</head>
<body>
    <div class="banniere" id="navbar">
		<!--La ligne de Separation-->
		<div class="front">

		</div>
		<!--Debut header-->
		<div id="top_header" class="clearfix">
			<!--debut des liens de gauche-->
			<div class="gauche">
				<a href="frame.php" class="brand"><span><img src="IMG/innovlogo.jfif"></span></a>
				
			</div>
			<!--Fin-->

			<!--logo SicoM-->
			
			<!--Fin-->

			<!--debut des liens de droite-->
			<div class="droite">
				<a href="Home.php" id="back_button" > Home</a>
                <a href="Agenda.php" id="back_button" > Agenda</a>
                <a href="Meet.php" id="back_button" > Our Speakers</a>
                <a href="contact.php" id="back_button" > Contact</a>
                <a href="./account/inscription.php" id="back_button" > Register</a>
				<a href="./account/form_login.php" class="teacher" >Login</a>
				
			</div>
			<!--Fin-->

		</div>
		<!--Fin du header-->
	</div>
	<script>
		var start = window.pageYOffset;
window.onscroll = function () {
    var current = window.pageYOffset;
    if (start > current) {
        document.getElementById("top_header").style.top = "0";
    }
    else {
        document.getElementById("top_header").style.top = "-350px";
    }
    start = current;
}

	</script>

</body>
</html>