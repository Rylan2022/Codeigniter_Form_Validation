<?php
defined('BASEPATH') or exit('No direct script allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form</title>
</head>

<body>
    <?php echo validation_errors(); ?>
    <?php echo form_open('newController/my_func()'); ?>

    <h5>Email</h5>
    <input type="text" name="email" value="" size="50" />

    <h5>Password</h5>
    <input type="password" name="password" value="" size="50" />

    <h5>Confirm Password</h5>
    <input type="password" name="passconf" value="" size="50" />

    <div> <input type="submit" value="Submit" /></div>

    <?php echo form_close(); ?>
</body>

</html>