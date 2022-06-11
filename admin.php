<?php
// if auth
session_start();

if(!isset($_SESSION["login"])){
    header("Location: index.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:wght@300&family=Poppins:wght@800&display=swap" rel="stylesheet">
    <title>Dashboard admin</title>
</head>
<body>
     <nav class="navbar navbar-expand-sm">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="margin-right: 30px;">
                    <a class="nav-link" href="index.html" style="color: #000000;">
                        Home
                    </a>
                </li>
                <li class="nav-item" style="margin-right: 30px;">
                    <a class="btn btn-danger" href="logout.php"
                        style="width: 80px; border-radius: 20px;">
                        Logout
                    </a>
                </li>
                <li class="nav-item" style="margin-right: 30px;">
                    <a class="btn btn-primary" href="register.php"
                        style="width: 80px; border-radius: 20px;">
                        Register
                    </a>
                </li>
            </ul>
        </nav>
        <h1>
            ini page admin
        </h1>
</body>
</html>