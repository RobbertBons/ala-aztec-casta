<?php
$_SETTINGS['PAGE_NAME'] = "Home";
require_once('./settings.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SETTINGS['PAGE_NAME'] . " | " . $_SETTINGS['SITE_NAME']; ?></title>
</head>
<body>
    <?php require_once("./parts/nav.php"); ?>

    <main>
        <h1>Hello Worlde!</h1>
    </main>
    
    <?php require_once("./parts/footer.php"); ?>
</body>
</html>