<?php
// On fait appel à la classe functions pour afficher les messages
require_once($_SERVER["DOCUMENT_ROOT"]."/lrs/src/model/functions.php");
session_start();
showMessage();
?>

<!-- HEAD -->
<?php include "../../include/head.php"?>
<!-- END HEAD -->


<body>
<!--== MAIN CONTRAINER ==-->
<div class="container-fluid sb1">
    <div class="row">
        <?php include "include/header.php"?>
    </div>
</div>

<!--== BODY CONTNAINER ==-->
<div class="container-fluid sb2">
    <div class="row">
        <div class="sb2-1">
            <!--== USER INFO ==-->
            <div class="sb2-12">
                <ul>
                    <h5>Espace Membre</h5>
                </ul>
            </div>
            <!--== LEFT MENU ==-->
            <div class="sb2-13">
                <ul class="collapsible" data-collapsible="accordion">
                    <?php include "include/left-menu.php"?>
                </ul>
            </div>
        </div>

        <!--== BODY INNER CONTAINER ==-->
        <div class="sb2-2">
            <!--== breadcrumbs ==-->
            <?php include "include/breadcrumbs.php"?>
            <!--== END breadcrumbs ==-->




            <!--== DASHBOARD INFO ==-->
            <!--== DASHBOARD INFO ==-->
            <div class="sb2-2-1">
                <h2>Votre tableau de bord</h2>
                <div class="db-2">
                    <ul>
                        <li class="col 12">
                            <div class="dash-book dash-b-4 col 12 col-sm-12">
                                <?php
                                require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/event_manager.php');
                                $membre = new event_manager();
                                $result = $membre->selectCountEventUser();
                                ?>
                                <h5>Evènements</h5>
                                <h4><?php echo $result[0]; ?></h4>
                                <a href="etu-event-all.php">Voir</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>


            <!--== Latest Activity ==-->
            <div class="sb2-2-3">
                <div class="row">
                    <!--== Latest Activity ==-->
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>Les évènements à venir</h4>
                            </div>
                            <div class="tab-inn list-act-hom">
                                <ul>
                                    <?php

                                    $membre = new event_manager();
                                    $result = $membre->selectEventUser();
                                    if(count($result) < 5){
                                        for ($i=0; $i < count($result); $i++){
                                                ?>
                                                <li class="list-act-hom-con">
                                                    <a href="etu-one-event.php?id=<?php echo $result[$i]['ID'] ?>"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
                                                    <h4><span><?php $format = $result[$i]['Date_event'];
                                                            $date = date('d/m/Y', strtotime($format));
                                                            echo $date; ?></span> <?php echo $result[$i]['Titre'] ?></h4>
                                                    <p><?php echo $result[$i]['Sujet'] ?></p>
                                                </li>
                                            <?php }
                                    }
                                    else {
                                    for ($i = 0; $i < 5; $i++) {
                                    ?>
                                    <li class="list-act-hom-con">
                                        <a href="etu-one-event.php?id=<?php echo $result[$i]['ID'] ?>"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
                                        <h4><span><?php $format = $result[$i]['Date_event'];
                                                $date = date('d/m/Y', strtotime($format));
                                                echo $date; ?></span> <?php echo $result[$i]['Titre'] ?></h4>
                                        <p><?php echo $result[$i]['Sujet'] ?></p>
                                        <?php
                                        }
                                        }
                                        ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- FOOTER -->
        <section>
            <?php include "include/footer.php"?>
        </section>
        <!-- END FOOTER -->
</body>


</html>