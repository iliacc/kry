<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <?php
    include_once('includes/config.php');
    ?>
</head>

<body>

    <?php
    session_start();

    $logged_in = isset($_SESSION['username']);

    ?>

    <div class="container">
        <header id="header-style" class="pt-5 pb-3">
            <h1>Kry•e•<em>v <span>1.0</span></em></h1>
            <h2 class="h6 text-body-secondary">Gestions et suivis des pièces entre réception, atelier et magasin</h2>
        </header>
        <?php include_once('includes/menu.php'); ?>