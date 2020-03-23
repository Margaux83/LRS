<?php

    function getSuccess($message, $chemin) {
    $_SESSION['message'] = $message;
    $_SESSION['success'] = True;
    header('location: '.$chemin.'');
    }

    // Fonction permettant d'afficher une erreur
    function getError($message, $chemin) {
    $_SESSION['message'] = $message;
    $_SESSION['error'] = True;
    header('location: '.$chemin.'');
    }
    function showMessage() {
    if(isset($_SESSION['message']) && isset($_SESSION['success'])) {
    echo '
    <div class="popupunder alert alert-success fade in">
    <button type="button" class="close close-sm" data-dismiss="alert"><i class="fa fa-close"></i></button>       
         <strong>'.$_SESSION['message'].'</strong>
    </div>
    ';
    unset($_SESSION['message']);
    unset($_SESSION['success']);
    }
    if(isset($_SESSION['message']) && isset($_SESSION['error'])) {
    echo '
    <div class="popupunder alert alert-error fade in">
    <button type="button" class="close close-sm" data-dismiss="alert"><i class="fa fa-close"></i></button>       
         <strong>'.$_SESSION['message'].'</strong>
    </div>
    ';
    unset($_SESSION['message']);
    unset($_SESSION['error']);
    }

}
?>