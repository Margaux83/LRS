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
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Référence</th>
													<th>Titre</th>
                                                    <th>Date</th>
													<th>Date de création</th>
													<th>Heure de début</th>
													<th>Heure de fin</th>
													<th>Voir</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/event_manager.php');
                                            $membre = new event_manager();
                                            $result = $membre->selectEventUser();
                                            foreach($result as $r){
                                            ?>
                                                <tr>
                                                    <td>#<?php echo $r['ref_event'] ?></td>
                                                    <td><?php echo $r['Titre'] ?></td>
                                                    <td><?php $format = $r['Date_event'];
                                                        $date = date('d/m/Y', strtotime($format));
                                                        echo $date; ?></td>
													<td><?php $format = $r['DateAddEvent'];
                                                        $date = date('d/m/Y H:i:s', strtotime($format));
                                                        echo $date; ?></td>
													<td><?php echo date('H:i', strtotime($r['Heure_deb'])) ?></td>
													<td><?php echo date('H:i', strtotime($r['Heure_fin'])) ?></td>
                                                    <td><a href="etu-one-event.php?id=<?php echo $r['ID'] ?>" ><img
                                                                    src="/lrs/assets/images/loupe.png" alt="" height="25" width="25"></a></td>
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
</body>

</html>