<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="asset/img/ms2.ico">
    <link rel="apple-touch-icon" href="asset/img/ms2.ico" />


    <title>Portfolio Smaga Michaël</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/project.css">
    <link rel="stylesheet" href="asset/css/nav.css">
    <link rel="stylesheet" href="asset/css/home.css">
    <link rel="stylesheet" href="asset/css/footer.css">
    <link rel="stylesheet" href="asset/css/contact.css">
    <link rel="stylesheet" href="asset/css/about.css">
    <link rel="stylesheet" href="asset/extension/particles/css/style.css">



    <!--permet de charger tout les composants à partir du serveur de bootstrap -->

    <!--lien vers la police d'écriture-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">

    <!--lien vers la base de donnée d'icone-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="asset/extension/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="script.js"> -->
</head>


<body>
    <?php

    if (!empty($_POST)) { // on vérifie que le formulaire est soumis 
        header('Location: index.php?success=1#CONTACT');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $Subject = $_POST['Subject'];
        $message = $_POST['message'];
    }
    ?>



    <!--BARRE DE NAVIGATION BOOTSTRAP-->
    <nav class="sidebar navbar-expand-lg navbar-dark  pt-2 pb-2">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul>
                <li>
                    <h1>Smaga <span class="name"><strong>Michaël</strong></span></h1>
                </li>

                <li>
                    <a href="#">
                        <i class="fas fa-arrow-circle-up"></i>
                        <button id="home_button" class="buttonSidebar">Accueil</button>
                    </a>
                </li>

                <li>
                    <a href="#APROPOS">
                        <i class="fa fa-user "></i>
                        <button id="about_button" class="buttonSidebar">A propos</button>
                    </a>
                </li>


                <li>
                    <a href="#PROJECT">
                        <i class="far fa-folder-open"></i>
                        <button id="project_button" class=" buttonSidebar " type="button">Mes projets</button></a>
                </li>



                <li><a onClick="window.open('asset/doc/CV.pdf');">
                        <i class="fas fa-download"></i>
                        <button id="cv_button" class="buttonSidebar">Mon CV</button></a>
                </li>

                <li>
                    <a href="#CONTACT">
                        <i class="fas fa-at"></i>
                        <button id="contact_button" class="buttonSidebar">Contact</button>
                    </a><!-- <span class="hover"></span> -->
                </li>
            </ul>
        </div>
    </nav>


    <div class="page">
        <!-- particles.js container -->


        <!-- Partie PORTFOLIO-->
        <!-- si bg portfolio relative => pointer event ne fonctionne pas mais particules derriere avatar
        si bg portfolio absolute => pointer fonctionne mais particules devant avatar-->
        <div id="div_home" class="bg-portfolio pointer-events: auto">
            <div id="particles-js"></div>
            <div class="container text-center fondTitle div-home-child">
                <br><br>
                <img width="240" src="asset/img/avatarb.png" alt="Smaga Michaël">
                <h1>Smaga Michaël</h1>
                <div class="my-4 separator d-flex justify-content-center align-items-center">
                    <div class="line"></div>
                    <!--my-4 = margin sur l'axe Y de 4-->
                    <i class="fas fa-laptop-code fa-4x mx-4"></i>
                    <div class="line"></div>
                </div>
                <p>Développeur web</p>
            </div>
        </div>



        <!--Partie PROPOS -->
        <div id="div_about" class="bg-about" hidden>
            <!--A PROPOS -->
            <div class="container ">
                <div id="APROPOS" class="mb-2 separator d-flex justify-content-center align-items-center mb-5">
                    <div class="line"></div>
                    <i class="fas fa-id-card-alt fa-2x mx-2"></i>
                    <h2>A propos</h2>
                    <i class="fas fa-id-card-alt fa-2x mx-2"></i>
                    <div class="line"></div>
                </div>
            </div>

            <!--Carousel -->
            <div class="container ">

                <!--Début carousel-->
                <div id="carouselExampleControls" class="carousel slide container" data-ride="carousel" data-interval="false">

                    <div class="carousel-inner backgroundApropos">
                        <!--Ensemble slide-->

                        <div class="carousel-item active">
                            <!--Page 1 activé par defaut-->

                            <div class="row">
                                <div class="col-lg-12 ">

                                    <h3>Recherche d'un premier emploi</h3>
                                    <p>Madame, Monsieur,</p>

                                    <!-- <p>
                                        Etant inscrit au centre de formation M2i, à la formation : ‘’ Concepteur / Développeur d'Application’’, je suis à la recherche d’une entreprise dans ce domaine pour y effectuer un stage afin de valider cette formation. (Date de stage: 5 Mai 2021 au 4 août 2021).
                                        </br>
                                        D'ici la fin de cette formation, j'aurais vu: </p> -->
                                    <p>
                                        Ayant fini ma formation et obtenu mon titre professionnel de Concepteur Développeur d'Application
                                        au centre de formation M2i, ainsi que mon stage en tant que développeur Fullstack chez WeBreathe,
                                        je suis à l'écoute de toute offre pouvant m'intéresser.
                                        </br>
                                        Dans cette formation j'ai pu voir : </p>
                                    <!-- 
                                    <p class="d-flex justify-content-center align-items-center  ">(Suivez mon avancée = &#x2611; )</p> -->
                                </div>

                                <div class="col-lg-2 col-md-6">
                                    <ul>
                                        <li class="titleli">Différents langages:</li>
                                        <li class="puceOk">html </li>
                                        <li class="puceOk">css </li>
                                        <li class="puceOk">PHP</li>
                                        <li class="puceOk">JavaScript </li>
                                        <li class="puceOk">UML</li>
                                    </ul>
                                </div>


                                <div class="col-lg-2 col-md-6">
                                    <ul>
                                        <!-- <li class="titleli">Framework Java:</li>
                                        <li>Spring</li>
                                        <li>Hibernate</li>
                                        <li class="nopuce"></li>
                                        <br> -->
                                        <li class="titleli">Framework PHP:</li>
                                        <li class="puceOk">Symfony</li>
                                    </ul>
                                </div>

                                <div class="col-lg-2 col-md-6">
                                    <ul>
                                        <li class="titleli">Framework JavaScript:</li>
                                        <li class="puceOk">Angular</li>
                                        <li class="puceOk">Ionic</li>
                                    </ul>

                                </div>

                                <div class="col-lg-2 col-md-6">
                                    <ul>
                                        <li class="titleli">Base de données:</li>
                                        <li class="puceOk">SQL</li>
                                        <li class="puceOk">MySQL</li>
                                    </ul>
                                </div>

                                <div class="col-lg-2 col-md-6">
                                    <ul>
                                        <li class="titleli">Ainsi que</li>
                                        <li class="puceOk">Bootstrap</li>
                                        <li class="puceOk">Jquery</li>
                                        <li class="puceOk">git</li>
                                        <li class="puceOk">github</li>
                                    </ul>
                                </div>




                                <div class="col-lg-2 col-md-6">
                                    <ul>
                                        <li class="titleli">Et aussi:</li>
                                        <li class="puceOk">Méthodologie de projet (Scrum)</li>
                                        <li class="puceOk">Algorithmie </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Fin de page 1-->

                        <div class="carousel-item">
                            <!--Page 2 motivation-->
                            <p>
                                </br>
                                Curieux de nature et avec l’envie d’en apprendre toujours plus, j’ai suivi en plus de la formation Concepteur Développeur d'Application, le MOOC SecNumacadémie de l’ANSSI sur les modules suivants : Panorama de la SSI, Sécurité de l’authentification, Sécurité sur internet, Sécurité du poste de travail et nomadisme. Je me forme également en autodidacte afin d’acquérir de bonnes bases solides utiles à la poursuite de mon objectif professionnel.
                                </br>
                                </br>
                                De nature optimiste, avec une très bonne facilité d’adaptation tant à un poste que dans une équipe, et une curiosité sans fin, je serais capable de m’intégrer au mieux dans votre structure et je serais heureux d’en apprendre davantage à vos côtés.
                                </br>
                                </br>
                                Cette formation a été une réelle opportunité pour moi, je suis plus que motivé à donner le meilleur de moi-même afin de continuer dans cette voie, et c’est avec plaisir que je mettrai mon expérience dans ce domaine, à votre disposition afin de remplir vos objectifs qui deviendront les miens.
                                </br>
                                </br>
                                Si vous voulez plus de renseignements à mon sujet, je serai ravi d’y répondre lors d’un éventuel entretien. Pour plus de renseignements sur la formation, je vous invite à suivre ce lien : <a class="formation " href="https://www.m2iformation.fr/uploads/browser/documents/pdf/lille/fiche_cda-formation_concepteur_developpeur_d_applications_cambrai-oct2020.pdf" target="_blank">"Formation Concepteur Développeur d'Application" </a>
                                </br> </br>

                                En espérant que ceci retiendra votre attention, veuillez agréer, Madame, Monsieur, ma considération distinguée.
                                <br><br><br>
                            </p>
                        </div>
                        <!--Fin de page 2-->
                    </div>

                    <!--Button previous-->

                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <!--Button next-->
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>


        </div>


        <!-- Partie PROJET-->
        <div id="div_project" class="bg-project" hidden>
            <div class="container">
                <!--sert à centrer le contenu et aussi au responsive il faut le faire à chaque partie -->
                <h2 id="PROJECT">Mes projets</h2>

                <div class="mb-2 separator d-flex justify-content-center align-items-center ">
                    <div class="line"></div>
                    <!--my-4 = margin sur l'axe Y de 4-->
                    <i class="fas fa-folder-open fa-4x mx-4"></i>
                    <div class="line"></div>
                </div>
                <!-- boutons des différentes techno -->
                <button id="all_project_button" class="techno-button">Tout</button>
                <button id="symfony_button" class="techno-button">Symfony</button>
                <button id="angular_button" class="techno-button">Angular</button>
                <button id="php_button" class="techno-button">PHP</button>
                <button id="javascript_button" class="techno-button">Javascript</button>
                <button id="laravel_button" class="techno-button">Laravel (à venir)</button>
                <button id="template_button" class="techno-button">Template</button>


                <div class="row">
                    <!--bootstrap fonctionne sur une grille de 12 On peut donc avoir une row avec 4 colonnes de 3-->

                    <!--On aura 3 colonne sur pc donc 4 (12/3 = 4) , 
                        6 colonnes sur tablettes et 1 sur mobiles-->
                    <!-- vignette Aperture-->
                    <div class="col-12 col-md-6 col-lg-3 mb-4 javascript">
                        <div class="position-relative">
                            <a href="#" data-toggle="modal" data-target="#project-1">
                                <div class="filter">
                                    <!--Calque sur image-->
                                    <img src="asset/img/star.gif" alt="">
                                </div>
                            </a>
                            <div class=" baseprojet projet3">
                                <img width="100%" class="image " src="asset/img/imgModalProject/Aperture Taquin.PNG" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- vignette E-gaming-->
                    <div class="col-12 col-md-6 col-lg-3 mb-4 symfony">
                        <div class="position-relative">
                            <a href="#" data-toggle="modal" data-target="#project-2">
                                <div class="filter">
                                    <!--Calque sur image-->
                                    <img src="asset/img/star.gif" alt="">
                                </div>
                            </a>
                            <div class=" baseprojet projet2">
                                <img width="100%" class="image " src="asset/img/imgModalProject/egaming.PNG">
                            </div>
                        </div>
                    </div>


                    <!-- vignette Angupex-->
                    <div class="col-12 col-md-6 col-lg-3  mb-4 angular">
                        <div class="position-relative">
                            <a href="#" data-toggle="modal" data-target="#project-3">
                                <div class="filter">
                                    <!--Calque sur image-->
                                    <img src="asset/img/star.gif" alt="">
                                </div>
                            </a>
                            <div class=" baseprojet projet3">
                                <img width="100%" class="image " src="asset/img/imgModalProject/Angupex.PNG">
                            </div>
                        </div>
                    </div>


                    <!-- vignette Amalshia-->
                    <div class="col-12 col-md-6 col-lg-3  mb-4 php">
                        <div class="position-relative">
                            <a href="#" data-toggle="modal" data-target="#project-4">
                                <div class="filter">
                                    <!--Calque sur image-->
                                    <img src="asset/img/star.gif" alt="">
                                </div>
                            </a>
                            <div class=" baseprojet projet4">
                                <img width="100%" class="image " src="asset/img/imgModalProject/Amalshia.PNG">
                            </div>
                        </div>
                    </div>


                    <!-- vignette webflix-->
                    <div class="col-12 col-md-6 col-lg-3  mb-4 php">
                        <div class="position-relative">
                            <a href="#" data-toggle="modal" data-target="#project-5">
                                <div class="filter">
                                    <!--Calque sur image-->
                                    <img src="asset/img/star.gif" alt="">
                                </div>
                            </a>
                            <div class=" baseprojet projet4">
                                <img width="100%" class="image " src="asset/img/imgModalProject/webflix.PNG">
                            </div>
                        </div>
                    </div>

                    <!-- vignette immobiliare-->
                    <div class="col-12 col-md-6 col-lg-3  mb-4 symfony">
                        <div class="position-relative">
                            <a href="#" data-toggle="modal" data-target="#project-6">
                                <div class="filter">
                                    <!--Calque sur image-->
                                    <img src="asset/img/star.gif" alt="">
                                </div>
                            </a>
                            <div class=" baseprojet projet4">
                                <img width="100%" class="image " src="asset/img/imgModalProject/immobiliare.PNG">
                            </div>
                        </div>
                    </div>

                    <!-- vignette pizzaparty-->
                    <div class="col-12 col-md-6 col-lg-3  mb-4 angular">
                        <div class="position-relative">
                            <a href="#" data-toggle="modal" data-target="#project-7">
                                <div class="filter">
                                    <!--Calque sur image-->
                                    <img src="asset/img/star.gif" alt="">
                                </div>
                            </a>
                            <div class=" baseprojet projet4">
                                <img width="100%" class="image " src="asset/img/imgModalProject/pizzaparty.PNG">
                            </div>
                        </div>
                    </div>

                    <!-- vignette library-->
                    <div class="col-12 col-md-6 col-lg-3  mb-4 template">
                        <div class="position-relative">
                            <a href="#" data-toggle="modal" data-target="#project-8">
                                <div class="filter">
                                    <!--Calque sur image-->
                                    <img src="asset/img/star.gif" alt="">
                                </div>
                            </a>
                            <div class=" baseprojet projet4">
                                <img width="100%" class="image " src="asset/img/imgModalProject/library.PNG">
                            </div>
                        </div>
                    </div>








                    <!--On passe à la ligne dès qu'on est à 12-->
                    <div class="col-12 col-md-6 col-lg-3  mb-4">
                        <div class="position-relative">
                            <a href="#" data-toggle="modal" data-target="#project-8">
                                <div class="filter">
                                    <!--Calque sur image-->
                                    <img src="asset/img/star.gif" alt="">
                                </div>
                            </a>
                            <div class=" baseprojetVide projet5">

                                <p> PROJET à venir</p>
                            </div>
                        </div>
                    </div>





                </div>
                <!--Fin de la div Row-->

                <div>
                    <!--PARTIE MODAL -->

                    <!--Modal 1 Aperture-->
                    <div class="modal fade" id="project-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content hauteurModal">

                                <div class="modal-header">
                                    <h5 class="modal-title">Jeu taquin : Aperture Science</h5>
                                    <button class="close" data-dismiss="modal">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <img width="100%" src="asset/img/imgModalProject/Aperture Taquin.PNG" alt="">
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    <a href="projet/Exo_Jeu_taquin/index.html" target="_blank" class="btn btn-success">Voir la maquette</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Modal 2 E-Gaming-->
                    <div class="modal fade" id="project-2">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content hauteurModal">

                                <div class="modal-header">
                                    <h5 class="modal-title">Projet Symfony : E-Gaming</h5>
                                    <button class="close" data-dismiss="modal">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <img width="100%" src="asset/img/imgModalProject/egaming.PNG" alt="">
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    <a href="https://www.egaming.smaga-michael.fr/" target="_blank" class="btn btn-success">Voir la maquette</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Modal 3 ANGUPEX-->
                    <div class="modal fade" id="project-3">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content hauteurModal">

                                <div class="modal-header">
                                    <h5 class="modal-title">Projet Angular : Reprise du site d'Apex afin de s'entrainer sur Angular</h5>
                                    <button class="close" data-dismiss="modal">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <img width="100%" src="asset/img/imgModalProject/Angupex.PNG" alt="">
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    <a href="https://www.augupex.smaga-michael.fr/" target="_blank" class="btn btn-success">Voir la maquette</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Modal 4 Amalshia-->
                    <div class="modal fade" id="project-4">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content hauteurModal">

                                <div class="modal-header">
                                    <h5 class="modal-title">Portfolio d'une illustratrice : Amalshia </h5>
                                    <button class="close" data-dismiss="modal">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <img width="100%" src="asset/img/imgModalProject/Amalshia.PNG" alt="">
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    <a href="projet/Portfolio_Amalshia/Page/page/Page0_Accueil.php" target="_blank" class="btn btn-success">Voir la maquette</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Modal 5 Webflix-->
                    <div class="modal fade" id="project-5">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content hauteurModal">

                                <div class="modal-header">
                                    <h5 class="modal-title">Projet PHP : Création d'un site "Webflix"</h5>
                                    <button class="close" data-dismiss="modal">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <img width="100%" src="asset/img/imgModalProject/webflix.PNG" alt="">
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    <a href="https://www.webflix.smaga-michael.fr" target="_blank" class="btn btn-success">Voir la maquette</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Modal 6 Immobiliare-->
                    <div class="modal fade" id="project-6">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content hauteurModal">

                                <div class="modal-header">
                                    <h5 class="modal-title">Projet Symfony : "Immobiliare"</h5>
                                    <button class="close" data-dismiss="modal">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <img width="100%" src="asset/img/imgModalProject/immobiliare.PNG" alt="">
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    <a href="https://www.immobiliare.smaga-michael.fr/" target="_blank" class="btn btn-success">Voir la maquette</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--Modal 7 PizzaParty-->
                    <div class="modal fade" id="project-7">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content hauteurModal">

                                <div class="modal-header">
                                    <h5 class="modal-title">Projet Angular : "PizzaParty"</h5>
                                    <button class="close" data-dismiss="modal">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <img width="100%" src="asset/img/imgModalProject/pizzaparty.PNG" alt="">
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    <a href="https://www.pizzaparty.smaga-michael.fr/" target="_blank" class="btn btn-success">Voir la maquette</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Modal 8 library-->
                    <div class="modal fade" id="project-8">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content hauteurModal">

                                <div class="modal-header">
                                    <h5 class="modal-title">Projet template : "The Library"</h5>
                                    <button class="close" data-dismiss="modal">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <img width="100%" src="asset/img/imgModalProject/library.PNG" alt="">
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    <a href="http://www.templates.smaga-michael.fr/" target="_blank" class="btn btn-success">Voir la maquette</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Fin PARTIE MODAL -->
                </div>
            </div> <br><br>
        </div>

        <!-- Partie CONTACT-->
        <div id="div_contact" class="contact" hidden>

            <div class="container">
                <div id="CONTACT" class="mb-2  separator d-flex justify-content-center align-items-center">
                    <!--Separateur-->
                    <div class="line"></div>
                    <h2>Me contacter</h2>
                    <!--my-4 = margin sur l'axe Y de 4-->
                    <i class="fas fa-mail-bulk fa-2x mx-2"></i>
                    <div class="line"></div>
                </div>

                <?php
                if (isset($_GET['success'])) {
                    echo '<p class="MessageSuccess form-group text-center">Votre message a bien été envoyé</p><br>';
                }
                ?>

                <div class="col-lg-8 mx-auto ">
                    <!--formulaire  contact-->

                    <form class="contact-form" method="POST">
                        <!--balise pour indiquer le formulaire-->
                        <div class="form-group shadowblock">
                            <label for="name" class="d-none ">Nom</label>
                            <input type="text" name="name" id="Nom" placeholder="Nom" class="form-control">
                        </div>

                        <div class="form-group shadowblock">
                            <label for="email" class="d-none">Email</label>
                            <input type="email" name="email" id="email" placeholder="Adresse email" class="form-control">
                        </div>

                        <div class="form-group shadowblock">
                            <label for="phone" class="d-none">Téléphone</label>
                            <input type="phone" name="phone" id="phone" placeholder="Téléphone" class="form-control">
                        </div>

                        <div class="form-group shadowblock">
                            <label for="Subject" class="d-none">Sujet</label>
                            <input type="Subject" name="Subject" id="Subject" placeholder="Sujet" class="form-control">
                        </div>

                        <label for="message"></label>
                        <textarea name="message" id="message" cols="60" rows="10" placeholder="Saisissez votre message " class="form-control shadowblock"></textarea>

                        <div class="text-center ">
                            <button class="buttonContact">Envoyer</button>
                        </div>
                        <div class="form-group text-center">
                            <a class="envoyermail" href="mailto:smaga.michael@bbox.fr">Ou si vous préférez envoyez moi un Mail directement depuis votre boîte mail en cliquant ici</a>
                        </div>
                    </form>
                </div>


                <br>

            </div>
        </div>

        <!--FOOTER-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h3>Adresse</h3>
                        <p>- Nord-Pas-De-Clais -<br> - - - - - - - - -

                        </p>
                    </div>
                    <div class="col-lg-4">
                        <h3>Réseau sociaux</h3>


                        <a class="btn btn-lg btn-outline-light" href="https://www.linkedin.com/in/michael-smaga-88667a136/" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>

                        <a class="btn btn-lg btn-outline-light" href="https://github.com/SmagaMichael" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>

                    </div>

                    <div class="col-lg-4">
                        <h3>A propos</h3>
                        <p>Merci de votre visite &#128522; </p>
                    </div>
                </div>
            </div>
        </footer>


        <div class="bg-copyright text-center py-2">
            <div class="container">
                <small class="m-0">Copyright &copy; Smaga Michaël 2021 </small>
            </div>
        </div>


        <?php

        if (isset($_POST) && !empty($_POST)) {
            //si le champs est rempli et différent de vide 

            $to    = "smaga.michael@bbox.fr";


            // adresse MAIL OVH liée à l’hébergement.
            $from  = $_POST["email"];
            ini_set("SMTP", "smtp.smaga-michael.fr");   // Pour les hébergements mutualisés Windows de OVH

            // *** Laisser tel quel
            $JOUR  = date("Y-m-d");
            $HEURE = date("H:i");



            $Subject = $_POST['Subject'];
            // $Subject .='Content-Type: text/html; charset="utf-8"'." ";
            // $Subject .='Content-Transfer-Encoding: 8bit';

            $mail_Data = "";

            $mail_Data .= "<html> \n";

            $mail_Data .= "<head> \n";
            $mail_Data .= "<title> Demande de projet </title> \n";
            $mail_Data .= "</head> \n";

            $mail_Data .= "<body> \n";
            $mail_Data .= '<b>' . $Subject . '</b> <br>';
            $mail_Data .= "<br> \n";
            $mail_Data .= $_POST["message"] . '<br>';
            $mail_Data .= "<br> \n";
            $mail_Data .= '' . $_POST['name'] . ': ' . $_POST["phone"] . '<br>';
            $mail_Data .= "</body> \n";

            $mail_Data .= "</HTML> \n";

            $headers  = "MIME-Version: 1.0 \n";
            $headers .= "From: $from  \n";
            $headers .= 'Content-Type: text/html; charset="utf-8"' . " ";
            // ici on envoie le mail au format texte encodé en UTF-8
            // $headers .= "Content-type: text/html; charset=iso-8859-1 \n";

            $headers .= 'Content-Transfer-Encoding: 8bit';
            // ici on précise qu'il y a des caractères accentués


            // Message de Priorité haute
            $headers .= "X-Priority: 1  \n";
            $headers .= "X-MSMail-Priority: High \n";


            $CR_Mail = TRUE;
            $CR_Mail = @mail($to, $Subject, $mail_Data, $headers);


            // if ($CR_Mail === FALSE){
            //     echo " ### CR_Mail=$CR_Mail - Erreur envoi mail <br> \n";
            // }else{
            //     echo " *** CR_Mail=$CR_Mail - Mail envoyé<br> \n";
            // }
        }

        ?>



        <!-- scripts -->
        <script src="asset/extension/particles/particles.js"></script>
        <script src="asset/extension/particles/js/app.js"></script>

        <script src="asset/extension/jquery-3.5.1.min.js"></script>
        <script src="asset/extension/bootstrap.bundle.min.js"></script>
        <script src="asset/js/script.js"></script>

</body>


</html>