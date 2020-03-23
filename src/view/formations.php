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


    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2><span>Toutes les formations</span></h2>
                    <p>Ici, retrouvez toutes les formations proposées par le Lycée Privé Robert Schuman.</p>
                    <img src="../../assets/images/icon/graduation.png" alt="" height="80" width="80">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="../../assets/images/icon/bookmark.png" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 col-sm-12 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>3ème Prépa Pro</h3>
                                    <h4> </h4><br>
                                </a>
                                <p>Un des objectifs de la 3ème prépa-pro est avant tout de reprendre confiance en soi pour, non seulement éviter le décrochage scolaire, mais aussi pour trouver sa voie professionnelle et une orientation qui correspondent au projet de l’élève et à son niveau.</p>
                                <br>
                                <div class="pg-eve-reg col-sm-12"  style="float: left; margin-top: 16%; display: block;">
                                    <a href="troisieme-prepa-pro.php">Voir plus</a>
                                </div>

                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="../../assets/images/icon/bookmark.png" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Bac Pro</h3>
                                </a>
                                <h4>TU / MEI / SN</h4>
                                <p>Le bac professionnel offre une qualification reconnue sur le marché de l'emploi et répond à la demande des entreprises de la production et des services. L'enseignement se réfère à des métiers et comprend des stages appelés PFMP (périodes de formation en milieu professionnel).</p>
                                <div class="pg-eve-reg"  style="float: left;  display: block;">
                                    <a href="bac-pro.php">Voir plus</a>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->


                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="../../assets/images/icon/bookmark.png" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Bac STI2D</h3>
                                </a>
                                <h4>SIN / ITEC</h4>
                                <p>Le bac technologique STI2D s’adresse à ceux qui s’intéressent à l’ingénierie industrielle, à l’innovation technologique et à la préservation de l’environnement. Il prépare à la poursuite d’études scientifiques et technologiques industrielles en BTS, DUT, classes préparatoires technologies et sciences industrielles (TSI), puis écoles d’ingénieurs, ou écoles spécialisées (électronique, réseaux, matériaux, bâtiment…).</p>
                                <div class="pg-eve-reg" style="float: left;  display: block">
                                    <a href="bac-sti.php">Voir plus</a>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="../../assets/images/icon/bookmark.png" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>BTS SIO</h3>
                                </a>
                                <h4>SLAM / SISR</h4>
                                <p> Le brevet de technicien supérieur (BTS) est un diplôme national de l'enseignement supérieur français, créé en 1962 (décret du 26 février 1962). Il se prépare normalement en deux années après l'obtention du baccalauréat1 ou d'un diplôme de niveau IV dans une section de technicien supérieur (STS).</p>
                                <div class="pg-eve-reg" style="float: left;  display: block">
                                    <a href="bts-sio.php">Voir plus</a>
                                </div>
                            </div>
                        </div>

                        <!--POPULAR COURSES-->

                    </div>
                </div>
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