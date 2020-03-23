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
            <!--== END LEFT MENU ==-->


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
                                    <h4>Modification de profil</h4>
                                </div>
                                <div class="tab-inn">
                                    <form action="/lrs/src/traitement/edit-profil-ttt.php" method="post">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <h5>Nom :</h5>
                                                <input type="text" name="nom" class="form-control" value="<?php echo $result['nom']; ?>">
                                            </div>
                                            <div class="input-field col s6">
                                                <h5>Prenom :</h5>
                                                <input type="text" name="prenom" class="form-control" value="<?php echo $result['prenom']; ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <h5>Numéro de téléphone :</h5>
                                                <input  type="text" name="phone" pattern="[0-9]{10}" placeholder="Numéro de téléphone" oninvalid="setCustomValidity('Veuillez indiquer un numéro à 10 chiffres')" oninput="setCustomValidity('')" required class="form-control" value="<?php echo $result['phone']; ?>">
                                            </div>
                                            <div class="input-field col s6">
                                                <h5>Adresse :</h5>
                                                <input type="text" name="adresse" class="form-control" value="<?php echo $result['adresse']; ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <h5>Email :</h5>
                                                <input type="email" name="email" class="form-control" value="<?php echo $result['email']; ?>" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s3">
                                                    <button type="submit" id="submit" name="submit" class="btn btn-info">Modifier</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            <div class="tab-inn">
                                <form action="/lrs/src/traitement/edit-profil-mdp-ttt.php" method="post">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <h5>Ancien mot de passe :</h5>
                                            <input type="text" name="old_mdp" pattern=".{8,}" title="Votre mot de passe doit contenir au moins 8 caractères" class="form-control" >
                                        </div>
                                        <div class="input-field col s6">
                                            <h5>Nouveau mot de passe :</h5>
                                            <input type="text" name="mdp" pattern=".{8,}" title="Votre mot de passe doit contenir au moins 8 caractères"    class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s3">
                                            <button type="submit" id="submit" name="submit" class="btn btn-info">Modifier</button>
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