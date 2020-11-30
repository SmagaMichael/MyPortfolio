<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Amalshia</title>
    <link rel="stylesheet" href="style.css">


    <!--permet de charger tout les composants à partir du serveur de bootstrap -->

    <!--lien vers la police d'écriture-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">

    <!--lien vers la base de donnée d'icone-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="../../Extension (framework)/bootstrap.min.css">
    <link rel="stylesheet" href="script.js">
</head>



<body>
 
    <nav class="navbar navbar-expand-lg navbar-dark  pt-2 pb-2">
        <div class="container">
            <a class="navbar-brand" href="../Page0_Accueil/index.php">Amalshia</a>
            <!-- collapse = ouvrir/fermé le menu burger-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">


                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link MenuTradi1" href="../Page1_Traditionnel/index.php">Traditionnel</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../Page2_Digital/index.php">Digital</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../Page3_Peintures/index.php">Peintures</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link profess" href="../Page4_Professionel/index.php">Professionnel</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../Page0_Accueil/index.php#CONTACT">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<br/>


<style>
body{
font-family: 'Montserrat', sans-serif;
background-color: black;
width: 100%;
}

@font-face {
    font-family: 'Marck' ;
    src: url(../../Police/Marck_Script/MarckScript-Regular.ttf)
}





                        /* BARRE DE NAVIGATION  */

.navbar{
    border-bottom: 1px solid white;
    background-color: black ;

    /* */
    z-index: 9999;
    position: fixed !important;
    top: 0 ;
    width: 100%;
}

.navbar-brand{ font-size: 1.75em;
font-weight: 700;
text-transform: uppercase;}


#navbarNav .nav-link{
    border:2px solid black;
    color: white;
    font-weight: 700;
    padding: 9px 10px;}


#navbarNav .nav-link:hover{
    border:2px solid #abe0f2;
    color: #ffffff;
    background-color: #053342;
    border-radius: 15px;
}

.profess{
    margin-right: 100px;
}

.MenuTradi2{
    position: absolute;
    display: none;
}
</style>