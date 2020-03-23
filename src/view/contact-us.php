<?php
// On fait appel à la classe functions
require_once($_SERVER["DOCUMENT_ROOT"]."/lrs/src/model/functions.php");
session_start();
showMessage();

// On fait appel à la classe event_manager
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/event_manager.php');
$event = new event_manager();
$event->deleteEventDate();
?>


    <!-- HEAD -->
    <?php include "../include/head.php"?>


<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto');
</style>

<!------ Include the above in your HEAD tag ---------->
<link href="/lrs/assets/bootstrap/css/contact.css" rel="stylesheet" />

    <!-- END HEAD -->

    <body>

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <?php include "../include/mobilenav.php"?>
            </div>
        </div>
    </section>
    <!-- END MOBILE MENU -->

    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <?php include "../include/header.php"?>
        <!-- END TOP BAR -->

        <!-- LOGO AND MENU SECTION -->
        <?php include "../include/menu.php"?>
        <!-- END LOGO AND MENU SECTION -->
    </section>
    <!--END HEADER SECTION-->

    <!--CONTACT SECTION-->
    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Nous contacter</h2>
                        </div>
                    </div>
                    <div class="pg-contact">
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1"><img src="../../assets/images/icon/cor4.png" alt=""><br>
                            <h4>Le Lycée</h4>
                            <p>Enseignement catholique sous contrat d'association avec l'Etat.
                                Etablissement habilité à percevoir la taxe d'apprentissage.</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1"> <img src="../../assets/images/icon/form-4.png" alt=""><br>
                            <h4>Adresse</h4>
                            <p>Cliquez sur :
                            <a href="http://www.google.fr/maps/place/5+avenue+du+General+de+Gaulle+93440+Dugny" target="_blank">"5 avenue du Général de Gaulle
                                <br>93440 Dugny</a>" pour voir l'adresse sur Google Maps</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con3"> <img src="../../assets/images/icon/form-3.png" alt=""><br>
                            <h4>CONTACT INFO:</h4>
                            <p> <a class="contact-icon">Tel: 01 48 37 74 26</a>
                                <br> <a class="contact-icon">Fax: 01 48 35 48 14</a>
                                <br> <a href="mailto:administration@lyceerobertschuman.com" class="contact-icon">Email: cockpit.website@gmail.com</a> </p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con4"> <img src="../../assets/images/icon/form-1.png" alt=""><br>
                            <h4>Réseaux Sociaux</h4>
                            <p> <a href="#">Website: www.lyceerobertschuman.com</a>
                                <br> <a href="#">Facebook: www.facebook/lrs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--CONTACT SECTION END-->

        <div class="container">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10480.886983316497!2d2.4157092!3d48.9492634!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa35833adc1739e08!2sLyc%C3%A9e%20Robert%20Schuman!5e0!3m2!1sfr!2sfr!4v1574025567751!5m2!1sfr!2sfr" width="100%" height="650px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="contact-form">
                <h1 class="title">Entrer en contact</h1>
                <h2 class="subtitle">Nous sommes ici pour vous aider.</h2>
                <form method="post" name="contact_form" action="../traitement/email.php">
                    <input type="text" name="name" placeholder="Nom" required />
                    <input type="text" name="firstname" placeholder="Prénom" required />
                    <input type="text" name="subject" placeholder="Sujet" required/>
                    <input type="mail" name="sender" placeholder="Adresse email" required/>
                    <textarea name="content" rows="8" placeholder="Votre message"></textarea>
                    <button class="btn-send" type="submit">Envoyer</button>
                </form>
            </div>
        </div>

    </section>
    <!-- FOOTER -->
    <section>
        <?php include "../include/footer.php"?>
    </section>
    <!-- END FOOTER -->

</body>


</html>