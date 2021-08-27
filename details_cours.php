<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <title>Cours </title>

    <!-- insertion des  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Inertion du css bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="bg-dark">
        <div class="container">      
            <div class="row">
                <nav class="col navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">
                            <img src="public/logo.png" width="50" height="50" alt="Site logo">Info School
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="navbarContent" class="collapse navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="lesson-1.php">Cours</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contactez-nous</a>
                                </li>
                            </ul>

                        </div>
                    </div>

                </nav>
            </div>
        </div>
    </div>
    <!-- Fin de l'en-tête -->
    <div class="container px-lg-2 mt-2">
        <!-- début alert -->
        <div class="alert alert-success alert-dismissible fade show " role="alert">
            <h5 class="alert-heading">Base en css. Si vous ne les aitrisez pas, suivez ce cours: <span class="font-weight-bold">Apprenez a créer votre site web avec HTML5 et CSS3!</span> </h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <!-- Fin alert -->
        <h2 class="font-weight-bold">Details du cours</h2>

        <!-- début vidéo -->
        <div class="embed-responsive">
            <video class="embed-responsive-item" width="400" height="222" controls="controls" src="" allowfullscreen></video>
        </div>
        <!-- Fin vidéo -->
        
        <h4 class="text-primary">A la fin de ce cours, vous serez capable de:</h4>
        <ul class="text-secondary">
            <li>réaliser vos premières animations CSS;</li>
            <li>maitriser les translations, rotations et l'opacité;</li>
            <li>réaliser des animations dynamiques.</li>
        </ul>




    </div>

    <!-- début du footer -->
    <div class="container-fluid bg-light pt-4 mt-5">
        <div class="row"> 
            <div class="col-12 text-center">
                <span><a class="mx-lg-4 text-decoration-none" href="">A propos</a>&CenterDot;<a class="mx-lg-4 text-decoration-none" href="#">Vie privée</a>&CenterDot;<a class="mx-lg-4 text-decoration-none" href="#">Conditios d'utilisations</a></span>
                <p class="text-right d-none d-lg-block">Copyright (c) 2021 By PALIGO DEH Eugène</p>
            </div>
        </div>
    </div>
    <!-- Fin du footer -->


    <!-- début d'insertion des fichier javasript -->
    <script src="assets/jquery/jquery-3.6.0.min.js"></script>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Fin d'Insertion des fichier javasript -->
</body>
</html>
