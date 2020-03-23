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
                                    <h4>Créer un évènement</h4>
                                </div>
                                <div class="tab-inn">
                                    <form action="/lrs/src/traitement/add-event-ttt.php" method="post">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <h5>Référence :</h5><br>
                                                <input type="number" name="eventRef" value="" placeholder="Référence de l'évènement" min="10000" max="99999" class="validate" pattern="[0-9]{5}" oninvalid="setCustomValidity('Veuillez indiquer un numéro à 5 chiffres')" oninput="setCustomValidity('')" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <h5>Titre :</h5><br>
                                                <input type="text"  name="eventName" value="" placeholder="Titre de l'évènement" class="validate" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <h5>Sujet :</h5><br>
                                                <input type="text" name="eventSubject" value="" placeholder="Sujet de l'évènement" class="validate" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <h5>Decription :</h5><br>
                                                <textarea name="eventDescription" placeholder="Description de l'évènement" required></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col-lg-6 col-sm-12">
                                                <h5>Date :</h5><br>

                                                <input type="date" id="datemin" value="" min="<?php echo date("Y-m-d"); ?>" name="eventDate" required>
                                            </div>
                                            <div class="input-field col-lg-6 col-sm-12">
                                                <h5>Lieu :</h5><br>
                                                <input type="text" placeholder="Lieu de l'évènement" name="eventAddress" class="validate" id="search_term" value="" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col-lg-6 col-sm-12">
                                                <h5>Heure de début :</h5><br>
                                                <input type="time" name="eventBegin" value="" class="validate">
                                            </div>
                                            <div class="input-field col-lg-6 col-sm-12">
                                                <h5>Heure de fin :</h5><br>
                                                <input type="time" value="" name="eventEnd" class="validate">
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" value="Ajouter" class="waves-button-input" ></i>
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

<!-- Google JavaScript API Places -->
<script>
    function activatePlacesSearch(){
        var input = document.getElementById('search_term');
        var autocomplete = new google.maps.places.Autocomplete(input);
    }
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEOFXeKmopFGv7133zeWKS1M_9X8H7trE&libraries=places&callback=activatePlacesSearch"></script>

</body>


</html>