<?php
include_once "header.php" ?>
<section id="main-section">
    <ul class="menu"><a href="index.php?ctrl=user&action=display">Home</a>
        <?php

        if (isset($page)) {
            require_once("./View/" . $page . ".php");
        } else {
            require_once("./View/home.php");
        }
        ?>
</section>
<?php // include_once "footer.php" 
?>