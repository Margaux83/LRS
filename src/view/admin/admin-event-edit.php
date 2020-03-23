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
                        <h5>Panel Admin</h5>
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


            <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Modifier un évènement</h4>
                                </div>
                                <div class="tab-inn">
                                    <?php
                                    require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/event_manager.php');
                                    if(isset($_GET['id'])) {
                                        $membre = new event_manager();
                                        $result = $membre->selectEventById($_GET['id']);
                                    }
                                    ?>
                                    <form action="/lrs/src/traitement/event-edit-ttt.php?id=<?php echo $_GET['id'] ?>" method="post">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <h5>Référence :</h5><br>
                                                <input type="number" value="<?php echo $result['ref_event'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <h5>Nouveau titre :</h5><br>
                                                <input type="text"  name="eventName" value="<?php echo $result['Titre'] ?>" placeholder="Titre" class="validate" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <h5>Nouveau sujet :</h5><br>
                                                <input type="text" name="eventSubject" value="<?php echo $result['Sujet'] ?>" placeholder="Sujet" class="validate" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <h5>Nouvelle decription :</h5><br>
                                                <textarea name="eventDescription" placeholder="Description" required><?php echo $result['Description'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <h5>Nouvelle date :</h5><br>
                                                <input type="date" value="<?php echo $result['Date_event'] ?>"  min="<?php echo date("Y-m-d"); ?>" name="eventDate" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <h5>Nouveau lieu :</h5><br>
                                                <input type="text" placeholder="Lieu" name="eventAddress" class="validate" value="<?php echo $result['Lieu'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <h5>Nouvelle heure de début :</h5><br>
                                                <input type="time" name="eventBegin" value="<?php echo date('H:i', strtotime($result['Heure_deb'])) ?>" class="validate">
                                            </div>
                                            <div class="input-field col s6">
                                                <h5>Nouvelle heure de fin :</h5><br>
                                                <input type="time" value="<?php echo date('H:i', strtotime($result['Heure_fin'])) ?>" name="eventEnd" class="validate">
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input"></i>
                                            </div>
                                        </div>
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