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

    <!--EVENTS SECTION START-->
    <section class="pop-cour">
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2><span>Événements</span></h2>
                            <p>Retrouvez tous les évènements ici..</p>
                        </div>
                        <div>
                            <div class="ho-event pg-eve-main">
                                <ul>
                                    <?php
                                    $membre = new event_manager();
                                    $result = $membre->selectEvents();
                                    foreach($result as $r){
                                    ?>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span><?php $format = $r['Date_event'];
                                                $date = date('d/m/Y', strtotime($format));
                                                echo $date; ?></span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                                <h4><?php echo $r['Titre'] ?></h4>
                                            <p><?php echo $r['Sujet'] ?></p>
                                            <span><?php echo date('H:i', strtotime($r['Heure_deb'])) ?> – <?php echo date('H:i', strtotime($r['Heure_fin'])) ?></span>
                                        </div>
                                        <div style="display: block;" class="pg-eve-reg ">
                                            <a href="event-register.php?id=<?php echo $r['ID'] ?>">S'inscrire</a>
                                            <a href="event-details.php?id=<?php echo $r['ID'] ?>">Voir plus</a>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="pg-pagina">
                            <ul class="pagination">
                                <li class="disabled"><a href="#!"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                <li class="active waves-effect"><a href="#!">1</a></li>
                                <li class="waves-effect"><a href="#!">2</a></li>
                                <li class="waves-effect"><a href="#!">3</a></li>
                                <li class="waves-effect"><a href="#!">4</a></li>
                                <li class="waves-effect"><a href="#!">5</a></li>
                                <li class="waves-effect"><a href="#!"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--EVENTS SECTION END-->

    <!-- FOOTER -->
    <section>
        <?php include "../include/footer.php"?>
    </section>
    <!-- END FOOTER -->

</body>
</html>