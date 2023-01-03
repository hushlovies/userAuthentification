<?php
session_start();
include('Model/User.php');
require_once('./Model/Connection.php');

$pdoBuilder = new Connection();
$db = $pdoBuilder->getDb();
if (isset($_GET['ctrl']) && isset($_GET['action'])) {
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