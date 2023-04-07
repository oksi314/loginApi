<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styleshneet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>pagina login</title>
</head>

<body>
    <div class="row d-flex justify-content-center g-3">
        <div class="col-md-4">
            <h1>Accedi</h2>
                <form action="login.php" method="POST">
                    <?php if(isset($_GET['error'])) { ?>
                    <p class="error"> <?php echo $_GET['error']; ?></p>
                    <?php  } ?>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" placeholder="Username" class="form-control"><br>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" placeholder="Email" class="form-control"><br>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control"><br>
                    </div>
                    <div class="mb-3 text-center">
                        <button class="btn btn-success" type="submit">Login</button>
                    </div>
                </form>
        </div>
    </div>
</body>

</html>