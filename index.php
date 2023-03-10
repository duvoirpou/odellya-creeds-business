<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Accueil - Creed's</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/favicon.png" rel="apple-touch-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    include('partials/header.php');
    ?>
    <!-- Scrollable modal -->
    <div class="modal fade" id="ModalDevis" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Demande de devis</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nom(s) & Pr??nom(s) ou Nom de
                                l'Entreprise</label>
                            <input type="email" class="form-control" placeholder="Ex : O'dellya Consulting" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">T??l??phone</label>
                            <input type="email" class="form-control" placeholder="Ex : +242 06 601 33 86" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Ex : contact@creeds-bg.cg" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Type de devis</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>--- Selectionnez le type de devis---</option>
                                <option value="1">D??vis descriptif</option>
                                <option value="2">D??vis quantitatif</option>
                                <option value="3">D??vis estimatif</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Expression du besoin</label>
                            <textarea class="form-control rounded" placeholder="Votre message ici" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label ">D??sirez-vous une rencontre t??l??phonique ?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">Oui</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">Non</label>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-yellow">Soumettre la demande</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="assets/img/transformation.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <h1 class="display-4 text-white animated slideInRight">Unit??s et ??quipements de
                                        transformation</h1>
                                    <h3 class=" fw-medium text-white text-uppercase animated slideInRight">Obtenez votre
                                        devis en 48H</h3>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInLeft">D??couvrir plus</a>
                                    <a href="" class="btn btn-outline-primary animated slideInRight py-3 px-5 mar-to" data-bs-toggle="modal" data-bs-target="#ModalDevis">Demander un devis </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="assets/img/banner_01.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <h1 class="display-4 text-white mb-5 animated slideInRight">Engins et ??quipements
                                        agricoles</h1>
                                    <h3 class=" fw-medium text-white text-uppercase animated slideInRight">Obtenez votre
                                        devis en 48H</h3>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInLeft">D??couvrir plus</a>
                                    <a href="" class="btn btn-outline-primary animated slideInRight py-3 px-5 mar-to" data-bs-toggle="modal" data-bs-target="#ModalDevis">Demander un devis </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="assets/img/banner_solaire.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <h1 class="display-4 text-white animated slideInRight">Produits solaires et syst??me
                                        de s??curit??/suret??</h1>
                                    <h3 class=" fw-medium text-white text-uppercase animated slideInRight">Obtenez votre
                                        devis en 48H</h3>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInLeft">D??couvrir plus</a>
                                    <a href="" class="btn btn-outline-primary animated slideInRight py-3 px-5 mar-to" data-bs-toggle="modal" data-bs-target="#ModalDevis">Demander un devis </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="assets/img/approvisionnement.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <h1 class="display-4 text-white animated slideInRight">Achat et approvisionnement</h1>
                                    <h3 class=" fw-medium text-white text-uppercase animated slideInRight">Obtenez votre
                                        devis en 48H</h3>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInLeft">D??couvrir plus</a>
                                    <a href="" class="btn btn-outline-primary animated slideInRight py-3 px-5 mar-to" data-bs-toggle="modal" data-bs-target="#ModalDevis">Demander un devis </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Pr??c??dent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-3 h-100">
                        <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid" src="assets/img/bonne-illustration.png">
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid" src="assets/img/gens-affaires.png">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <!-- <p class="fw-medium text-uppercase text-primary mb-2"> A Propos de nous</p> -->
                    <h1 class="display-5 mb-4">Qui sommes-nous?</h1>
                    <p class="mb-4">Nous sommes un groupe de consultants sp??cialis??s en assistance et accompagnement de
                        projet industriel, gestion d'achat et approvisionnement. Con??u ?? cet effet pour r??pondre ?? vos
                        attentes dans le domaine d'activit?? de votre choix.
                    </p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 bg-primary p-4">
                            <h1 class="text-white">10</h1>
                            <h5 class="text-white">Ann??es</h5>
                            <h5 class="text-white">d'Experience</h5>
                        </div>
                        <div class="ms-4">
                            <div class="mb-0 d-flex"><i class="fa fa-check text-primary me-2 mt-1"></i>
                                <p>Unit?? et Equipements de Transformation Agroalimentaire</p>
                            </div>
                            <div class="mb-0 d-flex"><i class="fa fa-check text-primary me-2"></i>
                                <p>Emballage, Marquage et Etiquetage des Produits Alimentaires</p>
                            </div>
                            <div class="mb-0 d-flex"><i class="fa fa-check text-primary me-2"></i>
                                <p>Engins et Equipements agricoles</p>
                            </div>
                            <div class="mb-0 d-flex"><i class="fa fa-check text-primary me-2"></i>
                                <p>Produits et Equipements solaires</p>
                            </div>
                            <div class="mb-0 d-flex"><i class="fa fa-check text-primary me-2"></i>
                                <p>Syst??me de S??curit?? et Suret??</p>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-envelope-open text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Envoyez-nous un email</p>
                                    <h6 class="mb-0">creedsarlu@gmail.com</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Appelez-nous</p>
                                    <h6 class="mb-0">+242 06 601 33 86</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Debut notre mission -->
                    <h1 class="display-5 mb-4 mt-5">Notre mission</h1>
                    <p class="mb-4">Nous vous aidons ?? acheter et installer ou moderniser des lignes de productions de
                        derni??re g??n??ration ?? un prix comp??titif.</p>
                    <p>Vous assister et vous accompagner dans la concr??tisation de votre projet ?? votre demande
                        (Investissement industriel dans les PMI), soit la phase de maturation du [...]</p>
                    <!-- Fin notre mission -->

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 p-5">
        <h3 class="text-secondary fw-bold m-auto text-center text-uppercase">Partenaire(s)</h3>
        <div class="row">
            <!-- <div class="col-md-6 col-xl-6 my-5 d-flex justify-content-center align-items-center wow fadeIn" data-wow-delay="0.1s">
                <img src="img/partenaire-1.jpg" alt="">
            </div> -->
            <div class=" col-md-12 col-xl-12 my-5 d-flex justify-content-center align-items-centerwow fadeIn" data-wow-delay="0.1s">
                <img src="assets/img/partenaire-2.png" alt="">
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="assets/img/equipe.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <!-- <p class="fw-medium text-uppercase text-primary mb-2">Pourquoi nous choisir</p> -->
                    <h1 class="display-5 mb-4">
                        <!-- Quelques raisons pour lesquelles vous devez nous choisir -->
                        Trouvez les meilleurs Consultants en Approvisionnement
                    </h1>
                    <p class="mb-4">
                        <b>CREED'S BUSINESS GROUP </b> une plateforme qui r??unit des experts en approvisionnement sur
                        des missions de sourcing mondial, de e-sourcing, de r??duction des co??ts d'achats et plus encore.
                        M??me les grandes entreprises engagent des consultants de notre vivier d'experts pour relever
                        leurs d??fis dans ces domaines.
                    </p>
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-yellow">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>
                                        <!-- Assistance commerciale -->
                                        Rien de plus simple que d'engager des Consultants en Approvisionnement avec
                                        CREED'S BUSINESS GROUP
                                    </h4>
                                    <!-- <span>Nous vous aidons ?? gagner du temps pour vous occuper d'autres questions importantes lors de votre visite sur la plateforme <strong><a href="">ALIBABA</a></strong></span> -->
                                    <p>
                                        <b>Discutez avec un de nos experts</b>
                                    </p>
                                    <p>
                                        Un manager va travailler avec vous pour comprendre votre activit?? et vos
                                        besoins.
                                    </p>
                                    <p>
                                        <b>D??marrez votre projet</b>
                                    </p>
                                    <p>
                                        Travaillez avec vos nouveaux consultants. Nous nous occupons de tout
                                        l'administratifet vous fournirons une aide individualis??e en cas de besoin.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-yellow">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>
                                        <!-- Equipe exp??riment??e et multilingue -->
                                        Trouver les meilleurs Consultants en Approvisionnement pour r??pondre ?? vos
                                        besoins
                                    </h4>
                                    <!-- <span>D??barrassez-vous de vos soucis li??s aux relations avec les fabricants chinois. Importez en toute s??curit?? et de mani??re rentable sachant que vous avez une ??quipe d'experts parlant Chinois et Anglais derri??re vous!</span> -->
                                    <p>
                                        DIFFERENTES CATEGORIES DE NOS CONSULTANTS
                                    </p>
                                    <p>
                                    <ul>
                                        <li>
                                            Consultants en Industrie
                                        </li>
                                        <li>
                                            Consultants en Algrobusinness
                                        </li>
                                        <li>
                                            Consultants en Energie renouvelable
                                        </li>
                                        <li>
                                            Consultants en Gestion de projets
                                        </li>
                                        <li>
                                            Consultants en Digital Marketing
                                        </li>
                                        <li>
                                            Consultants en Multim??dia
                                        </li>
                                        <li>
                                            Consultants en emballage et conditionnement des produits alimentaires
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-yellow">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Gestion des fournisseurs</h4>
                                    <span>Vous traitez actuellement avec une entreprise en chinoise mais les choses se perdent dans la traduction? <br>
                                    Etes-vous frustr?? par les temps de r??ponse lents, les augmentations de prix constantes ou les retards de livraison? <br>
                                    Nous pouvons prendre en charge la gestion de votre (vos) fournisseurs(s) actuel(s), cela devient donc notre defi et non 
                                    votre casse-t??te. Lorsque nous faisons cela, les fournisseurs sont g??n??ralement aussi soulag??s que vous!</span>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <!-- <p class="fw-medium text-uppercase text-primary mb-2">Nos Services</p> -->
                <h1 class="display-5 mb-4">Nous vous offrons des services de qualit??</h1>
            </div>
            <div class="row d-flex justify-content-center gy-5 gx-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="assets/img/service-1.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="assets/img/service-1.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Unit?? de production</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">
                                    Nous sommes importateurs et distributeurs des unit??s de production et de machines industrielles pour diff??rents secteurs.
                                </p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="">Voir plus</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="assets/img/service-4.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="assets/img/service-4.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Engins et ??quipements</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">
                                    Nous fournissons de diverses machines et ??quipements agricoles. Notre gamme de produits couvre les tracteurs ?? 4 roues, les motoculteurs, les pulv??risateurs, les batteuses, les semoirs, les moissonneuses???
                                </p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="">Voir Plus</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="assets/img/service-2.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="assets/img/service-2.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">SOLAIRE</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Nous commercialisons des kits solaires pr??ts ?? l'emploi ou
                                    des composants en detail</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="">Voir Plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Project Start -->
    <div class="container-fluid bg-dark pt-3 my-5 px-0">
        <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <!-- <p class="fw-medium text-uppercase text-white mb-2">Produits</p> -->
            <h1 class="display-5 text-white mb-5">D??couvrez nos produits sur le march??</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
            <a class="project-item" href="">
                <img class="img-fluid" src="assets/img/project-1.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0">Ligne de traitement de la farine de poisson</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="assets/img/project-2.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0">Machine de transformation de fruits et l??gumes</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="assets/img/project-3.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0">Tracteur agricole 120-200HP</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="assets/img/project-4.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0">Lorem ipsum dolor sit amet.</h5>
                </div>
            </a>
        </div>
    </div>
    <!-- Project End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <!-- <p class="fw-medium text-uppercase text-primary mb-2">Notre ??quipe</p> -->
                <h1 class="display-5 mb-5">News</h1>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="assets/img/project-4.jpg" style="height: 300px; width: 100%" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titre</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Il y a 3 min</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="assets/img/project-6.jpg" style="height: 300px; width: 100%" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titre</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Il y a 3 min</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="assets/img/project-5.jpg" style="height: 300px; width: 100%" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titre</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Il y a 3 min</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/creeds/3-36859_transparent-african-american-man-clipart-black-man-in.png" style="height: 400px; width: 100%" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Rob Miller</h5>
                                <span class="text-primary">Directreur G??n??ral</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/creeds/31-313257_black-man-business-png.jpeg" style="height: 400px; width: 100%" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Adam Crew</h5>
                                <span class="text-primary">Directeur des Ressources Humaines</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="img/team-2.jpg" style="height: 400px; width: 100%" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Peter Farel</h5>
                                <span class="text-primary">Directeur Financier et Comptable</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <!-- <p class="fw-medium text-uppercase text-primary mb-2">T??moignages</p> -->
                <h1 class="display-5 mb-5">Ce que disent nos clients</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="assets/img/testimonial-1.jpg">
                        <div class="btn-square bg-yellow rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">John Doe</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="assets/img/testimonial-2.jpg">
                        <div class="btn-square bg-yellow rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">John Doe</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="assets/img/testimonial-3.jpg">
                        <div class="btn-square bg-yellow rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">John Doe</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <?php
    include('partials/footer.php');
    ?>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>