
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        Merci <?php echo  $_POST['user_name'];?> <?php echo  $_POST['user_lastname'];?> de nous avoir contacté à propos de <?php echo  $_POST['thematiques'];?>.

        Un de nos conseiller vous contactera soit à l’adresse <?php echo  $_POST['user_email'];?> ou par téléphone au <?php echo  $_POST['numero_telephone'];?> dans les plus brefs délais pour traiter votre demande : 

        <?php echo  $_POST['user_message'];?>

    </div>


</body>
</html>


