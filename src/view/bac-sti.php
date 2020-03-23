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
                            <h2><span>Bac STI2D</span></h2>

                        </div>

                        <!-- Our Story ==== -->
                        <div class="section-area bg-gray section-sp1 our-story">
                            <div class="container">
                                <div class="row align-items-center d-flex">
                                    <div class="col-lg-6 col-md-12 heading-bx">
                                        <h2 class="m-b10">Présentation de la formation</h2>
                                                <p>Le bac technologique STI2D s’adresse à ceux qui s’intéressent à l’ingénierie industrielle, à l’innovation technologique et à la préservation de l’environnement. Il prépare à la poursuite d’études scientifiques et technologiques industrielles en BTS, DUT, classes préparatoires technologies et sciences industrielles (TSI), puis écoles d’ingénieurs, ou écoles spécialisées (électronique, réseaux, matériaux, bâtiment…).</p>
                                                <p>Plus des deux tiers des enseignements sont consacrés aux matières scientifiques et technologiques de la filière et de la spécialité. La conception de produit est au cœur des enseignements de la spécialité ITEC tandis que la spécialité SIN propose de l’informatique et de la programmation. Les enseignements portent sur l’analyse et la conception de produits dans le respect d’une démarche de développement durable.</p>
                                                <p>L’enseignement de chaque option, quand il ne se déroule pas dans le cadre d’un projet se déroule sous la forme de travaux pratiques. Ces TP ont pour objectifs de développer l’autonomie des élèves tout en leur apportant l’aide pédagogique dont ils ont besoin.</p>
                                            <h3>Option SIN</h3>
                                                <p>Avec cette option, les élèves travaillent sur divers systèmes numériques et différents systèmes d’exploitation.</p>
                                                <p>Cette option aborde différents sujets qui sont récurrents dans les grands secteurs d’activités de la filière électronique, tels que : Création de site web, structure d’un réseau, systèmes de télécommunications, programmation structurée …</p>
                                            <h3>Option ITEC</h3>
                                                <p>La spécialité Innovation Technologique et Eco-Conception (ITEC) explore l’étude et la recherche de solutions techniques innovantes relatives aux produits manufacturés en intégrant la dimension design et ergonomie. Elle apporte les compétences nécessaires à l’analyse, l’éco-conception et l’intégration dans son environnement d’un système dans une démarche de développement durable.</p>
                                                <p>Les différents supports utilisés sont les systèmes didactiques d’expérimentation des procédés (usinage, impression en 3D, mise en forme), les équipements de mesures (métrologie) et d’ informatiques (progiciels de simulation et de réalité virtuelle)</p>

                                    </div>
                                    <div class="col-lg-6 col-md-12 heading-bx p-lr">

                                        <img src="/lrs/assets/images/formations/bac_sti2d.jpg"/>

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
    <!-- INFORMATIONS END -->



    <!-- FOOTER -->
    <section>
        <?php include "../include/footer.php"?>
    </section>
    <!-- END FOOTER -->

</body>


</html>
