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
                            <div class="box-inn-sp">
                                <div class="inn-title">
									<h4>Tous les évènements</h4>
                                </div>
                                <div class="tab-inn">

                                    <div style=" display: flex; flex-wrap: nowrap; overflow: auto;" class="table-responsive table-desi">
                                        <table  class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="col-sm-1">Référence</th>
													<th class="col-sm-1">Titre</th>
                                                    <th class="col-sm-1">Date</th>
													<th class="col-sm-1">Date de création</th>
													<th class="col-sm-1">Heure de début</th>
													<th class="col-sm-1">Heure de fin</th>
													<th class="col-sm-1">Modifier</th>
													<th class="col-sm-1">Supprimer</th>
													<th class="col-sm-1">Voir</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/event_manager.php');
                                            $membre = new event_manager();
                                            $result = $membre->selectEvents();
                                            foreach($result as $r){
                                            ?>
                                                <tr>
                                                    <td class="col-sm-1">#<?php echo $r['ref_event'] ?></td>
                                                    <td class="col-sm-1"><?php echo $r['Titre'] ?></td>
                                                    <td class="col-sm-1"><?php $format = $r['Date_event'];
                                                        $date = date('d/m/Y', strtotime($format));
                                                        echo $date; ?></td>
													<td class="col-sm-1"><?php $format = $r['DateAddEvent'];
                                                        $date = date('d/m/Y H:i:s', strtotime($format));
                                                        echo $date; ?></td>
													<td class="col-sm-1"><?php echo date('H:i', strtotime($r['Heure_deb'])) ?></td>
													<td class="col-sm-1"><?php echo date('H:i', strtotime($r['Heure_fin'])) ?></td>

													<td class="col-sm-1"><a href="admin-event-edit.php?id=<?php echo $r['ID'] ?>" >
                                                            <img src="/lrs/assets/images/71-512.png" alt="" height="25" width="25"></a></td>
                                                    <td>
                                                        <img onClick="deleteme(<?php echo $r['ID']; ?>)" src="/lrs/assets/images/recyclebin-512.png" alt="" height="25" width="25">
                                                    </td>
                                                    <td class="col-sm-1"><a href="admin-one-event.php?id=<?php echo $r['ID'] ?>" >
                                                            <img src="/lrs/assets/images/loupe.png" alt="" height="25" width="25"></a></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

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
<script language="javascript">
    function deleteme(delid)
    {
        if(confirm("Etes-vous sûr de vouloir supprimer ?")){
            window.location.href='/lrs/src/traitement/event-delete-ttt.php?id=' +delid+'';
            return true;
        }
    }
</script>
</body>

</html>