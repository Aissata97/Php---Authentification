<?php

session_start();
$message = '';
$connect = mysqli_connect('localhost', 'root', '', 'login');
if (empty($_GET['action'])) {
    header('location:login.php?action=');
} else {
    if ($_GET['action'] === 'sauvegarder') {
        if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['userName']) && !empty($_POST['userPassword'])) {
            $userName = mysqli_real_escape_string($connect, $_POST['userName']);
            $password = mysqli_escape_string($connect, $_POST['userPassword']);
            $courriel = mysqli_real_escape_string($connect, $_POST['email']);
            $prenom = mysqli_escape_string($connect, $_POST['firstName']);
            $nom = mysqli_escape_string($connect, $_POST['lastName']);
            $password = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO tp_user (firstName, lastName, email, userName, userPassword) VALUES ( '$prenom','$nom','$courriel','$userName','$password')";
            $result = mysqli_query($connect, $query);
        } else {
            header('location:form.php');
        }
    }
    if ($_GET['action'] === 'login') {
        if (!empty($_POST['userName']) && !empty($_POST['password'])) {
            $userName = mysqli_real_escape_string($connect, $_POST['userName']);
            $password = mysqli_escape_string($connect, $_POST['password']);
            $query = "SELECT * FROM tp_user where userName='$userName'";

            $result = mysqli_query($connect, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    if (password_verify($password, $row['userPassword'])) {
                        $_SESSION['userName'] = $userName;
                    } else {
                        header('location:login.php');
                    }
                }
            } else {
                header('location:login.php');
            }
        }
    }
    if ($_GET['action'] === 'delete') {
        $id = (int) $_GET['id'];
        $query = "DELETE FROM tp_user WHERE id='$id'";
        $result = mysqli_query($connect, $query);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/2f1c04ee48.js"></script>
</head>

<body>
    <?php if (!empty($_SESSION['userName'])):?>
    <?php include 'admin-navbar.php'; ?>
    <div class="bs-example">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Courriel</th>
                    <th>Date de creation</th>
                    <th>Date de modification</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                <?php
        $query = 'select firstName,lastName,email,creationDate,modificationDate,id
        from tp_user';
        $result = mysqli_query($connect, $query);
        ?>
                <?php if (mysqli_num_rows($result) > 0): ?>
                <?php    while ($row = mysqli_fetch_array($result)):?>

                <tr>
                    <td>
                        <?=$row['firstName']; ?>
                    </td>
                    <td>
                        <?=$row['lastName']; ?>
                    </td>
                    <td>
                        <?=$row['email']; ?>
                    </td>
                    <td>
                        <?=$row['creationDate']; ?>
                    </td>
                    <td>
                        <?=$row['modificationDate']; ?>
                    </td>
                    <td>
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                            <a href="index.php?action=delete&&id=<?=$row['id']; ?>"
                                class="navbar-brand">
                                <i class="fas fa-times"></i></a>
                            <a href="index.php" class="navbar-brand"><i class="fas fa-pen-square"></i></a>

                        </nav>
                    </td>
                </tr>
                <?php endwhile; ?>
                <?php endif; ?>
            </tbody>
        </table>

    </div>
    <?php else: ?>
    <?php header('location:login.php'); ?>
    <?php endif; ?>

</body>

</html>