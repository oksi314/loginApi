<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styleshneet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
            <a class="navbar-brand" href="index.php">ADMIN</a>
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/posts">POSTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/post/create">NEW POST</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="btn btn-info btn-lg">
                        Logout
                    </a>

                </li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Hello, <?php echo ($_SESSION['username']); ?></h1>
            </div>
        </div>
    </div>
    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer>

    <script src="/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>