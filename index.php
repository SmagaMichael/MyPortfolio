<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="asset/img/autre/ms2.ico">
    <link rel="apple-touch-icon" href="asset/img/autre/ms2.ico" />


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
        <div id="div_home" class="bg-portfolio pointer-events: auto">
            <div id="particles-js"></div>
            <div class="container text-center fondTitle div-home-child">
                <br><br>
                <img width="240" src="asset/img/autre/avatarb.png" alt="Smaga Michaël">
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
            

            <div class="container ">
                <div id="APROPOS" class="mb-2 separator d-flex justify-content-center align-items-center mb-5">
                    <div class="line"></div>
                    <i class="fas fa-id-card-alt fa-2x mx-2"></i>
                    <h2>A propos</h2>
                    <i class="fas fa-id-card-alt fa-2x mx-2"></i>
                    <div class="line"></div>
                </div>
            </div>

            <div class="container ">
                <!-- <div id="carouselExampleControls" class="carousel slide container" data-ride="carousel" data-interval="false">

                    <div class="carousel-inner backgroundApropos">

                        <div class="carousel-item active"> -->
                <div class="row">
                    <div class="col-lg-12 ">

                        <h3>Recherche d'un premier emploi</h3>
                        <p>Madame, Monsieur,</p>

                        <p>
                            Ayant fini ma formation et obtenu mon titre professionnel de Concepteur Développeur d'Application
                            au centre de formation M2i, ainsi que mon stage en tant que développeur Fullstack chez WeBreathe,
                            je suis à l'écoute de toute offre pouvant m'intéresser.
                            </br>
                            Dans cette formation j'ai pu voir : </p>
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

                    <div class="">
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
                </div>
            </div>
        </div>


        <!-- Partie PROJET-->
        <div id="div_project" class="bg-project" hidden>
            <div class="container">
                <h2 id="PROJECT">Mes projets</h2>

                <div class="mb-2 separator d-flex justify-content-center align-items-center ">
                    <div class="line"></div>
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

                <!-- partie case projet -->
                <div class="row">
                    <?php
                    include('case-project/case-taquin.php');
                    include('case-project/case-webflix.php');
                    include('case-project/case-immobiliare.php');
                    include('case-project/case-egaming.php');
                    include('case-project/case-library.php');
                    include('case-project/case-pizzaparty.php');
                    include('case-project/case-angupex.php');
                    include('case-project/case-lior.php');
                    include('case-project/case-amalshia.php');
                    include('case-project/case-x-avenir.php');


                    ?>
                </div>
                <!--Fin de la div Row-->

                <div>
                    <!--PARTIE MODAL -->
                    <?php
                    include('modal-project/modal-taquin.php');
                    include('modal-project/modal-egaming.php');
                    include('modal-project/modal-angupex.php');
                    include('modal-project/modal-webflix.php');
                    include('modal-project/modal-immobiliare.php');
                    include('modal-project/modal-pizzaparty.php');
                    include('modal-project/modal-library.php');
                    include('modal-project/modal-lior.php');
                    include('modal-project/modal-amalshia.php');

                    ?>
                </div>

            </div>
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
                            <label for="name" class="d-none ">Nom*</label>
                            <input onkeyup='javascript:isCharSet()' type="text" name="name" id="Nom" placeholder="Nom*" class="form-control">
                        </div>

                        <div class="form-group shadowblock">
                            <label for="email" class="d-none">Email*</label>
                            <input onkeyup='javascript:isCharSet()' type="email" name="email" id="email" placeholder="Adresse email*" class="form-control">
                        </div>

                        <div class="form-group shadowblock">
                            <label for="phone" class="d-none">Téléphone</label>
                            <input onkeyup='javascript:isCharSet()' type="phone" name="phone" id="phone" placeholder="Téléphone" class="form-control">
                        </div>

                        <div class="form-group shadowblock">
                            <label for="Subject" class="d-none">Sujet*</label>
                            <input onkeyup='javascript:isCharSet()' type="Subject" name="Subject" id="Subject" placeholder="Sujet*" class="form-control">
                        </div>

                        <div class="form-group shadowblock">
                            <label for="message" class="d-none"></label>
                            <textarea onkeyup='javascript:isCharSet()' name="message" id="message" cols="60" rows="10" placeholder="Saisissez votre message* " class="form-control "></textarea>

                        </div>

                        <div class="text-center ">
                            <button class="buttonContact" disabled>Envoyer</button>
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
        <script src="asset/js/contact.js"></script>

</body>


</html>