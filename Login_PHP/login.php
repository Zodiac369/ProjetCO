<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//quelque chose a été posté
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//lire la database
			$query = "select * from users2 where user_name = '$user_name' limit 1";
			$query = "select * from users2 where password = '$password' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "Mauvais identifiant ou mot de passe! 
			    Veuillez créer un compte si ce n'est pas fait.";
		}else
		{
			echo "Mauvais identifiant ou mot de passe! 
			    Veuillez créer un compte si ce n'est pas fait.";
		}
	}

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
    <link rel="stylesheet" href="../CSS/login.css">
    <title>Page de Connexion</title>
  </head>
  <body>
    <div class="background">

      <!-- connexion -->
      <div class="container-fluid pioche-carte bg-black">
        <!-- <div class="left"></div>
        <div class="right" ></div> -->
      </div>
    
      <div class="page-login">
        <form method="post" class="log">
          <h1>CONNEXION</h1>
          
          <label><b><i class="fa fa-user" aria-hidden="true"></i>Identifiant</b></label>
          <input type="text" placeholder="Entrer votre identifiant" name="user_name" class="input" required>
        
          <label><b><i class="fa-sharp fa-solid fa-lock"></i> Mot de passe</b></label>
          <input type="password" placeholder="Entrer votre mot de passe" name="password" class="input" required>
        
          <input type="submit" id='submit' value='Connexion' class="input buttom" >
		  <a href="signup.php">Inscris toi ici</a>
        </form>
      </div>
    </div>
  </body>
</html>