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


    <!--INFORMATIONS-->
    <section class="pop-cour">
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2><span>BTS SIO</span></h2>

                        </div>

                        <!-- Our Story ==== -->
                        <div class="section-area bg-gray section-sp1 our-story">
                            <div class="container">
                                <div class="row align-items-center d-flex">
                                    <div class="col-lg-6 col-md-12 heading-bx">
                                        <h2 class="m-b10">Présentation de la formation</h2>
                                            <h3>Option SISR</h3>
                                                <p>Le titulaire du BTS SIO, Spécialité « Solutions d’infrastructure, systèmes et réseaux » est chargé d’installer, d’administrer et gérer la maintenance des équipements et des réseaux informatiques. Il intervient au niveau de l’intégration, la sécurisation et la configuration des serveurs, des postes clients et des équipements d’interconnexion.</p>
                                                <p>Il aura également la tâche d’anticiper les besoins d’évolution de l’infrastructure, de maintenir la qualité des services informatiques et de proposer – le cas échant – des solutions pour faire évoluer les services.</p>
                                            <h3>Option SLAM</h3>
                                                <p>Le titulaire du BTS SIO, Spécialité «Solutions Logicielles et Applications Métiers» est capable de créer des solutions informatiques, des outils, des logiciels, des programmes et des applications pour Internet, de les diffuser, de les installer, d’en assurer la maintenance et de former les utilisateurs finaux.</p>
                                    </div>
                                    <div class="col-lg-6  col-sm-12 heading-bx p-lr">

                                        <img src="/lrs/assets/images/formations/bts_sio.jpeg"/>

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
    <!--INFORMATIONS END-->

    <!-- FOOTER -->
    <section>
        <?php include "../include/footer.php"?>
    </section>
    <!-- END FOOTER -->

</body>


</html>

