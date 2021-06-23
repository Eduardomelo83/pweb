<?php
session_start();
print("Check!");
$_SESSION['name'] = isset($_POST['name']) ? $_POST['name'] : '';
$_SESSION['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seja Bem vindo! <?php echo $_SESSION['name'] ?></title>
</head>

<body>
    <h1>
        Olá, <?php echo $_SESSION['name'] ?>!
        Para acessar seus dados <a href="home.php">basta clicar aqui</a>
    </h1>
</body>

</html>
