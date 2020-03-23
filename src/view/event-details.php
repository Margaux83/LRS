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


    <section>
    <?php
    if(isset($_GET['id'])) {
    $membre = new event_manager();
    $result = $membre->selectEventById($_GET['id']);

    ?>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn">
                    <div class="event-head-sub">
                        <ul>
                            <li class="page-back"><a href="javascript:history.go(-1)"><i class="fa fa-backward" aria-hidden="true"></i> Retour</a>
                        </ul>
                    </div>

                    <h1><?php echo $result['Titre'];  ?></h1>
                    <p><?php echo $result['Sujet'];  ?></p>
                    <div class="event-head-sub">
                        <ul>
                            <li>Date : <?php $format = $result['Date_event'];
                                $date = date('d/m/Y', strtotime($format));
                                echo $date;?></li>
                            <li>Location : <?php echo $result['Lieu'];  ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">
                    <div class="s18-age-event l-info-pack-days">
                        <ul>


                            <li>
                                <div class="age-eve-com age-eve-1">
                                    <img src="/lrs/assets/images/icon/cor5.png">
                                </div>
                                <div class="s17-eve-time">
                                    <div class="s17-eve-time-tim">
                                        <span><?php echo date('H:i', strtotime($result['Heure_deb']));  ?> - <?php echo date('H:i', strtotime($result['Heure_fin']));  ?></span>
                                    </div>
                                    <div class="s17-eve-time-msg">
                                        <h4>Voir la description de l'évènement</h4>
                                        <div class="time-hide time-hide-2">
                                            <div class="col-lg-6">
                                                <p><?php echo $result['Description'];  ?></p>
                                            </div>
                                        </div>
                                        <a href="#!" class="s17-sprit age-dwarr-btn time-hide-2-btn">
										<i class="fa fa-angle-down"></i>
									</a>
                                        <a href="#!" class="s17-sprit age-dwarr-btn time-hide-22-btn hb-com">
										<i class="fa fa-angle-up"></i>
									</a>
                                    </div>
                                </div>
                            </li>


                        </ul>
                    </div>
                    <div class="ed-about-sec1">
                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </section>
    <!--SECTION END-->


    <!-- FOOTER -->
    <section>
        <?php include "../include/footer.php"?>
    </section>
    <!-- END FOOTER -->

</body>


</html></html>