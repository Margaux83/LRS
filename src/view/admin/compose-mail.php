<?php
// On fait appel à la classe functions
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
            <!--Main container start -->
            <main class="ttr-wrapper">
                <div class="row">
                    <!-- Your Profile Views Chart -->
                    <div class="col-lg-12 m-b30">
                        <div class="widget-box">
                            <div class="email-wrapper">

                                <div class="mail-list-container">
                                    <div class="mail-list-container">

                                        <form class="mail-compose" method="post" action="../../traitement/compose-mail-ttt.php">
                                            <div class="form-group col-12">
                                                <label for="exampleFormControlInput1">Ecrivez un mail</label>
                                                <input type="email" name="mailto" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">                                            </div>

                                            <div class="form-group col-12">
                                                <input class="form-control" name="subject" type="text" placeholder="Sujet">
                                            </div>
                                            <div class="form-group col-12">
                                                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3" placeholder="Ecrivez votre message"></textarea>
                                            </div>

                                            <div class="form-group col-12">
                                                <button type="submit" class="btn btn-lg">Envoyer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Your Profile Views Chart END-->
                </div>
        </div>
        </main>
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
