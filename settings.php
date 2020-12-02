<?php

$_SETTINGS = array (
    "SITE_NAME" => "Aztec Casta",
    "DB_HOST" => "localhost",
    "DB_USERNAME" => "aztec_casta",
    "DB_PASSWORD" => "ALA2020@!",
    "DB_NAME" => "aztec_casta",
);


if($conn = new mysqli($_SETTINGS['DB_HOST'], $_SETTINGS['DB_USERNAME'], $_SETTINGS['DB_PASSWORD'], $_SETTINGS['DB_NAME'])) {
    echo "<h1>Failed to establish database connection</h1>";
}

?>