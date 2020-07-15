<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>

</head>

<body>
    <form method="post" action="index.php?action=sauvegarder">
        <?php include 'admin-navbar.php'; ?>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Prenom</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="FistName" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="lastName" class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-10">
                <input input type="text" class="form-control" id="lastName" name="lastName" placeholder="lastName"
                    required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Courriel</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="userName" class="col-sm-2 col-form-label">UserName</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="userName" name="userName" placeholder="userName" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" name="userPassword" placeholder="Password"
                    required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" name="save" class="btn btn-primary">Sauvegarder</button>
            </div>
        </div>
    </form>
</body>

</html>