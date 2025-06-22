<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <?php echo form_open('formcontroller/myfunc', [
                    'id' => 'my-form',
                    'class' => 'my-form'
                ]); ?>
                <input type="text" class="form-control" name="username" value="" placeholder="username">
                <?php echo form_error('username'); ?>
                
                <input type="email" class="form-control mt-3" name="email" placeholder="email">
                <?php echo form_error('email'); ?>
                <?php echo form_submit('submit', 'login', [
                    'class' => 'form-control w-25 mt-5 btn btn-success'
                ]); ?>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>


</body>

</html>