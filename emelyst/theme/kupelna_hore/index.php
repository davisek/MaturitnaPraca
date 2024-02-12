<?php 
    include("../include/header.php");
    include("../include/menu.php");
?>

<div class="col-lg-10">
    <section id="hornaKupelnaObsah" class="py-5">
      <div class="container px-5 pt-5">
        <div class="row">
          <div class="col-lg-12 pt-4 pb-3 pl-lg-5 pl-4 casti mb-5">
            <h1>horná kúpeľňa</h1>
          </div>

          <div class="col-lg-3"></div>
          
          <div class="col-lg-6 casti text-center mb-4" id="kupHSvetlo">
            <h2 class="py-4">svetlo</h2>
            <kuphsvetlo></kuphsvetlo>
          </div>

          <div class="col-lg-3"></div>

        </div>
      </div>
    </section>
  </div>

<?php
    include("../include/footer.php");
?>

<script src="../kupelna_hore/kupelkahsvetlo.js"></script>
