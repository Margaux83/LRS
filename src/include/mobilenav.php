    <div class="ed-mm-right">
        <div class="ed-mm-menu">
            <a style="float: left;" href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
            <div class="ed-mm-inn">
                <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                <h4>Mon compte</h4>
                <ul>
                    <?php
                    if (isset($_COOKIE['role'] ) && $_COOKIE['role'] == 'ETU') { ?>
                        <li><a href="#">
                                <?php
                                include($_SERVER["DOCUMENT_ROOT"].'/lrs/src/model/lrs_manager.php');
                                $membre = new lrs_manager();
                                $result = $membre->afficheUser();
                                echo   $result['nom'] .' ';
                                echo   $result['prenom'];
                                ?></a></li>
                        <li><a href="/lrs/src/view/etudiant/dashboard.php">Mon profil</a></li>

                        <li><a href="/lrs/src/traitement/logout-ttt.php">Déconnexion</a></li>

                        <?php
                    } if (isset($_COOKIE['role'] ) && $_COOKIE['role'] == 'ADM') { ?>
                        <li><a href="/lrs/src/view/admin/dashboard.php">
                                <?php
                                include($_SERVER["DOCUMENT_ROOT"].'/lrs/src/model/lrs_manager.php');
                                $membre = new lrs_manager();
                                $result = $membre->afficheUser();
                                echo   $result['nom'] .' ';
                                echo   $result['prenom'];
                                ?></a></li>
                        <li><a href="/lrs/src/traitement/logout-ttt.php">Déconnexion</a></li>

                        <?php
                    }if(empty($_COOKIE['role'])){ ?>
                        <li><a href="#!" data-toggle="modal" data-target="#modal1"><span></span>Se connecter</a></li>
                        <li><a href="#!" data-toggle="modal" data-target="#modal2"><span></i></span>S'inscrire</a></li>
                    <?php } ?>
                </ul>
                <h4>Toutes les pages</h4>
                <ul>
                    <li><a href="/lrs/index.php">Home</a></li>
                    <li><a href="/lrs/src/view/school.php">A propos</a></li>
                    <li><a href="/lrs/src/view/formations.php">Formations</a>
                        <ul style="list-style: initial;">
                            <li><a href="/lrs/src/view/troisieme-prepa-pro.php">3ème prépa pro</a></li>
                            <li><a href="/lrs/src/view/bac-pro.php">Bac pro</a></li>
                            <li><a href="/lrs/src/view/bac-sti.php">Bac STI2D</a></li>
                            <li><a href="/lrs/src/view/bts-sio.php">BTS SIO</a></li>
                        </ul>
                    </li>
                    <li><a href="/lrs/src/view/events.php">Evènements</a></li>
                    <li><a href="/lrs/src/view/contact-us.php">Nous contacter</a></li>
                </ul>
            </div>
        </div>
    </div>