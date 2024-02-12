<?php 
    include("../include/header.php");
    include("../include/menu.php");
?>

<div class="col-lg-10">
    <section id="hornaSpalnaObsah" class="py-5">
      <div class="container px-5 pt-5">
        <div class="row">
          <div class="col-lg-12 pt-4 pb-3 pl-lg-5 pl-4 casti mb-5">
            <h1>horná spálňa</h1>
          </div>

          <div class="col-lg-5 casti text-center mb-4" id="spalnaHSvetlo">
            <h2 class="py-4">svetlo</h2>
            <spalnahsvetlo></spalnahsvetlo>
          </div>

          <div class="col-lg-2"></div>

          <div class="col-lg-5 casti text-center mb-4" id="spalnaHSatnikSvetlo">
            <h2 class="py-4">šatník</h2>
            <spalnahsatniksvetlo></spalnahsatniksvetlo>
          </div>
          
          <div class="col-lg-5 casti text-center mt-4 mb-4" id="spalnaHRoleta">
            <spalnahroleta></spalnahroleta>
          </div>

        </div>
      </div>
    </section>
  </div>

<?php
    include("../include/footer.php");
?>

<script src="../spalna_hore/spalnahsvetlo.js"></script>
<script src="../spalna_hore/spalnahsatniksvetlo.js"></script>
<script src="../spalna_hore/spalnahroleta.js"></script>
