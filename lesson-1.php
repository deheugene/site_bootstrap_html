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
                        <a class="navbar-brand" href="index.html">
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
    <div class="container px-lg-5 mt-2">
        <h2 class="font-weight-bold">Cours</h2>
        <div class="row mb-3">
            <div class="col">
                <input class="form-control" id="searchInput" type="text" placeholder="Search..">
            </div>
        </div>
        <!-- Début des cartes -->              
        <div class="row pt-5" id="lessonList">
            <div class="col-12 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="public/cours/css.jpeg" alt="Cours css">
                    <div class="card-body">
                        <h5 class="card-title"><a href="details_cours.php" class="stretched-link text-decoration-none">Cours css</a></h5>
                        <p class="card-text">Voir les détails du cours sur le css</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card">
                    <img class=”card-img-top” src="public/cours/js.jpeg" alt="Cours Javascript">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#" class="stretched-link text-decoration-none">Javascript</a></h5>
                        <p class="card-text">Voir les détails du cours de Javascript</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card">
                    <img class=”card-img-top” src="public/cours/swift.jpeg" alt="Cours swift">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#" class="stretched-link text-decoration-none">swift</a></h5>
                        <p class="card-text">Voir les détails du cours swift</p>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
    <!-- Fin des cartes -->
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
    <script>
        $(document).ready(function () {
            $("#searchInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#lessonList .col-12").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <!-- Fin d'Insertion des fichier javasript -->
</body>
</html>