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
                        <div class="con-title col-sm-12">
                            <h2><span>A propos du lycée</span></h2>
                            <p></p>
                        </div>
                        <!-- Our Story ==== -->
                        <div class="section-area bg-gray section-sp1 our-story">
                            <div class="container">
                                <div class="row align-items-center d-flex">
                                    <div class="col-lg-5 col-sm-3 heading-bx">
                                        <h2 class="m-b10">LYCEE ROBERT SCHUMAN</h2>
                                        <p>L’établissement a été créé en 1920 par quelques ingénieurs centraliens chrétiens qui fondèrent une association pour alphabétiser des jeunes gens en difficultés : c’était la naissance de « l’Entraide Éducative ». Plus tard, s’ajouteront différentes formations professionnelles pour devenir le Lycée privé Robert Schuman (Sous contrat d’association avec l’État).</p>
                                    </div>
                                    <div class="col-lg-7 col-sm-12 heading-bx p-lr">
                                        <div class="video-bx">
                                            <img src="/lrs/assets/images/dugnylyrschumanadm.jpg"/>
                                        </div>
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