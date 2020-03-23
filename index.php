<?php
// On fait appel à la classe functions
require_once($_SERVER["DOCUMENT_ROOT"]."/lrs/src/model/functions.php");
session_start();
showMessage();

// On fait appel à la classe event_manager
require_once($_SERVER["DOCUMENT_ROOT"] . '/lrs/src/model/event_manager.php');
$event = new event_manager();
$event->deleteEventDate();
?>

<!-- HEAD -->
<?php include "src/include/head.php"?>
<!-- END HEAD -->
<body>

      <!-- MOBILE MENU -->
      <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <?php include "src/include/mobilenav.php"?>
            </div>
        </div>
      </section>
      <!-- END MOBILE MENU -->

      <!--HEADER SECTION-->
      <section>
        <!-- TOP BAR -->
          <?php include "src/include/header.php"?>
        <!-- END TOP BAR -->

        <!-- LOGO AND MENU SECTION -->
          <?php include "src/include/menu.php"?>
        <!-- END LOGO AND MENU SECTION -->
      </section>
      <!--END HEADER SECTION-->

      <!-- SLIDER -->
        <section>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item slider1 active">
                        <img src="assets/images/dugnylyrschumanadm.jpg" alt="">
                        <div class="carousel-caption slider-con">
                            <h2>Bienvenue au<br> <span>Lycée Robert Schuman</span></h2>
                            <p></p>
                            <a href="/lrs/src/view/school.php" class="bann-btn-1">A propos</a><a href="/lrs/src/view/formations.php" class="bann-btn-2">Formations</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

          <!-- QUICK LINKS -->
          <section>
              <div class="container">
                  <div class="row">
                      <div class="wed-hom-ser">
                          <ul>
                              <li>
                                  <a href="/lrs/src/view/troisieme-prepa-pro.php" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="assets/images/icon/h-ic1.png"> 3ème</a>
                              </li>
                              <li>
                                  <a href="/lrs/src/view/bac-pro.php" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="assets/images/icon/h-ic2.png"> Bac Pro</a>
                              </li>
                              <li>
                                  <a href="/lrs/src/view/bac-sti.php" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="assets/images/icon/h-ic4.png"> Bac STI2D</a>
                              </li>
                              <li>
                                  <a href="/lrs/src/view/bts-sio.php" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="assets/images/icon/h-ic3.png"> BTS</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </section>
          <!-- END QUICK LINKS -->
      <!-- END SLIDER -->

    <!-- FOOTER -->
      <section>
        <?php include "src/include/footer.php"?>
      </section>
    <!-- END FOOTER -->

</body>

</html>
