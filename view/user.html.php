<!DOCTYPE html>
<html lang="en">
<?php require "head.html.php" ?>
<body>
    <?php require "navbar.html.php" ?>
    <h1>Utilisateurs</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Prénom</th>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user->id_user?></td>
                <td><?= $user->firstName?></td>
                <td><?= $user->lastName?></td>
            </tr> 
            <?php endforeach; ?>   
        </tbody>
    </table>
</body>
<?php require "script.html.php" ?>
</html>