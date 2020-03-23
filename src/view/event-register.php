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


    <!--SECTION START-->
    <section class="c-all p-semi p-event">
        <div class="semi-inn">
            <?php
            if(isset($_GET['id'])) {
            $membre = new event_manager();
            $result = $membre->selectEventById($_GET['id']);

            ?>
            <div class="semi-com semi-left">
                <div class="all-title quote-title qu-new semi-text eve-reg-text">
                    <h2><?php echo $result['Titre'];  ?></h2>
                    <div style="width: 50%">
                    <p><?php echo $result['Description'];  ?></p></div>
                    <div class="semi-deta eve-deta">
                        <ul>
                            <li>Date :<span><?php $format = $result['Date_event'];
                                    $date = date('d/m/Y', strtotime($format));
                                    echo $date;?></span></li>
                            <li>Heure de début :<span><?php echo $result['Heure_deb'];  ?> </span></li>
                            <li>Heure de fin :<span><?php echo $result['Heure_fin'];  ?></span></li>
                            <li>Sujet :<span><?php echo $result['Sujet'];  ?></span></li>
                            <li>Adresse :<span><?php echo $result['Lieu'];  ?></span></li>
                        </ul>
                    </div>
                    <p class="help-line">Rejoignez cet évènement !</p>
                </div>
            </div>
            <div class="semi-com semi-right">
                <div class="n-form-com semi-form">
                    <div class="col s12">
                        <form class="form-horizontal" method="post" action="../traitement/event_register-ttt.php?id=<?php echo $result['ID'];?>&titre=<?php echo $result['Titre'];?>&dateEvent=<?php $format = $result['Date_event'];
                        $date = date('d/m/Y', strtotime($format));
                        echo $date;?>&heure_deb=<?php echo date('H:i', strtotime($result['Heure_deb']));  ?>&heure_fin=<?php echo date('H:i', strtotime($result['Heure_fin']));  ?>&lieu=<?php echo $result['Lieu'];  ?>">

                            <div class="form-group mar-bot-0">
                                <div class="col-md-12">
                                    <p style="color: white;">Etes-vous sûr(e) de vouloir vous inscrire à cet évènement ?</p>
                                    <i class="waves-effect waves-light light-btn waves-input-wrapper" style=""><input type="submit" value="Oui !" class="waves-button-input"></i><br>
                                    <a href="javascript:history.go(-1)"><i class="waves-effect waves-light light-btn waves-input-wrapper" style=""><input style="color: white;" type="button" value="Retour" class="waves-button-input"></i></a>
                                </div>
                            </div>
                        </form>
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


</html>