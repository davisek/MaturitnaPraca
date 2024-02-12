<?php 
    include("../include/header.php");
    include("../include/menu.php");
?>

<div class="col-lg-10">
    <section id="detskaIzbaObsah" class="py-5">
      <div class="container px-5 pt-5">
        <div class="row">
          <div class="col-lg-12 pt-4 pb-3 pl-lg-5 pl-4 casti mb-5">
            <h1>detská izba</h1>
          </div>
          <div class="col-lg-5 casti text-center mb-4" id="detskaSvetlo">
            <h2 class="py-4">svetlo</h2>
            <detskasvetlo></detskasvetlo>
          </div>

          <div class="col-lg-2"></div>

          <div class="col-lg-5 casti text-center mb-4" id="detskaRoleta">
            <detskaroleta></detskaroleta>
          </div>

          <div class="col-lg-5 casti text-center mt-4 mb-4" id="detskaRoleta2">
            <detskaroleta2></detskaroleta2>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php
    include("../include/footer.php");
?>
<script src="../detska_izba/detskasvetlo.js"></script>
<script src="../detska_izba/detskaroleta.js"></script>
<script src="../detska_izba/detskaroleta2.js"></script>
