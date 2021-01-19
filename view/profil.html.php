<!DOCTYPE html>
<html lang="en">
<?php require "head.html.php" ?>
<body>
    <h1>Profil de l'utilisateur</h1>
    <?= $user->id_user ?>
    <?= $user->firstName ?>
    <?= $user->lastName ?>
</body>
<?php require "script.html.php" ?>
</html>