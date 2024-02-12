<?php 
    include("../include/header.php");
    include("../include/menu.php");
?>

<div class="col-lg-10">
    <section id="kuchynaObsah" class="py-5">
      <div class="container px-5 pt-5">
        <div class="row">
          <div class="col-lg-12 pt-4 pb-3 pl-lg-5 pl-4 casti mb-5">
            <h1>kuchyňa</h1>
          </div>

          <div class="col-lg-5 casti text-center mb-4" id="kuchynaSvetlo">
            <h2 class="py-4">svetlo</h2>
            <kuchynasvetlo></kuchynasvetlo>
          </div>

          <div class="col-lg-2"></div>
          
          <div class="col-lg-5 casti text-center mb-4" id="linkaSvetlo">
            <h2 class="py-4">linka</h2>
            <linkasvetlo></linkasvetlo>
          </div>

        </div>
      </div>
    </section>
  </div>

<?php
    include("../include/footer.php");
?>

<script src="../kuchyna/kuchynasvetlo.js"></script>
<script src="../kuchyna/linkasvetlo.js"></script>
