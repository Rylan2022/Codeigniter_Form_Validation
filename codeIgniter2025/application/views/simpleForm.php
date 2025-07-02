<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimpleForm</title>
</head>

<body>
    <!-- Create a login form with validation for required email and password -->

    <form action="#" method="post">
        <label for="username">Username</label>
        <input type="username" name="username" minlength="5" required>

        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" required>

        <input type="submit" value="Register">
    </form>
</body>

</html>