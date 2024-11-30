<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redaksi News</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/') ?>dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
            <div class="container">
                <a class="navbar-brand" href="<?= site_url(); ?>">Redaksi News</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navb" class="navbar-collapse collapse hide">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page 2</a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('dashboard'); ?>"><span class="fas fa-user"></span> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('auth/login'); ?>"><span class="fas fa-sign-in-alt"></span> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('auth/logout'); ?>"><span class="fas fa-sign-out-alt"></span> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Container -->
        </nav>
        <!-- /.navbar -->

        <div class="container mt-3">
            <div class="row">
                <!-- Video 1 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ohGfR7F2-No?si=jIAFL_EXxfWf06lS"
                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                        encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- Video 2 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aylJO-n8L3Y?si=IUTLQHfPvHTQ3ZpQ"
                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                        encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- Video 3 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/l2bBUw6pFxQ?si=O2DVET2ARH7TJj6B"
                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                        encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-light text-center py-4">
            <ul class="list-inline mb-3">
                <li class="list-inline-item">
                    <a href="<?= site_url(); ?>" class="text-dark fas fa-home">Home</a>
                </li>
                <li class="list-inline-item">
                    <a class="text-dark" href="<?= site_url('auth/login'); ?>"><span class="fas fa-sign-in-alt"></span> Login</a>
                </li>
            </ul>
            <div class="mb-3">
                <a href="#" class="text-dark mx-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-dark mx-2"><i class="fab fa-snapchat"></i></a>
                <a href="#" class="text-dark mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-dark mx-2"><i class="fab fa-facebook"></i></a>
            </div>
            <p class="text-muted">
                Dibuat dengan sepenuh ❤ dan secangkir ☕ © 2024
            </p>
        </footer>
    </div>
    <!-- Wrapper -->


    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/backend/') ?>plugins/jquery/jquery.slim.js"></script>
    <!-- Popper -->
    <script src="<?= base_url('assets/backend/') ?>plugins/popper/popper.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/backend/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/backend/') ?>dist/js/adminlte.min.js"></script>
</body>

</html>