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
                            <h2><span>3ème prépa pro</span></h2>

                        </div>

                        <!-- Our Story ==== -->
                        <div class="section-area bg-gray section-sp1 our-story">
                            <div class="container">
                                <div class="row align-items-center d-flex">
                                    <div class="col-lg-5 col-md-12 heading-bx">
                                        <h2 class="m-b10">Présentation de la formation</h2>
                                        <p>Un des objectifs de la 3ème prépa-pro est avant tout de reprendre confiance en soi pour, non seulement éviter le décrochage scolaire, mais aussi pour trouver sa voie professionnelle et une orientation qui correspondent au projet de l’élève et à son niveau.</p>

                                        <p>L’enseignement professionnel n’est pas une spécialisation, il s’appuie sur la mise en place de situations d’apprentissage et expérimentales qui consistent à mettre l’élève en situation de réussite.</p>

                                    </div>
                                    <div class="col-lg-7 col-md-12 heading-bx p-lr">
                                            <img src="/lrs/assets/images/formations/3eme_prepa.jpeg"/>
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
