<?php

include('Maconnexion.php');

session_start([
    'cookie_lifetime' => 5 // Durée de vie du cookie de session (en secondes)
]);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="demoteststyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


</head>

<body class="acceuil">
    <?php include('header.php'); ?>



    <style>
        * {
            margin: 0 !important;
            padding: 0;
        }
    </style>


    <h1>Agence Immobilière PSY</h1>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/img 300 000€/5e2033e51b01e.jpg" class="d-block w-100" class="img-responsive" style="width:auto 0 auto 0" style=padding:2rem; alt="car">
            </div>
            <div class="carousel-item">
                <img src="./img/img 300 000€/380dd8caba7b874e3b9bc1fafb719aab.jpg" class="d-block w-100" class="img-responsive" style="width:auto 0 " style=padding:2rem; alt="car">
            </div>
            <div class="carousel-item">
                <img src="./img/img 300 000€/achat-villa-de-luxe-et-de-prestige-le-coeur-de-l-europe-lcde-dubai-emirates-arabes-unis.jpg" class="d-block w-100" class="img-responsive" style="width:auto 0 auto 0" style=padding:2rem; alt="car">
            </div>
        </div>
    </div>

    <hr class="light">

    <section class="bien">
        <h2>Bien à vendre</h2>



        <hr class="light">
        <h3>Maison spacieuse</h3><br>
        <p class=bobo>Prix : 300 000 €</p>
    </section>
    <hr class="light">

    <section class="bien1">

        <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                <img src="img\img200 000€\0-modele-de-maison-pertuis-115m-maisons-bati-france.jpg" class="img-responsive" width:auto 0 auto 0" style=padding:2rem; alt="">
            </a>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                <img src="img\img200 000€\maison moderne 200 000€.jpg"" class="img-responsive" width:auto 0 auto 0" style=padding:2rem; alt="">
            </a>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                <img src="img\img200 000€\maison-moderne-250-000-euros_7 (1).jpg"" class="img-responsive" width:auto 0 auto 0" style=padding:2rem; alt="">
            </a>
        </div>


        <div>
            <p>Prix : 200 000 €</p>
        </div>
    </section>
    <hr class="light">

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://unsplash.imgix.net/uploads%2F1411419068566071cef10%2F7562527b?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=240c45655f09c546232a6f106688e502" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Round Icons</h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://unsplash.imgix.net/44/9s1lvXLlSbCX5l3ZaYWP_hdr-1.jpg?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=f0a1db79752dbb04ec6d2aab7d17c7b0" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Startup Framework</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://unsplash.imgix.net/46/Ov6ZY1zLTWmhPC0wFysP_IMG_2896_edt.jpg?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=6518e4df89659818f6c0392175a9c5e6" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Treehouse</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://unsplash.imgix.net/44/9s1lvXLlSbCX5l3ZaYWP_hdr-1.jpg?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=f0a1db79752dbb04ec6d2aab7d17c7b0" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Golden</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://unsplash.imgix.net/46/Ov6ZY1zLTWmhPC0wFysP_IMG_2896_edt.jpg?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=6518e4df89659818f6c0392175a9c5e6" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Escape</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://unsplash.imgix.net/uploads%2F1411419068566071cef10%2F7562527b?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=240c45655f09c546232a6f106688e502" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Dreams</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 
    <section class="bien1">
        <div class="carouselle" data-carousel="3" data-speed="2000">
            <img src="./img/maison moderne 200 000€.jpg" alt="Appartement à vendre">
            <img src="./img/maison moderne 200 000€.jpg" alt="Appartement à vendre">
            <img src="./img/maison moderne 200 000€.jpg" alt="Appartement à vendre">
            <h3>Appartement Acheté</h3>
            <p>Prix : Vendu</p>
        </div>
        <!-- Ajoutez plus de biens ici -->
    <!-- </section> -->

    <footer>
        <p>&copy; 2023 Agence Immobilière XYZ. Tous droits réservés.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="./java.js"></script>
</body>

</html>