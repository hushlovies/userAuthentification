
<?php

class UserManager
{
    private $db;
    public function __construct($db1)
    {
        $this->db = $db1;
    }
    public function login(User $user)
    {

        $req = $this->db->prepare(
            'SELECT *
                FROM users
                WHERE email = :email
                AND password= :password'
        );
        $req->execute(
            array(
                'email' => $user->getEmail(),
                'password' => $user->getPassword(),

            )
        );

        return $req->fetch(PDO::FETCH_ASSOC);
    }
    public function create(User $user)
    {
        $req = $this->db->prepare(
            "INSERT INTO users (email, password, firstName,lastName, address, postalCode, city,country, admin)  VALUES (:email, :password, :firstName, :lastName, :address, :cp, :city, :country, 0)"
        );
        $req->execute(
            [
                'email' => $user->getEmail(),
                'password' => $user->getPassword(),
                'firstName' => $user->getFirstName(),
                'lastName' => $user->getLastName(),
                'address' => $user->getAddress(),
                'cp' => $user->getPostalCode(),
                'city' => $user->getCity(),
                'country' => $user->getCountry()
            ]
        );
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
    public function findAll()
    {
        $req = $this->db->prepare(
            'SELECT * FROM users'
        );
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
    public final function findOne($id)
    {
        $req = $this->db->prepare(
            ' SELECT *
        FROM users WHERE id=$id'
        );
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }
    //function to find an email in a bdd
    public final function findByEmail($email)
    {
        $req = $this->db->prepare(
            ' SELECT users
        FROM users WHERE email='.$email
        );
        $req->execute();
        return $req->fetch();
    }
    public final function update(User $user)
    {
        $req = $this->db->prepare(
            'UPDATE users set lastName= :lastname,email=:email, password=:password,firstName=:firstName,lastName=:lastName, address=:address,postalCode=:postalCode,city=:city,admin=:admin,country=:country  WHERE id=$user->getId()'
        );
        $req->execute(
            array(
                'lastName' => $user->getLastName(),
                'firstName' => $user->getFirstName(),
                'email' => $user->getEmail(),
                'address' => $user->getAddress(),
                'cp' => $user->getPostalCode(),
                'city' => $user->getCity(),
                'password' => $user->getPassword()
            )
        );
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
    public final function delete(User $user)
    {
        $req = $this->db->prepare(
            'DELETE 
        FROM users WHERE id=$id'
        );
        $req->bind_param($user);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}
