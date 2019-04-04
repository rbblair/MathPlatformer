<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
    <form action="register.php" method="post">
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
                                <input type="text" name="username" class="form-control" placeholder="Username *" value="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" name="password_1" class="form-control" placeholder="Your Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password_2" class="form-control" placeholder="Confirm Password *" value="" />
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="reg_user" class="btnSubmit">Submit</button>
                    <div class="row">
                        <div class="col-lg-4">
                            <p>
                                Already a member? <a href="login.php">Log in</a>
                            </p>
                        </div>
                        <div class="col-lg 8">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a>HTML</a></li>
                                        <li><a>CSS</a></li>
                                        <li><a>JavaScript</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html> 