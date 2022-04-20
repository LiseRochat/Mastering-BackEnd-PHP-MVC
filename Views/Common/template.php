<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- description spécifique à chaque page -->
    <meta name="description" content="<?php echo $page_description; ?>">
    <!-- Title spécifique à chaque page -->
    <title><?php echo $page_title; ?></title>
</head>
<body>
    <!-- Appel du menu -->
    <?php require_once("Views/Common/menu.php") ?>
    <!-- page_content : contenu des differentes pages -->
    <?php echo $page_content; ?>
</body>
</html>