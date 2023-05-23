<?php 
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    // Quelque chose a été posté
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($confirm_password)) {
        // Les champs ont été remplis correctement

        if ($password == $confirm_password) {
            // Le mot de passe est confirmé
            $user_id = random_num(20);
            $query = "insert into users2 (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";
            mysqli_query($con, $query);
            header("Location: login.php");
            die();
        } else {
            // Le mot de passe n'a pas été confirmé
            echo "Les mots de passe ne correspondent pas.";
        }
    } else {
        // Les champs n'ont pas été remplis
        echo "Veuillez remplir tous les champs.";
    }
}
?>


<script>
function showPassword() {
    var passwordInput = document.getElementById("password");
    var confirmPasswordInput = document.getElementById("confirm_password");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        confirmPasswordInput.type = "text";
    } else {
        passwordInput.type = "password";
        confirmPasswordInput.type = "password";
    }
}
</script>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/login.css">
  <link rel="stylesheet" href="../CSS/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css%22%3E">
  <title>Document</title>
</head>
<body class="bg-black">


  <div class="background">
    <div class="page-login">
      <form  method="post" class="log">
        <h2 class="text-dark text-center">INSCRIPTION</h2>

        <label class="text-dark"><b><i class="fa fa-user" aria-hidden="true"></i> Identifiant</b></label>
        <input id="text" type="text" placeholder="Entrer votre identifiant" name="user_name" class="input" required>

        <label class="text-dark"><b><i class="fa-sharp fa-solid fa-lock"></i> Mot de passe</b></label>
        <input id="password" type="password" placeholder="Entrer votre mot de passe" name="password" class="input" required>


        <label class="text-dark"><b><i class="fa-sharp fa-solid fa-lock"></i> Confirmez mot de pass</b></label>
        <input id="confirm_password" type="password" name="confirm_password" placeholder="Confirmer le MDP" class="input" required>

        <div class="text-center">
          <button id="button" type="button" class="btn bg-light" onclick="showPassword()">Afficher/Masquer</button>
        </div>

        <input type="submit" id='submit' value='LOGIN' class="input buttom" >
      </form>
    </div>
  </div>

<script src="./JS/bootstrap.bundle.min.js"></script>
</body>
</html>

