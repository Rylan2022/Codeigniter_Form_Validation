<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormValidation</title>
</head>
<!-- Create a registration form with the following fields and validate them: -->

<body>
    <?php echo form_open('email/send', 'class="email" id="myform"');

    echo form_label('Username','username');
    echo form_input('username', '', 'required');
    
    echo form_label('Username','username');
    echo form_input('username', '', 'required');


    ?>
    <input type="submit">

</body>

</html>