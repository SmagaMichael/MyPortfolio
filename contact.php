<?php
        if (isset($_POST) && !empty($_POST)){
        //si le champs est rempli et différent de vide 



            // Test fonction mail();
            // *** A configurer
            $to    = "smaga.michael@bbox.fr";

            

            // adresse MAIL OVH liée à l’hébergement.
            $from  = $_POST["email"];

            ini_set("SMTP", "smtp.smaga-michael.fr");   // Pour les hébergements mutualisés Windows de OVH

            

            // *** Laisser tel quel
            $JOUR  = date("Y-m-d");
            $HEURE = date("H:i");

            

            $Subject = ' - '.$JOUR.' '.$HEURE.'';

            

            $mail_Data = "";

            $mail_Data .= "<html> \n";

            $mail_Data .= "<head> \n";
            //objet
            $mail_Data .= "<title> Demande de projet </title> \n";

            $mail_Data .= "</head> \n";

            $mail_Data .= "<body> \n";

                $mail_Data .= ''.$_POST['name'].': <b>'.$Subject.'</b> <br>';

                $mail_Data .= "<br> \n";

                $mail_Data .= $_POST["message"].'<br>';

                $mail_Data .= "<br> \n";

                $mail_Data .= $_POST["phone"].'<br>';
               

            $mail_Data .= "</body> \n";

            $mail_Data .= "</HTML> \n";

            

            $headers  = "MIME-Version: 1.0 \n";

            $headers .= "Content-type: text/html; charset=iso-8859-1 \n";

            $headers .= "From: $from  \n";

            $headers .= "Disposition-Notification-To: $from  \n";

            

            // Message de Priorité haute
            // -------------------------

            $headers .= "X-Priority: 1  \n";

            $headers .= "X-MSMail-Priority: High \n";

            

            $CR_Mail = TRUE;

            $CR_Mail = @mail ($to, $Subject, $mail_Data, $headers);

        } 

    ?>