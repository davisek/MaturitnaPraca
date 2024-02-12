<?php 
    include("../include/header.php");
    include("../include/menu.php");
?>

<div class="col-lg-10">
    <section id="hornaChodbaObsah" class="py-5">
      <div class="container px-5 pt-5">
        <div class="row">
          <div class="col-lg-12 pt-4 pb-3 pl-lg-5 pl-4 casti mb-5">
            <h1>horná chodba</h1>
          </div>
          
          <div class="col-lg-3"></div>
          
          <div class="col-lg-6 casti text-center mb-4" id="chodbaHSvetlo">
            <h2 class="py-4">svetlo</h2>
            <chodbahsvetlo></chodbahsvetlo>
          </div>

          <div class="col-lg-3"></div>

        </div>
      </div>
    </section>
  </div>

<?php
    include("../include/footer.php");
?>
<script src="../chodba_hore/chodbahsvetlo.js"></script>
