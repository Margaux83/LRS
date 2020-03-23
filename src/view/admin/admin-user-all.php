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
                                <h4>Liste des anciens étudiants</h4>
                            </div>
                            <div class="tab-inn">
                                <div style=" display: flex; flex-wrap: nowrap; overflow: auto;" class="table-responsive table-desi">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Prénom</th>
                                            <th>Nom</th>
                                            <th>Tél</th>
                                            <th>Email</th>
                                            <th>Adresse</th>
                                            <th>Date d'inscription</th>
                                            <th>Voir</th>
                                            <th>Supprimer</th>
                                        </tr>
                                        </thead>
                                        <?php
                                        $membre = new lrs_manager();
                                        $result = $membre->selectUsers();

                                        ?>
                                        <tbody>
                                        <?php  foreach($result as $r){?>
                                            <tr>
                                                <td><?php echo $r['prenom'];?></td>
                                                <td><?php echo $r['nom'];?></td>
                                                <td><?php echo $r['phone'];?></td>
                                                <td><?php echo $r['email'];?></td>
                                                <td><?php echo $r['adresse'];?></td>
                                                <td><?php $format = $r['date_insc'];
                                                    $date = date('d/m/Y H:i:s', strtotime($format));
                                                    echo $date; ?></td>
                                                <td><a href="admin-student-details.php?id=<?php echo $r['id'] ?>" >
                                                        <img src="/lrs/assets/images/loupe.png" alt="" height="25" width="25"></a></td>

                                                <td>
                                                    <img onClick="deleteme(<?php echo $r['id']; ?>)" src="/lrs/assets/images/recyclebin-512.png" alt="" height="25" width="25">
                                                    </td>
                                            </tr>
                                        <?php }?>

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
            window.location.href='/lrs/src/traitement/user-delete-ttt.php?id=' +delid+'';
            return true;
        }
    }
</script>
</body>

</html>