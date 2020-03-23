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
                                    <h4>Informations</h4>
                                    <?php
                                    if(isset($_GET['id'])) {
                                        $membre = new lrs_manager();
                                        $result = $membre->selectUserById($_GET['id']);

                                    ?>
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col-lg-6 col-sm-12">
                                                <h5>Prénom :</h5><br>
                                                <input type="text" value="<?php echo $result['prenom'];  ?>" class="validate" readonly>
                                            </div>
                                            <div class="input-field col-lg-6 col-sm-12">
                                                <h5>Nom :</h5><br>
                                                <input type="text" value="<?php echo $result['nom'];  ?>" class="validate" readonly>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col-lg-6 col-sm-12">
                                                <h5>Numéro de téléphone :</h5><br>
                                                <input type="number" value="<?php echo $result['phone'];  ?>" class="validate" readonly>
                                            </div>
                                            <div class="input-field col-lg-6 col-sm-12">
                                                <h5>Adresse email :</h5><br>
                                                <input type="email" class="validate" value="<?php echo $result['email'];  ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col-lg-6 col-sm-12">
                                                <h5>Adresse :</h5><br>
                                                <input type="text" value="<?php echo $result['adresse'];  ?>" class="validate" readonly>
                                            </div>
                                            <div class="input-field col-lg-6 col-sm-12">
                                                <h5>Date d'inscription :</h5><br>
                                                <input type="text" value="<?php $format = $result['date_insc'];
                                                $date = date('d/m/Y H:i:s', strtotime($format));
                                                echo $date;  ?>" class="validate" readonly>
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