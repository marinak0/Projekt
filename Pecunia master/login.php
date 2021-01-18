<?php
include "php/spajanje_baza.php";

if(isset($_POST['login__botun'])){

    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if ($username != "" && $password != ""){

        $sql_query = "SELECT COUNT(*) AS broj FROM administrator WHERE korisnicko_ime='".$username."' AND lozinka='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['broj'];

        if($count > 0){
            $_SESSION['username'] = $username;
            echo "Login";
            header('Location: home.php');
            
        }else{
            echo "Invalid username and password";
        }

    }

}
 
  



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css" />
    
    <title>Login</title>
  </head>
  <body>
    <div class="login">
      <h1>Login</h1>

      <form method="POST" >
        <div class="textbox">
          <input type="text" placeholder="Korisnicko ime" name="username" />
        </div>

        <div class="textbox">
          <input type="password" placeholder="Lozinka" name="password" />
        </div>
        <button
          type="submit"
          name="login__botun"
          value="Login"
          class="button">Login</button>
        
      </form>
    </div>
  </body>
</html>