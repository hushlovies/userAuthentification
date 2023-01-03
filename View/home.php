<!DOCTYPE html>
<html lang="fr">

<body>
    <h1>Welcome
        <?php
        
     
        if ( isset($alreadyExist)) {
            echo $_POST['firstName'];
        }else
        if (isset($user['email'])) {
            echo $user['firstName'];
        }
        else {
            echo 'Visiteur';
        } ?>
    </h1>
    <p style="color:red;">
        <?php
            if(!isset($info))
            {
                echo "";
            }else{
                echo substr($info, 0);
            }
        
        ?>
    </p>

    <img src="./img/merry_christmas_background_leaves_flat_01.jpg" alt="merry-xmas_happy-new-year" width="600px" height="300px">
</body>

</html>
<!-- <?php var_dump($user) ?> -->