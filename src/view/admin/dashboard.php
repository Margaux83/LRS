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
                    <h5>Votre tableau de bord</h5>
                </ul>
            </div>
            <!--== LEFT MENU ==-->
            <div class="sb2-13">
                <ul class="collapsible" data-collapsible="accordion">
                    <?php include "include/left-menu.php"?>
                </ul>
            </div>
        </div>

        <!-- MOBILE MENU -->
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <?php include "include/left-menu-mobillenav.php"?>
            </div>
        </div>
        <!-- END MOBILE MENU -->

        <!--== BODY INNER CONTAINER ==-->
        <div class="sb2-2">
            <!--== breadcrumbs ==-->
            <?php include "include/breadcrumbs.php"?>
            <!--== END breadcrumbs ==-->


            <!--== DASHBOARD INFO ==-->
            <div class="sb2-2-1">
                <h2>Votre tableau de bord</h2>
                <div class="db-2">
                    <ul>
                        <li class="col 12">
                            <div class="dash-book dash-b-3 col col-pull-0  col-sm-offset-12">
                                <?php
                                $membre = new lrs_manager();
                                $result = $membre->selectCountUser();
                                ?>
                                <h5>Anciens étudiants</h5>
                                <h4><?php echo $result[0]; ?></h4>
                                <a href="admin-user-all.php">Voir</a>
                            </div>
                        </li>
                        <li class="col">
                            <div class="dash-book dash-b-4 col col-pull-0 col-sm-offset-12">
                                <?php
                                require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/event_manager.php');
                                $membre = new event_manager();
                                $result = $membre->selectCountEvent();
                                ?>
                                <h5>Evènements</h5>
                                <h4><?php echo $result[0]; ?></h4>
                                <a href="admin-event-all.php">Voir</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!--== User Details ==-->
            <div class="sb2-2-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>Liste des anciens étudiants</h4>
                            </div>
                            <div class="tab-inn">
                                <div style=" display: flex; flex-wrap: nowrap; overflow: auto;" class="table-responsive table-desi">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Prénom</th>
                                            <th>Nom</th>
                                            <th>Tél</th>
                                            <th>Email</th>
                                            <th>Adresse</th>
                                            <th>Dernière connexion</th>
                                            <th>Voir</th>
                                        </tr>
                                        </thead>
                                        <?php
                                        $membre = new lrs_manager();
                                        $result = $membre->selectUsers();

                                        ?>
                                        <tbody>
                                        <?php  foreach($result as $r){?>
                                            <tr>
                                                <td><?php echo $r['prenom'];?></td>
                                                <td><?php echo $r['nom'];?></td>
                                                <td><?php echo $r['phone'];?></td>
                                                <td><?php echo $r['email'];?></td>
                                                <td><?php echo $r['adresse'];?></td>
                                                <td><?php $date1 = new DateTime($r['activite']);
                                                    $date2 = new DateTime();
                                                    $date1 ->diff($date2)->format("%d");
                                                    if($date1 ->diff($date2)->format("%d") > 3){
                                                        echo '<span class="label label-danger" data-tooltip="Inactif depuis 3 jours">Inactif</span>';
                                                    }
                                                    else{
                                                        echo '<span class="label label-success">Actif</span>';
                                                    }
                                                    ?></td>
                                                <td><a href="admin-student-details.php?id=<?php echo $r['id'];?>" class="ad-st-view">Voir</a></td>
                                            </tr>
                                        <?php }?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== User Details END ==-->


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
                                    $result = $membre->selectEvents();
                                    if(count($result) < 5){
                                        for ($i=0; $i < count($result); $i++){

                                            if( $result[$i]['Date_event'] > date('Y-m-d')){
                                                ?>
                                                <li class="list-act-hom-con">
                                                    <a href="admin-one-event.php?id=<?php echo $result[$i]['ID'] ?>"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
                                                    <h4><span><?php $format = $result[$i]['Date_event'];
                                                            $date = date('d/m/Y', strtotime($format));
                                                            echo $date; ?></span> <?php echo $result[$i]['Titre'] ?></h4>
                                                    <p><?php echo $result[$i]['Sujet'] ?></p>
                                                </li>
                                            <?php }}
                                    }
                                    else {
                                    for ($i = 0; $i < 5; $i++) {
                                    if( $result[$i]['Date_event'] > date('Y-m-d')){
                                    ?>
                                    <li class="list-act-hom-con">
                                        <a href="admin-one-event.php?id=<?php echo $result[$i]['ID'] ?>"><i
                                                    class="fa fa-clock-o" aria-hidden="true"></i></a>
                                        <h4><span><?php $format = $result[$i]['Date_event'];
                                                $date = date('d/m/Y', strtotime($format));
                                                echo $date; ?></span> <?php echo $result[$i]['Titre'] ?></h4>
                                        <p><?php echo $result[$i]['Sujet'] ?></p>
                                        <?php
                                        }
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
    </div>

        <!-- FOOTER -->
        <section>
            <?php include "include/footer.php"?>
        </section>
        <!-- END FOOTER -->
</body>


</html>