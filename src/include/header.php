
<!-- TOP BAR -->
<div class="ed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="ed-com-t1-right">
                    <ul>
                        <?php
                        if (isset($_COOKIE['role'] ) && $_COOKIE['role'] == 'ETU') { ?>
                            <li><a>
                                    <?php
                                    $membre = new lrs_manager();
                                    $result = $membre->afficheUser();
                                    echo 'Bonjour'.' ';
                                    echo   $result['nom'] .' ';
                                    echo   $result['prenom'];
                                    ?></a></li>
                            <li><a href="/lrs/src/view/etudiant/dashboard.php">Mon profil</a></li>
                            <li><a href="/lrs/src/traitement/logout-ttt.php">Déconnexion</a></li>

                            <?php
                        } if (isset($_COOKIE['role'] ) && $_COOKIE['role'] == 'ADM') { ?>
                            <li><a>
                                    <?php  $membre = new lrs_manager();
                                    $result = $membre->afficheUser();
                                    echo 'Bonjour'.' ';
                                    echo   $result['nom'] .' ';
                                    echo   $result['prenom'];
                                    ?></a></li>
                            <li><a href="/lrs/src/view/admin/dashboard.php">Mon profil</a></li>
                            <li><a href="/lrs/src/traitement/logout-ttt.php">Déconnexion</a></li>

                            <?php
                        }if(empty($_COOKIE['role'])){ ?>
                            <li><a href="#!" data-toggle="modal" data-target="#modal1"><span></span>Se connecter</a></li>
                            <li><a href="#!" data-toggle="modal" data-target="#modal2"><span></span>S'inscrire</a></li>
                        <?php } ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
<section>

    <!-- REGISTER SECTION -->
    <div id="modal2" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Bonjour...</h1>
                <p>Vous n'avez pas de compte? Créez votre compte. Cela prend moins d'une minute</p>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="/lrs/assets/images/icon/cancel.png" />
                </a>
                <h4>Créer un compte</h4>
                <p>Vous n'avez pas de compte ? Créez votre compte. Cela prend moins d'une minute </p>
                    <form class="s12" action="/lrs/src/traitement/registration-ttt.php" method="post">
                        <div class="input-field s12">
                            <input type="text" name="nom" class="form-control" placeholder="Nom"  required/>
                        </div>

                        <div class="input-field s12">
                            <input type="text" name="prenom" class="form-control" placeholder="Prénom"  required/>
                        </div>

                        <div class="input-field s12">
                            <input type="text" name="phone" class="form-control" pattern="[0-9]{10}" placeholder="Numéro de téléphone" oninvalid="setCustomValidity('Veuillez indiquer un numéro à 10 chiffres')" oninput="setCustomValidity('')" required/>
                        </div>

                        <div class="input-field s12">
                            <input type="text" name="adresse" class="form-control" placeholder="Adresse"  required/>
                        </div>

                        <div class="input-field s12">
                            <input type="email" name="email" class="form-control" placeholder="Email"  required/>
                        </div>

                        <div class="input-field s12">
                            <input type="password" name="mdp" class="form-control" pattern=".{8,}" title="Votre mot de passe doit contenir au moins 8 caractères" placeholder="Mot de passe"  required/>
                        </div>

                        <button type="submit" class="btn btn-orange btn-block" name="submit">S'inscrire</button>
                    </form>

                    <div>
                        <div class="input-field s12"> <a href="#modal1" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Vous avez déjà un compte ? Connectez-vous</a> </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- END REGISTER SECTION -->


    <!-- LOGIN SECTION -->
    <div id="modal1" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left col">
                <h1>Bonjour...</h1>
                <p>Connectez-vous. Cela prend moins d'une minute</p>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="/lrs/assets/images/icon/cancel.png" alt="" />
                </a>
                <h4>Connexion</h4>
                <p>Connectez-vous</p>
                <form class="s12" action="/lrs/src/traitement/login-ttt.php" method="post">
                    <div class="input-field s12">
                        <input type="email" name="email" class="form-control"  placeholder="Email"  required/>
                    </div>

                    <div class="input-field s12">
                        <input type="password" name="mdp" class="form-control"  placeholder="Mot de passe"  required/>
                    </div>

                    <button type="submit" name="submit" class="btn btn-orange btn-block" >Connexion</button>
                </form>
                    <div>
                        <div class="input-field s12"> <a href="#modal3" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Mot de passe oublié</a> | <a href="#modal2" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Créer un nouveau compte</a> </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- END LOGIN SECTION -->


    <!-- FORGOT SECTION -->
    <div id="modal3" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Bonjour... </h1>
                <p>Mot de passe oublié ? Cela prendra moins d'une minute pour changer votre mot de passe !</p>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="/lrs/assets/images/icon/cancel.png" alt="" />
                </a>
                <h4>Mot de passe oublié</h4>
                <form class="s12" method="post" action="/lrs/src/traitement/forgot-password-ttt.php">
                    <div>
                        <div class="input-field s12">
                            <input type="email" name="mailto" data-ng-model="name3" class="validate">
                            <label>Adresse email</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Envoyer" class="waves-effect waves-light log-in-btn"> </div>
                    </div>
                    <br>
                    <div>
                       <p>Un mail va vous être envoyé pour que vous puissiez réinitialiser votre mot de passe.</p>
                    </div>
                </form>
            </div>
        </div>

</section>