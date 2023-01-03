<!DOCTYPE html>
<html lang="fr">
<?php
// session_start();
?>

<head>
    <meta charset="utf-8">
    <title>Manager Entité</title>
    <meta name="viewport" content="width=device-width">
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Glegoo" rel="stylesheet">
</head>

<body>
    <header>
        <div class="loginbar">
            <a class="button" href="index.php?ctrl=user&action=login">Login</a>
            <a class="button" href="index.php?ctrl=user&action=register"> Register</a>
        </div>
        <ul class="menu">
            <?php if ($_GET['action']=='doLogin')
            {?>
                <li><a href="index.php?ctrl=user&action=doLogin">Home</a></li>
                <li><a href="index.php?ctrl=user&action=doLogin">Logout</a></li>
                <?php } 
            else if ($_GET['action']=='doCreate'){
                ?>
                <li><a href="index.php?ctrl=user&action=doCreate">Home</a></li>
            <?php } else
             { ?>
                <li><a href="index.php">Home</a></li>
                <?php
             } ?>
            
            <li><a href="#">Liste des utilisateurs</a></li>
        </ul>
    </header>
    <hr />
    
</body>

</html>