<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Smaga Michaël</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="extension/particles/css/style.css">


    <!--permet de charger tout les composants à partir du serveur de bootstrap -->

    <!--lien vers la police d'écriture-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">

    <!--lien vers la base de donnée d'icone-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="extension/bootstrap.min.css">
    <link rel="stylesheet" href="script.js">
</head>


<body>
    <?php      
                                
        if(!empty($_POST)){ // on vérifie que le formulaire est soumis 
            header('Location: index.php?success=1#CONTACT');
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $Subject = $_POST['Subject'];
            $message = $_POST['message'];


            
        }
    ?>



                        <!--BARRE DE NAVIGATION BOOTSTRAP-->
    <nav class="navbar navbar-expand-lg navbar-dark  pt-2 pb-2">
        <div class="container">
            <a class="navbar-brand" href="#">Smaga Michaël</a>
            <!-- collapse = ouvrir/fermé le menu burger-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">


                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#APROPOS">A propos</a>
                    </li>

                    

                    <li class="nav-item">
                        <a class="nav-link" href="#PROJECT">Projets</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#CONTACT">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="page">
        <div id="particles-js" ></div> <!-- particles.js container -->


                                    <!-- Partie PORTFOLIO-->
        <!-- si bg portfolio relative => pointer event ne fonctionne pas mais particules derriere avatar
        si bg portfolio absolute => pointer fonctionne mais particules devant avatar-->
        <div class=" container bg-portfolio pointer-events: auto mb-5">
            <div class="container text-center fondTitle ">
                <br><br>
                <img width="240" src="img/avatarb.png" alt="Smaga Michaël">
                <h1>Smaga Michaël</h1>
                <div class="my-4 separator d-flex justify-content-center align-items-center">
                    <div class="line"></div>
                    <!--my-4 = margin sur l'axe Y de 4-->
                    <i class="fas fa-laptop-code fa-4x mx-4"></i>
                    <div class="line"></div>
                </div>
                <p>développeur web</p>
            </div>
        </div><br><br>

        

                                            
        <div class="bg-about"><!--A PROPOS -->
            <div class="container ">
                <div  id="APROPOS" class="mt-2 mb-2 separator d-flex justify-content-center align-items-center mb-5">
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

                    <div class="carousel-inner backgroundApropos">  <!--Ensemble slide-->

                        <div class="carousel-item active"><!--Page 1 activé par defaut-->

                            <div class="row">
                                <div class="col-lg-12 ">
                                    
                                    <h3>Recherche de stage</h3>
                                    <p>Madame, Monsieur,</p>
                    
                                    <p>
                                    Etant inscrit au centre de formation M2i, à la formation : ‘’ Concepteur / Développeur d'Application’’, je suis à la recherche d’une entreprise dans ce domaine pour y effectuer un stage afin de valider cette formation. (Date de stage: 5 Mai 2021 au 4 août 2021).
                                    </br>
                                    D'ici la fin de cette formation, j'aurais vu: </p>
                                    <p class="d-flex justify-content-center align-items-center  ">(Suivez mon avancée = &#x2611; )</p>
                                </div>
                    
                                <div class="col-lg-2 col-md-6">
                                    <ul>
                                        <li class="titleli">Différents langages:</li>
                                        <li class="puceOk">html </li>
                                        <li class="puceOk">css </li>
                                        <li>java</li>
                                        <li class="puceOk">PHP</li>
                                        <li class="puceOk">JavaScript  </li>
                                        <li>UML</li>
                                    </ul>
                                </div>
                    
                    
                                <div class="col-lg-2 col-md-6">
                                    <ul>
                                        <li class="titleli">Framework Java:</li>
                                        <li>Spring</li>
                                        <li>Hibernate</li>
                                        <li class="nopuce"></li>
                                    <br>
                                    <li class="titleli">Framework PHP:</li>
                                    <li>Symfony</li>
                                    </ul>
                                </div>
        
                                <div class="col-lg-2 col-md-6">
                                    <ul>
                                        <li class="titleli">Framework JavaScript:</li>
                                        <li>Angular</li>
                                        <li>Ionic</li>
                                        <li >React</li>
                                    </ul>
                        
                                </div>
                    
                                <div class="col-lg-2 col-md-6">
                                    <ul>
                                        <li class="titleli">Base de données:</li>
                                        <li>SQL</li>
                                        <li>MySQL</li>
                                        <li>MongoDB</li>
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
                                        <li>Méthodologie de projet (Scrum)</li>
                                        <li>Gestion des Big Data</li>
                                        <li class="puceOk">Algorithmie  </li>
                                    </ul>
                                </div>
                            </div>                
                        </div> <!--Fin de page 1-->

                        <div class="carousel-item"><!--Page 2 motivation-->
                            <p>
                                </br>
                                Curieux de nature et avec l’envie d’apprendre, j’ai déjà suivi le MOOC SecNumacadémie de l’ANSSI sur les modules suivants : Panorama de la SSI, Sécurité de l’authentification, Sécurité sur internet, Sécurité du poste de travail et nomadisme. Je me forme également en autodidacte afin d’acquérir de bonnes bases solides utiles à la poursuite de mon objectif professionnel.
                                </br>
                                </br>
                                De nature optimiste, avec une très bonne facilité d’adaptation tant à un poste que dans une équipe, et une curiosité sans fin, je serais capable de m’intégrer au mieux dans votre structure et je serais heureux d’en apprendre davantage à vos côtés.
                                </br>
                                </br>
                                Cette formation étant une réelle opportunité pour moi, je suis plus que motivé à donner le meilleur de moi-même afin de réussir cette formation, et c’est avec plaisir que je mettrai  mon expérience dans ce domaine, à votre disposition afin de remplir vos objectifs qui deviendront les miens.
                                </br>
                                </br>
                                Si vous voulez plus de renseignements à mon sujet, je serai ravi d’y répondre lors d’un éventuel entretien. Pour plus de renseignements sur la formation, je vous invite à suivre ce lien : <a class="formation "href="https://www.m2iformation.fr/uploads/browser/documents/pdf/lille/fiche_cda-formation_concepteur_developpeur_d_applications_cambrai-oct2020.pdf" target="_blank">"Formation Concepteur Développeur d'Application" </a>
                                </br>          </br>   
                        
                                En espérant que ceci retiendra votre attention, veuillez agréer, Madame, Monsieur, ma considération distinguée.
                                <br><br><br>
                            </p>                
                        </div> <!--Fin de page 2-->
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

            <!--Afficher CV-->
            <div class="text-center buttonCV">
                <a href="#" class="btn btn-lg btn-outline-light" onClick="window.open('doc/CV.pdf');">
                <i class="fas fa-download"></i>Voir mon CV</a>  
            </div>
        </div><!--FIN A PROPOS -->


                                        <!-- Partie PROJET-->
        <div class="bg-project">
            <div class="container"> <!--sert à centrer le contenu et aussi au responsive il faut le faire à chaque partie -->
                <h2 id="PROJECT">Mes projets</h2>

                <div class="mt-2 mb-2 separator d-flex justify-content-center align-items-center ">
                    <div class="line"></div>
                    <!--my-4 = margin sur l'axe Y de 4-->
                    <i class="fas fa-folder-open fa-4x mx-4"></i>                 
                    <div class="line"></div>
                </div>


                <div class="row"> <!--bootstrap fonctionne sur une grille de 12 On peut donc avoir une row avec 4 colonnes de 3-->

                    <!--On aura 3 colonne sur pc donc 4 (12/3 = 4) , 
                        6 colonnes sur tablettes et 1 sur mobiles-->
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="position-relative"> 
                            <a href="#" data-toggle="modal" data-target="#project-1">
                                <div class="filter"> <!--Calque sur image-->
                                    <img src="img/star2.gif" alt="">
                                </div>
                            </a>
                            <div class=" baseprojet projet3">
                                <img width="100%"  class="image " src="projet/Exo_Jeu_taquin/img/Aperture Taquin.PNG" alt="">
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="position-relative"> 
                            <a href="#" data-toggle="modal" data-target="#project-2">
                                <div class="filter"> <!--Calque sur image-->
                                    <img src="img/star2.gif" alt="">
                                </div>
                            </a>
                            <div class=" baseprojet projet2">
                                <img width="100%" class="image " src="projet/Exo_Instamanga/img/InstaManga.PNG">
                            </div>
                        </div>
                    </div>



                    <div class="col-12 col-md-6 col-lg-4  mb-4">
                        <div class="position-relative">
                            <a href="#" data-toggle="modal" data-target="#project-3">
                                <div class="filter"> <!--Calque sur image-->
                                    <img src="img/star2.gif" alt="">
                                </div>
                            </a>
                            <div class=" baseprojet projet3">
                                <img width="100%" class="image " src="projet/Exo_liste_de_Fiorella/img/liste-fiorella.PNG">
                            </div>
                        </div>
                    </div>



                    <div class="col-12 col-md-6 col-lg-4  mb-4">
                        <div class="position-relative">
                            <a href="#" data-toggle="modal" data-target="#project-4">
                                <div class="filter"> <!--Calque sur image-->
                                    <img src="img/star2.gif" alt="">
                                </div>
                            </a>
                            <div class=" baseprojet projet4">
                                <p> PROJET à venir</p>
                                <br>
                                <p class="sousP">(Portfolio d'une illustratrice)</p>
                            </div>
                        </div>
                    </div>



                    <!--On passe à la ligne dès qu'on est à 12-->
                    <div class="col-12 col-md-6 col-lg-4  mb-4">
                        <div class="position-relative">
                            <a href="#" data-toggle="modal" data-target="#project-5">
                                <div class="filter"> <!--Calque sur image-->
                                    <img src="img/star2.gif" alt="">
                                </div>
                            </a>
                            <div class=" baseprojet projet5">
                                <p> PROJET à venir</p>
                            </div>
                        </div>
                    </div>



                    <div class="col-12 col-md-6 col-lg-4  mb-4">
                        <div class="position-relative">
                            <a href="#" data-toggle="modal" data-target="#project-6">
                                <div class="filter"> <!--Calque sur image-->
                                    <img src="img/star2.gif" alt="">
                                </div>
                            </a>
                            <div class=" baseprojet projet6">
                                <p> PROJET à venir</p>
                            </div>
                        </div>
                    </div>

                </div> <!--Fin de la div Row-->

                <div><!--PARTIE MODAL -->     
                    <!--Modal 1-->      
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
                                    <img width="100%" src="projet/Exo_Jeu_taquin/img/Aperture Taquin.PNG" alt="">
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    <a href="projet/Exo_Jeu_taquin/index.html" 
                                        target="_blank" class="btn btn-primary">Voir la maquette</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Modal 2-->
                    <div class="modal fade" id="project-2">
                        <div class="modal-dialog modal-xl"> 
                            <div class="modal-content hauteurModal">

                                <div class="modal-header">
                                    <h5 class="modal-title">Projet Insta</h5>
                                    <button class="close" data-dismiss="modal">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <img width="100%" src="projet/Exo_Instamanga/img/InstaManga.PNG" alt="">
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    <a href="projet/Exo_Instamanga/index.html" 
                                        target="_blank" class="btn btn-primary">Voir la maquette</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Modal 3-->
                    <div class="modal fade" id="project-3">
                        <div class="modal-dialog modal-xl"> 
                            <div class="modal-content hauteurModal">

                                <div class="modal-header">
                                    <h5 class="modal-title">Liste de noël de Fiorella</h5>
                                    <button class="close" data-dismiss="modal">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <img width="100%" src="projet/Exo_liste_de_Fiorella/img/liste-fiorella.PNG" alt="">
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    <a href="projet/Exo_liste_de_Fiorella/index.html" 
                                        target="_blank" class="btn btn-primary">Voir la maquette</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Modal 4-->
                    <div class="modal fade" id="project-4">
                        <div class="modal-dialog modal-xl"> 
                            <div class="modal-content hauteurModal">

                                <div class="modal-header">
                                    <h5 class="modal-title">nom du projet</h5>
                                    <button class="close" data-dismiss="modal">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <img width="100%" src="" alt="">
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    <a href="" 
                                        target="_blank" class="btn btn-primary">Voir la maquette</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Modal 5-->
                    <div class="modal fade" id="project-5">
                        <div class="modal-dialog modal-xl"> 
                            <div class="modal-content hauteurModal">

                                <div class="modal-header">
                                    <h5 class="modal-title">nom du projet</h5>
                                    <button class="close" data-dismiss="modal">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <img width="100%" src="" alt="">
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    <a href="" 
                                        target="_blank" class="btn btn-primary">Voir la maquette</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Modal 6-->
                    <div class="modal fade" id="project-6">
                        <div class="modal-dialog modal-xl"> 
                            <div class="modal-content hauteurModal">

                                <div class="modal-header">
                                    <h5 class="modal-title">nom du projet</h5>
                                    <button class="close" data-dismiss="modal">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <img width="100%" src="" alt="">
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    <a href="" 
                                        target="_blank" class="btn btn-primary">Voir la maquette</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!--Fin PARTIE MODAL -->                      
            </div>
        </div> <br>


                                        <!-- Partie CONTACT-->
        <div class="contact">
        
            <div class="container">    
                <div  class=" mt-2 mb-2  separator d-flex justify-content-center align-items-center"><!--Separateur-->
                    <div class="line"></div>
                    <h2 id="CONTACT">Me contacter</h2>
                    <!--my-4 = margin sur l'axe Y de 4-->
                    <i class="fas fa-mail-bulk fa-2x mx-2"></i>
                    <div class="line"></div>
                </div>
                <?php
                if(isset($_GET['success'])){
                    echo '<p class="MessageSuccess">Votre message a bien été envoyé</p>';
                    }
                ?>
                                       
                <div class="col-lg-8 mx-auto "> <!--formulaire  contact-->
                     
                    <form class="contact-form" method="POST" >  <!--balise pour indiquer le formulaire-->
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
                    </form>
                </div>
            
                <div class="divenvoyermail">
                    <!--envoyer un mail -->
                    <a class="envoyermail" href="mailto:smaga.michael@bbox.fr">Où envoyer moi en Mail directement depuis votre boîte mail</a>
                </div>
                <br/><br/>
            </div>
        </div>
    </div>                    

                                            <!--FOOTER-->

    <footer class="bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4"><h3>Adresse</h3>
                        <p>- Nord-Pas-De-Clais -<br> - - - - - - - - -

                        </p>
                        </div>
                        <div class="col-lg-4"><h3>Réseau sociaux</h3>
                            
                        
                            <a class="btn btn-lg btn-outline-light" href="https://www.linkedin.com/in/michael-smaga-88667a136/" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                            <a class="btn btn-lg btn-outline-light" href="https://github.com/SmagaMichael" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        
                        </div>

                        <div class="col-lg-4"><h3>A propos</h3>
                            <p>Merci de votre visite &#128522; </p>
                        </div>
                    </div>
                </div>
        </footer>
        
        
        <div class="bg-copyright text-center py-2">
            <div class="container">
                <small class="m-0">Copyright &copy; Smaga Michaël 2020 </small>
            </div>
        </div>


        <?php
  
        if (isset($_POST) && !empty($_POST)){
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
                    $mail_Data .= '<b>'.$Subject.'</b> <br>';
                    $mail_Data .= "<br> \n";
                    $mail_Data .= $_POST["message"].'<br>';
                    $mail_Data .= "<br> \n";
                    $mail_Data .= ''.$_POST['name'].': '.$_POST["phone"].'<br>';
                $mail_Data .= "</body> \n";

            $mail_Data .= "</HTML> \n";

            $headers  = "MIME-Version: 1.0 \n";
            $headers .= "From: $from  \n";
            $headers .='Content-Type: text/html; charset="utf-8"'." ";
            // ici on envoie le mail au format texte encodé en UTF-8
            // $headers .= "Content-type: text/html; charset=iso-8859-1 \n";

            $headers .='Content-Transfer-Encoding: 8bit';
            // ici on précise qu'il y a des caractères accentués


            // Message de Priorité haute
            $headers .= "X-Priority: 1  \n";
            $headers .= "X-MSMail-Priority: High \n";
            

            $CR_Mail = TRUE;
            $CR_Mail = @mail ($to, $Subject, $mail_Data, $headers);


            // if ($CR_Mail === FALSE){
            //     echo " ### CR_Mail=$CR_Mail - Erreur envoi mail <br> \n";
            // }else{
            //     echo " *** CR_Mail=$CR_Mail - Mail envoyé<br> \n";
            // }
        } 
       
           ?>

 

<!-- scripts -->
    <script src="extension/particles/particles.js"></script>
    <script src="extension/particles/js/app.js"></script>

    <script src="extension/jquery-3.5.1.min.js"></script>
    <script src="extension/bootstrap.bundle.min.js" ></script>
    <script src="script.js"></script>

</body>


</html>