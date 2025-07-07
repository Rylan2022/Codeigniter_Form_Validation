<?php
defined('BASEPATH') or exit('No direct script allowed.');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-View</title>
    <!-- Create a registration form with the following fields -->
</head>
<style>
    html {
        height: 100%;
    }

    .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, .5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
        border-radius: 10px;
    }

    .login-box h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
    }

    .login-box .user-box {
        position: relative;
    }

    .login-box .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }

    .login-box .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }

    .login-box .user-box input:focus~label,
    .login-box .user-box input:valid~label {
        top: -20px;
        left: 0;
        color: #03e9f4;
        font-size: 12px;
    }

    .login-box form a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px
    }

    .login-box .submit {
        position: absolute;
        top: 90%;
        width: 100%;
        text-align: center;

    }

    .login-box .submit input {
        padding: 8px;
        color: #fff;
        text-align: center;
        background: #03e9f4;
        border: none;
        border-radius: 5px;

    }
</style>

<body>
    <div class="login-box">
        <h2>Login</h2>

        <?php echo form_open('form/ValidateController/index') ?>

        <div class="user-box">
            <input type="text" name="username" id="username"  required
                size="50" />
            <label for="username">Full Name</label>
            <?php echo form_error('username'); ?>
        </div>
        <div class="user-box">
            <input type="email" name="email" id="email" required size="50" />
            <label for="email">Email</label>
            <?php echo form_error('email'); ?>
        </div>

        <div class="user-box">
            <input type="password" name="password"  required size="50" />
            <label for="password">Password</label>
            <?php echo form_error('password'); ?>
        </div>

        <div class="user-box">
            <input type="password" name="passconf" required size="50" />
            <label for="passconf">Confirm Password</label>
            <?php echo form_error('passconf'); ?>
        </div>

        <div class="submit"><input type="submit" name="submit" value="Submit"></div>
    </div>
    <?php echo form_close(); ?>
</body>

</html>