<?php 
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Math Sucks</title>
    <script type="text/javascript" src="../phaser.js"></script>
    <!-- Must declare all states before game.js state or they will not have instantiated by the time game.js is run-->
    <script type="text/javascript" src="js/boot.js"></script>
    <script type="text/javascript" src="js/levelselect.js"></script>
    <script type="text/javascript" src="js/load.js"></script>
    <script type="text/javascript" src="js/mainmenu.js"></script>
    <script type="text/javascript" src="js/options.js"></script>
    <script type="text/javascript" src="js/play.js"></script>
    <script type="text/javascript" src="js/win.js"></script>
    <script type="text/javascript" src="js/lose.js"></script>
	<script type="text/javascript" src="js/game.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Math sucks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>
    <?php
    require __DIR__ . '/components/header.php';
    ?>
    <?php if (isset($_SESSION['success'])) : ?>
    <div class="alert alert-success alert-warning">
        <h3>
            <?php 
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h3>
    </div>
    <?php endif ?>

</body>

</html> 