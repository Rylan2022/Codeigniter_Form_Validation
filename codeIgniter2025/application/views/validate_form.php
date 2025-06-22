<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation Form</title>
</head>

<body>

    <h2>Email Validation Form</h2>

    <?php echo validation_errors(); ?>


    <form action="<?php echo base_url('ValidateController'); ?>" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Enter Email">
        <br><br>
        <input type="submit" value="Submit">
    </form>


</body>

</html>