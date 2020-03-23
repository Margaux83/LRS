<?php
// On fait appel à la classe event_manager
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/event_manager.php');
$event = new event_manager();
$event->deleteEventDate();
?>

    <!-- HEAD -->
    <?php include "../include/head.php"?>
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

    <!-- INFORMATIONS -->
    <section class="pop-cour">
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2><span>Bac professionnel</span></h2>

                        </div>

                        <!-- Our Story ==== -->
                        <div class="section-area bg-gray section-sp1 our-story">
                            <div class="container">
                                <div class="row align-items-center d-flex">
                                    <div class="col-lg-6 col-md-12 heading-bx">
                                        <h2 class="m-b10">Présentation des différentes formations</h2><br>
                                            <h3>Le bac pro TU</h3>
                                                <p>Le technicien d’usinage dessine les pièces et prépare les programmes de conception et de fabrication de celles-ci à l’aide de logiciels spécifiques.</p>

                                                <p>Il devra maîtriser plusieurs compétences allant du réglage des machines à commandes numériques au contrôle qualité. Toutes les pièces sont fabriquées à l’aide d’outils de haute technologie.</p>
                                            <h3>Le bac pro MEI</h3>
                                                <p>Le technicien en maintenance déploie son activité dans 3 domaines : la maintenance préventive, corrective et amélioratrice sur des systèmes automatisés (électrique, automatique, hydraulique, pneumatique, mécanique). Il utilise des logiciels de GMAO (gestion de la maintenance assistée par ordinateur) pour planifier ses opérations d’entretien préventif.</p>

                                                <p>Le technicien de maintenance travaille dans des secteurs très variés comme l’automobile, l’agro-alimentaire, l’aéronautique, la Sncf, la Ratp,etc. Il intervient sur un ou plusieurs sites grâce à sa polyvalence.</p>
                                            <h3>Le bac pro SN</h3>
                                                <p>Le Technicien « Systèmes Electroniques Numériques» intervient sur les installations et équipements (matériels et logiciels) entrant dans la constitution de systèmes électroniques pour leur installation, leur mise en service et leur maintenance.</p>

                                                <p>Au lycée Robert Schuman, le champ d’application développé est  « Télécommunications et Réseaux Informatiques ».</p>
                                    </div>
                                    <div class="col-lg-6 col-md-12 heading-bx p-lr">
                                        <img src="/lrs/assets/images/formations/bac_pro.jpeg"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Our Story END ==== -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- INFORMATIONS END-->

    <!-- FOOTER -->
    <section>
        <?php include "../include/footer.php"?>
    </section>
    <!-- END FOOTER -->

</body>
</html>
