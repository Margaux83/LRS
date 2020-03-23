<!-- HEAD -->
<?php include "../../include/head.php"?>
<!-- END HEAD -->



<body>
<!--== MAIN CONTRAINER ==-->
<div class="container-fluid sb1">
    <div class="row">
        <?php include "include/header.php"?>
    </div>
</div
    <!--== BODY CONTNAINER ==-->
<div class="container-fluid sb2">
    <div class="row">

        <div class="sb2-1">
            <!--== USER INFO ==-->
            <div class="sb2-12">
                <ul>
                        <h5>Panel Admin</h5>
                </ul>
            </div>
            <!--== LEFT MENU ==-->
            <div class="sb2-13">
                <ul class="collapsible" data-collapsible="accordion">
                    <?php include "include/left-menu.php"?>
                </ul>
            </div>
        </div><!--== BODY INNER CONTAINER ==-->

        <div class="sb2-2">
            <!--== breadcrumbs ==-->
            <?php include "include/breadcrumbs.php"?>
            <!--== User Details ==-->
            <div class="sb2-2-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp admin-form">
                            <div class="inn-title">
                                <h4>Informations</h4>
                                <?php
                                include($_SERVER["DOCUMENT_ROOT"].'/lrs/src/model/event_manager.php');
                                if(isset($_GET['id'])) {
                                $membre = new event_manager();
                                $result = $membre->selectEventById($_GET['id']);
                                $countuser = $membre->selectCountUsersForOneEvent($_GET['id'])

                                ?>
                            </div>
                            <div class="tab-inn">
                                <form>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <h5>Référence :</h5><br>
                                            <input type="text" value="<?php echo $result['ref_event'];  ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col-lg-6 col-sm-12">
                                            <h5>Date de création :</h5><br>
                                            <input type="text" value="<?php $format = $result['DateAddEvent'];
                                            $date = date('d/m/Y H:i:s', strtotime($format));
                                            echo $date;?>" readonly>
                                        </div>
                                        <div class="input-field col-lg-6 col-sm-12">
                                            <h5>Nombre de participants :</h5><br>
                                            <input type="number" value="<?php  echo $countuser['numberOfUser'];?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <h5>Titre :</h5><br>
                                            <input type="text" value="<?php echo $result['Titre'];?>"readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <h5>Sujet :</h5><br>
                                            <input type="text" value="<?php echo $result['Sujet'];?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <h5>Description :</h5><br>
                                            <textarea readonly><?php echo $result['Description'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col-lg-6 sm-12">
                                            <h5>Date d'évènement :</h5><br>
                                            <input type="date" value="<?php echo $result['Date_event'];
                                            ?>" readonly>
                                        </div>
                                        <div class="input-field col-lg-6 sm-12">
                                            <h5>Lieu :</h5><br>
                                            <input type="text" value="<?php echo $result['Lieu'];?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col-lg-6 sm-12">
                                            <h5>Heure de début :</h5><br>
                                            <input type="time" value="<?php echo date('H:i', strtotime($result['Heure_deb']));?>" readonly>
                                        </div>
                                        <div class="input-field col-lg-6 sm-12">
                                            <h5>Heure de fin :</h5><br>
                                            <input type="time" value="<?php echo date('H:i', strtotime($result['Heure_fin']));?>" readonly>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </form>
                            </div>
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
