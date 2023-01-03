<body>

    <header>
        <h1>Login d'un User</h1>
    </header>
    <hr />
    <section id="main-section">
        <form action="index.php?ctrl=user&action=doLogin" method="POST">
            <label>Mail :</label><br />
            <input type="email" name="email" placeholder="Mail.." /><br>
            <label>Mot de passe :</label><br />
            <input type="password" name="password" placeholder="Mot de
            passe.." /><br>
            <p>
                <input type="submit" class="submit-btn" value="Valider">
            </p>
        </form>
    </section>
</body>

</html>
<?php

include('footer.php');

?>