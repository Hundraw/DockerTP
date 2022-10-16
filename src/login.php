<?php
require_once './controllers/Controller.php';
require_once './models/Users.php';

$controller = new Controller();
$users = new Users($controller->db);
if (isset($_POST['email'])) {
    $result = $users->getById($_POST['email'])->fetch();
    if (password_verify($_POST['password'], $result['password'])) {
        setcookie('user', $result['name']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIMIBLOG</title>
</head>
<body>
<fieldset>
    <legend>Sign Up</legend>
    <form action="login.php" method="post">
        <label for="email"> Email :
            <input type="email" name="email" placeholder="Votre adresse e-mail"/>
        </label>
        <label for="password"> Mot de passe :
            <input type="password" name="password" placeholder="Votre mot de passe"/>
        </label>
        <input type="submit">
    </form>
</fieldset>
</body>
</html>
