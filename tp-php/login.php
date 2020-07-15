<?php
session_start();

if (!empty($_GET['action'])) {
    if ($_GET['action'] === 'logout') {
        $_SESSION['userName'] = '';
        session_destroy();
    }
}
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
    <?php
include 'include/head.php';

  ?>
    <div class="container">
        <form method="post" action="index.php?action=login">
            <div class="col-sm-8">
                <label for="inputEmail">Username</label>
                <input type="text" class="form-control" id="inputEmail" placeholder="Username" name="userName">
                <div class="col-sm-14">
                    <label for="inputPassword">Password</label>
                    <input type="text" class="form-control" id="inputPassword" name="password" placeholder="Password">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="login">login</button>

        </form>
    </div>
    <?php
    include 'include/footer.php';
  ?>
</body>

</html>