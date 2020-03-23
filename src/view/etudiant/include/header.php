 <!--== LOGO ==-->
        <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
            <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
            <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
            <a href="/lrs/index.php" class="logo">
            </a>
        </div>
        <!--== SEARCH ==-->
        <div class="col-md-6 col-sm-6 mob-hide">
        </div>
        <!--== NOTIFICATION ==-->
        <div class="col-md-2 tab-hide">
        </div>
        <!--== MY ACCCOUNT ==-->
        <div class="col-md-2 col-sm-3 col-xs-6">
            <!-- Dropdown Trigger -->
            <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'>

                <?php
                if(isset($_COOKIE['id'])) { ?>
                            <?php
                            include($_SERVER["DOCUMENT_ROOT"].'/lrs/src/model/lrs_manager.php');

                            $membre = new lrs_manager();
                            $result = $membre->afficheUser();
                            echo   $result['nom'] .' ';
                            echo   $result['prenom'];
                            ?>
                <?php } ?> <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>

            <!-- Dropdown Structure -->
            <ul id='top-menu' class='dropdown-content top-menu-sty'>
                <li><a href="/lrs/src/view/admin/edit-profil.php" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Modification Profil</a>
                </li>
                <li class="divider"></li>
                <li><a href="/lrs/src/traitement/logout-ttt.php" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Déconnexion</a>
                </li>
            </ul>
        </div>
