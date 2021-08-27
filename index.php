<DOCTYPE!>
    <html lang="en">
        <head>
            <title>Home page </title>

            <!-- insertion des  meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Inertion du css bootstrap -->
            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
            <!-- link rel="stylesheet" href="bootstrap-grid.min">
            <link rel="stylesheet" href="bootstrap-reboot.min" -->
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
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.php">Accueil</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="lesson-1.php">Cours</a>
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

            <!-- Début du contenu de la page -->

            <div class="container">
                <!-- Début du caroussel -->
                <div class="row d-none d-lg-block">
                    <div class="col">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" height="480" src="public/carousel/apprenant.jpg"  alt="Premiere image">
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100" height="480" src="public/carousel/apprenant2.jpg" alt="Deuxème image">
                                </div>

                                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Précédent</span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Suivant</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin du caroussel -->

                <!-- Début des cartes -->              
                <div class="row pt-5">
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <img class=”card-img-top” src="public/home/certificate.png" alt="Certificat">
                            <div class="card-body">
                                <h5 class="card-title"><a href="lesson-1.php" class="stretched-link text-decoration-none">Dévenez Diplômé</a></h5>
                                <p class="card-text">De zéro à héros, obtenez votre diplôme en informatique</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <img class=”card-img-top” src="public/home/instruction.png" alt="Instruction">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="stretched-link text-decoration-none">Formateur de qualités</a></h5>
                                <p class="card-text">Tous nos cours sont réalisés par les meilleurs informaticiens</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <img class=”card-img-top” src="public/home/job.png" alt="Job">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="stretched-link text-decoration-none">Un travail guaranti</a></h5>
                                <p class="card-text">Nous vous garantissons un emploi à l'issue de votre formation</p>
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
            <!-- Fin d'Insertion des fichier javasript -->
        </body>
    </html>
