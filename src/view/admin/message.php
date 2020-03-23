<?php
// On fait appel à la classe message_manager
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/message_manager.php');
$result = new message_manager();
$messages = $result->getMessage();
session_start();
?>

<!DOCTYPE html>
<html lang="fr">


<head>
    <title>Lycée Robert Schuman</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="../../../assets/images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="../../../assets/bootstrap/css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="../../../assets/bootstrap/css/materialize.css" rel="stylesheet">
    <link href="../../../assets/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="../../../assets/bootstrap/css/style.css" rel="stylesheet" />
    <link href="../../../assets/bootstrap/css/dashboard.css" rel="stylesheet" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="../../../assets/bootstrap/css/style-mob.css" rel="stylesheet" />
    <link href="../../../assets/bootstrap/css/message.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="../../../assets/bootstrap/js/html5shiv.js"></script>
    <script src="../../../assets/bootstrap/js/respond.min.js"></script>
    <![endif]-->
    <script>
        $( document ).ready( function() {
            $( ".function" ).click( function() {
                $('html, body').animate({
                    scrollTop: $("#Btn-down").offset().top- -2000
                }, 2000);
            });
        });
    </script>
</head>


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
            <div class="sb2-2-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp admin-form">
                            <div class="inn-title">
                                <h4>Messagerie</h4>
                            </div>
                            <div class="container">

                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1" id="logout"><br>
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button style="float: none; display: block;" class="btn btn-success btn-circle text-uppercase function" type="button" id="Btn-down">Ecrire un message</button>
                                        </div>
                                        <div class="page-header">
                                        </div>

                                        <div class="comment-tabs">

                                            <ul class="nav nav-tabs" role="tablist">
                                                <h4 class="reviews text-capitalize">Les messages</h4>
                                            </ul>
                                            <div class="box" style="padding: 5px; border: grey solid 1px; overflow-y: scroll; border-radius: 4px; height: 700px">
                                            <?php foreach($messages as $message) { ?>
                                                <div class="tab-content">

                                                    <div class="tab-pane active" id="comments-logout">
                                                        <ul class="media-list">
                                                            <li class="media">
                                                                <div class="media-body">
                                                                    <div class="well well-lg">
                                                                        <h4 class="media-heading text-uppercase reviews "><?php echo $message['nom'].' '.$message['prenom'] ?> </h4>
                                                                        <h5 class="media-heading text-uppercase reviews">Titre: <?php echo $message['titre']; ?> </h5>


                                                                        <div class="col-lg-12">
                                                                        <p class="media-comment">
                                                                            <?php echo $message['texte']; ?>
                                                                        </p>
                                                                        </div>
                                                                            <ul class="media-date text-uppercase reviews list-inline">

                                                                                    <?php $format = $message['date'];
                                                                                    $date = date('d/m/Y H:i:s', strtotime($format));
                                                                                    echo $date;?>

                                                                            </ul>
                                                                    </div>
                                                                </div>

                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php } ?>

                                        </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1" id="logout">
                                        <div class="comment-tabs"><br>
                                            <ul class="nav nav-tabs" role="tablist">
                                                <h4 class="reviews text-capitalize">Ecrire un message</h4>
                                            </ul><br><br>
                                            <div class="tab-pane">
                                                <form action="/lrs/src/traitement/message-ttt.php" method="post" class="form-horizontal" id="commentForm" role="form">
                                                    <div class="form-group">
                                                        <label for="email" class="col-sm-2 control-label">Titre</label>
                                                        <div class="col-sm-10">
                                                            <input name="titre" type="text" class="form-control" name="addComment" id="addComment"</input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email" class="col-sm-2 control-label">Texte du message</label>
                                                        <div class="col-sm-10">
                                                            <textarea name="texte" type="text" class="form-control" name="addComment" id="addComment" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-3">
                                                            <button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment">Poster</button>
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
            </div>
        </div>
    </div>
</div>
            <!-- categories section end -->


<!-- FOOTER -->
<section>
    <?php include "include/footer.php"?>
</section>
<!-- END FOOTER -->
</body>

</html>