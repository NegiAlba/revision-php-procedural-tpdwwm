<?php
    // Process du formulaire avant, pour éviter les problèmes liés aux headers

    // Assainissement des variables

    // if (!empty($_POST)) {
    //     if (in_array('', $_POST)) {
    //         echo 'Fill in the form entirely please !';
    //     } else {
    //         echo '<pre>';
    //         print_r($_POST);
    //         echo '</pre>';
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire (Same Page)</title>
</head>

<body>
    <form action="" method="POST">
        <div>
            <label for="first_name">First name</label>
            <input type="text" name="first_name" id="first_name">
        </div>
        <div>
            <label for="last_name">Last name</label>
            <input type="text" name="last_name" id="last_name">
        </div>
        <div>
            <label for="gender">Gender</label>
            <select name="gender" id="select" id="gender">
                <option value="0" disabled selected> Choose a gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="X">Non-binary</option>
            </select>
        </div>
        <div>
            <label for="address">Address</label>
            <input type="text" name="address" id="address">
        </div>
        <div>
            <label for="city">City</label>
            <input type="text" name="city" id="city">
        </div>
        <div>
            <label for="postal_code">Postal Code</label>
            <input type="number" name="postal_code" id="postal_code" min=1000 max=97699>
        </div>
        <button type="submit">Create my ID Card</button>
    </form>

    <?php
            if (!empty($_POST)) {
                if (in_array('', $_POST)) {
                    echo 'Fill in the form entirely please !';
                } else { ?>
    <ul>
        <li>Nom <?php echo " : {$_POST['first_name']}"; ?></li>
        <li>Prénom<?php echo " : {$_POST['last_name']}"; ?></li>
        <li>Genre<?php echo " : {$_POST['gender']}"; ?></li>
        <li>Adresse<?php echo " : {$_POST['address']}"; ?></li>
        <li>Ville<?php echo " : {$_POST['city']}"; ?></li>
        <li>Code Postal<?php echo " : {$_POST['postal_code']}"; ?></li>
    </ul>
    <?php }
            }
    ?>
</body>

</html>