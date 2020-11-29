
<?php 

include '../../Includes/header.php';

?>


                                    <!-- Partie photo de couverture-->

    <div class="backgroundCover">
        <div class="cover">
            <img src="avatar1.png" class="avatar">

            <div class="titre">
                <h1>Amalshia</h1> 
                <p>Illustratrice</p>  
            </div>
            

        </div>
    </div>


                <!-- Partie STYLE-->
    <div class="bg-style">
            <h2 >Mes différents styles</h2>

        <div class="row"> <!--bootstrap fonctionne sur une grille de 12 On peut donc avoir une row avec 4 colonnes de 3-->
            
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="position-relative">
                    <a href="../Page1_Traditionnel/index.php"  data-target="#project-4">
                        <div class="filter"> <!--Calque sur image--> </div>
                    </a>
                    <div class=" CaseStyle projet4">
                        <p> Traditionnel</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="position-relative">
                    <a href="../Page2_Digital/index.php"  data-target="#project-4">
                        <div class="filter"> <!--Calque sur image--> 
                        </div>
                    </a>
                    <div class=" CaseStyle projet4">
                        <p> Digital</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="position-relative">
                    <a href="../Page3_Peintures/index.php" data-target="#project-4">
                        <div class="filter"> <!--Calque sur image--> 
                        </div>
                    </a>
                    <div class=" CaseStyle projet4">
                        <p>Peintures</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="position-relative">
                    <a href="../Page4_Professionel/index.php" data-target="#project-4">
                        <div class="filter"> <!--Calque sur image--> 
                        </div>
                    </a>
                    <div class=" CaseStyle projet4">
                        <p>Professionnel</p>
                    </div>
                </div>
            </div>
        </div> <!--Fin de la div Row-->
    </div> <!--fin backgroundCover-->
                                        <!-- Partie CONTACT-->
    
    <p id="CONTACT"><br></p>                
    <div class="contact">
        <div class="container text-center">
           
            <h2 class="TitleContact">Contact</h1>
                                    <!--formulaire  contact-->
           <div class="col-lg-10 mx-auto">
                <form action="" class="contact-form"> <!--balise pour indiquer le formulaire-->
                    <div class="form-group shadowblock">
                            <label for="name" class="d-none ">Téléphone</label> 
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

                    <label for="message"></label>
                    <textarea name="message" id="message" cols="60" rows="10" placeholder="Message" class="TextContact form-control shadowblock"></textarea>
        <!--le block du texte se réduit rapidement a partir d'une certaine zone à régler-->
        <!--le block du texte se réduit rapidement a partir d'une certaine zone à régler-->
  
                  


                    <div class="Send"><button>Envoyer</button></div>
                    
                <!--envoyer un mail -->
                <a  class="envoyermail" href="mailto:michael-goth@hotmail.fr">Envoyer mail</a>
                </form>
            </div> <!-- fin formulaire-->
        </div>


            <br/><br/><br/>
    </div>


    <?php 
        include '../../Includes/footer.php';
    ?>
