<section id="user-section">
    <h2>Users</h2>
    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Password</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Admin</th>
            </tr>
        </thead>

        <tbody>
            <!-- <?php
                    var_dump($quer);
                    ?>-->
            <?php
            foreach ($quer as $row) { ?>
                <tr>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['password']; ?></td>
                    <td><?= $row['firstName']; ?></td>
                    <td><?= $row['lastName']; ?></td>
                    <td><?= $row['admin']; ?></td>
                </tr>
            <?php }
            ?>


        </tbody>
    </table>
</section>