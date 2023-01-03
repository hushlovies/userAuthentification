<?php
include('Model/User.php');

include_once('View/header.php');
include_once('View/default.php');
require_once('./Model/Connection.php');


session_start();
$pdoBuilder = new Connection();
$db = $pdoBuilder->getDb();
if (
    (isset($_GET['ctrl']) && !empty($_GET['ctrl'])) &&
    (isset($_GET['action']) && !empty($_GET['action']))
) {
    $ctrl = $_GET['ctrl'];
    $action = $_GET['action'];
} else {
    $ctrl = 'user';
    $action = 'display';
}
require_once('./Controller/UserController.php');
// $ctrl = $ctrl . 'UserController';
$controller = new UserController($db);
$controller->$action();
?>
<!-- <!DOCTYPE html>
<html lang="fr">
<!-- <h1>TP Authentification et MVC</h1> -->


<!-- 
<body>

    <section id="index_section">
        <h1>Welcome <?php
                    if (isset($_SESSION['email'])) {
                        echo explode("", $_SESSION['firstName'])[0];
                    } else {
                        echo 'Visiteur';
                    } ?>
        </h1>

    </section>
</body>

</html> -->
<?php


include('View/footer.php');
?>