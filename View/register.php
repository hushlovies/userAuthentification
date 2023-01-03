<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Manager Entité</title>
    <meta name="viewport" content="width=device-width">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Glegoo" rel="stylesheet">
</head>

<body>
    <header>
        <h1>Création/Modification d'un User</h1>
    </header>
    <hr />
    <section id="main-section">
        <form action="index.php?ctrl=user&action=doCreate" method="POST">
            <label>Mail :</label><br />
            <input type="email" name="email" placeholder="Mail.." /><br>
            <label>Mot de passe :</label><br />
            <input type="password" name="password" placeholder="Mot de
            passe.." /><br>
            <label>Prénom :</label><br />
            <input type="text" name="firstName" placeholder="Prénom.." /><br>
            <label>Nom :</label><br />
            <input type="text" name="lastName" placeholder="Nom.." /><br>
            <label>Adresse :</label><br />
            <input type="text" name="address" placeholder="Adresse.." /><br>
            <label>Code Postal :</label><br />
            <input type="text" name="postalCode" placeholder="Code
            Postal.." /><br>
            <label>Ville :</label><br />
            <input type="text" name="city" placeholder="Ville.." /><br>
            <label>Pays :</label><br />
            <input type="text" name="country" placeholder="pays.." /><br>
            <p>
                <input type="submit" class="submit-btn" value="Soumettre">
            </p>
        </form>
    </section>

</body>

</html>
<?php

include('footer.php');

?>