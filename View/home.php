<!DOCTYPE html>
<html lang="fr">
<!-- <?php session_start(); ?> -->

<!-- isset($_GET['action'] -->

<body>
    <!-- <ul class="menu">
    </ul> -->

    <h1>Welcome
        <?php
        if (isset($alreadyExist)) {
            echo $_POST['firstName'];
        ?>
            <?php
        } else
        if (isset($user['email'])) {
            echo $_SESSION['user']->getfirstName();
            if ($_SESSION['user']->getAdmin() == 1) { ?>
                <div class="menu">
                    <li><a href="index.php?ctrl=user&action=listAllUsers">Liste des utilisateurs</a></li>
                    <li><a href="index.php?ctrl=user&action=doLogout">Logout</a></li>
                    <hr>
                </div>
        <?php }
        } else {
            echo 'Visiteur';
        } ?>
    </h1>
    <p style="color:red;">
        <?php
        if (!isset($info)) {
            echo "";
        } else {
            echo substr($info, 0);
        }
        ?>
    </p>

    <img src="./img/merry_christmas_background_leaves_flat_01.jpg" alt="merry-xmas_happy-new-year" width="600px" height="300px">
</body>

</html>