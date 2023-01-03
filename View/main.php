<?php
include_once "header.php" ?>
<section id="main-section">
    <?php
    
    if (isset($page)) {
        require_once("./View/" . $page . ".php");
    } else {
        require_once("./View/home.php");
    }
    ?>
</section>
<?php // include_once "footer.php" ?>