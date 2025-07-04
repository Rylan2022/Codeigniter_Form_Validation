<?php 
defined('BASEPATH') or exit ('No direct script allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form</title>
</head>
<body>
    <?php echo form_open('form');?>
    <h5>Email</h5>
    <input type="text" name="email" value="" size="50"/>
    <h5>Password</h5>
    <input type="password" name="email" value=""  size="50"/>
    <h5>Confirem Password</h5>
    <input type="password" name="passconf" value=""  size="50"/>

    <div> <input type="submit" value="Submit"></div>
</body>
</html>