<!DOCTYPE html>
<html lang="en">
<head>
  <?php
   require_once './controlers/Controler.php';
   require_once('./models/Users.php');
  ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DIMIBLOG</title>
</head>
<body>
  <fieldset>
    <legend>Sign Up</legend>
    <form action="register.php" method="post">
      <label for="email"> Email :
        <input type="email" name="email" placeholder="Votre adresse e-mail" />
      </label>
      <label for="name"> Nom d'utilisateur :
        <input type="text" name="name" placeholder="Votre pseudo" />
      </label>
      <label for="password"> Mot de passe :
        <input type="password" name="password" placeholder="Votre mot de passe" />
      </label>
      <input type="submit">
    </form>
  </fieldset>

  <?php
    $controler = new Controler();
    $users = new Users($controler->db);
    if (!empty($_POST['email']) && !empty($_POST['name'] && !empty($_POST['password']))) {
      $users->addUser(
        $_POST['email'], $_POST['name'],
        password_hash($_POST['password'], PASSWORD_DEFAULT)
      );
    }
  ?>
</body>
</html>