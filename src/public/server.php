<?php
session_start();
// initializing variables
$username = "";
$errors = array();

// connect to the database

//Our MySQL user account.
define('MYSQL_USER', 'maks');
 
//Our MySQL password.
define('MYSQL_PASSWORD', 'maks');
 
//The server that MySQL is located on.
define('MYSQL_HOST', 'localhost');
 
//The name of our database.
define('MYSQL_DATABASE', 'math_sucks');



$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO(
    "mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DATABASE, //DSN
    MYSQL_USER, //Username
    MYSQL_PASSWORD, //Password
    $options //Options
);

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $password_1 = !empty($_POST['password_1']) ? trim($_POST['password_1']) : null;
    $password_2 = !empty($_POST['password_2']) ? trim($_POST['password_2']) : null;

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT COUNT(username) AS num FROM users WHERE username = :username";
    $stmt = $pdo->prepare($user_check_query);

    $stmt->bindValue(':username', $username);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($row['num'] > 0){ // if user exists
        array_push($errors, "Username already exists");    
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1); //encrypt the password before saving in the database

        $sql = "INSERT INTO users (username, password) 
                VALUES('$username', '$password')";

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':username', $username);

        $result = $stmt->execute();
        if($result) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
    }
}

//LOGIN USER
if (isset($_POST['login_user'])) {
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $password = !empty($_POST['password']) ? trim($_POST['password']) : null;

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':username', $username);
        
        $result = $stmt->execute();
        
        if ($result) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

?>