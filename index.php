<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ### Bootstrap ### -->
    <link rel="stylesheet" href="style/bootstrap.css">
    <!-- ### Default CSS ### -->
    <link rel="stylesheet" href="style/base.css">
    <!-- ### FONTS ### -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <!-- ### JQuery ### -->
    <script src="script/jquery-3.7.1.min.js"></script>
</head>

<body>
    <?php
        session_start();
        if(!isset($_SESSION['username'])) {
            header('Location: php/login.php');
        }
    ?>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Players</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            NPCs
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="php/createNpc.php">Create</a></li>
                            <li><a class="dropdown-item" href="php/listNpcs.php">Show All</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="php/listNotes.php">Notes</a>
                    </li>
                    <li class="nav-item">
                        <form action="php/destroySession.php">
                            <button type="submit" class="btn btn-danger">DESTROY SESSION</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">

    </div>
    <!-- ########## BOOTSTRAP SCRIPTS ########## -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>