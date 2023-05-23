<?php 
session_start();

	include("connection.php");
	include("functions.php");


	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jeux de cartes de notre formation DWWM-PE7.">
    <link rel="shortcut icon" type=".png" href="./Img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="../CSS/bootstrap.min.css">
	<link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="../CSS/index.css">
	<title>Accueil</title>
</head>
<body class="bg-black">
	<d5iv class="background">
		<div class="page-login text-center">
			<div class="text-center d-flex flex-column">
			
				<a href="../php_event_calendar_with_fullcalendar/indexCalendar.html" class="text-decoration-none text-light">Calendrier de l'anéee</a>
			</div>

	        <h1 class="text-center text-light">Bienvenue Apprentis !</h1>

		    <a href="logout.php" class="text-decoration-none text-light"><i class="fa-solid fa-right-from-bracket"></i>  Déconnexion</a>
		</div>
	
	</div>
</body>
</html>