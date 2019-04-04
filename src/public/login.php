<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <?php
    require __DIR__ . '/components/header.php';
    ?>
    <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>Create an user account!</p>
                </div>
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username *" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Your Password *" value="" />
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btnSubmit" name="login_user">Login</button>
                    <div class="row">
                        <div class="col-lg-4">
                            <p>
                                Not yet a member? <a href="register.php">Sign up</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html> 