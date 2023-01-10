<?php

class userController
{

    private $userManager;
    private $user;
    private $db;


    //creation constructeur pour appel connection et user
    public function __construct($db1)
    {
        // require('./Model/Connection.php');
        require('./Model/UserManager.php');
        $this->userManager = new UserManager($db1);
        $this->db = $db1;
    }
    public function login()
    {
        $page = 'login';
        require_once('./View/main.php');
    }

    public function doLogin()
    { // Appel de l'action
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                'email' => $_POST["email"],
                'password' => $_POST["password"],
            );
            $this->user = new User($data);
            $result = $this->userManager->login($this->user);
            if ($result) {
                $info = "Connexion reussie";
                $user = $result;
                $this->user->hydrate($result);
                $_SESSION['user'] = $this->user;
            } else {
                $info = "Identifiants incorrects.";
            }
            $page = 'home';
            require('./View/main.php');
        }
    }
    public function doLogout()
    { // Appel de l'action
        unset($_SESSION['user']);
        $page = 'home';
        $info = "deconnexion reussi";
        require_once('./View/main.php');
    }
    public function register()
    {
        $page = 'register';
        require_once('./View/main.php');
    }
    public function display()
    {
        $page = 'test';
        require('./View/main.php');
    }
    public function listAllUsers()
    {

        $quer = $this->userManager->findAll();
        $page = 'userlist';

        require_once('./View/main.php');
    }

    public function unauthorized()
    {

        $page = 'unauthorized';
        require_once('./View/main.php');
    }
    public function doCreate()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                'email' => $_POST["email"],
                'password' => $_POST["password"],
                'firstName' => $_POST["firstName"],
                'lastName' => $_POST["lastName"],
                'address' => $_POST["address"],
                'postalCode' => $_POST["postalCode"],
                'city' => $_POST["city"],
                'country' => $_POST["country"]
            );
            $alreadyExist = $this->userManager->findByEmail($_POST['email']);
            if (!$alreadyExist) {

                $user = new User($data);
                $this->userManager->create($user);

                $info = "creation compte reussi! Veuillez login avec le nouveau compte";
            } else {
                $info = "ERROR : This email (" . $_POST['email'] . ") is used by another user";
            }
        }
        $page = 'home';
        require_once('./View/main.php');
    }
}
