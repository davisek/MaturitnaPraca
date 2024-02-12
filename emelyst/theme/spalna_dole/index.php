<?php 
    include("../include/header.php");
    include("../include/menu.php");
?>

<div class="col-lg-10">
    <section id="dolnaSpalnaObsah" class="py-5">
      <div class="container px-5 pt-5">
        <div class="row">
          <div class="col-lg-12 pt-4 pb-3 pl-lg-5 pl-4 casti mb-5">
            <h1>dolná spálňa</h1>
          </div>
          <div class="col-lg-5 casti text-center mb-4" id="spalnaDSvetlo">
            <h2 class="py-4">svetlo</h2>
            <spalnadsvetlo></spalnadsvetlo>
          </div>

          <div class="col-lg-2"></div>
        
          <div class="col-lg-5 casti text-center mb-4 img" id="spalnaDRoleta">
            <spalnadroleta></spalnadroleta>
          </div>
          
        </div>
      </div>
    </section>
  </div>

<?php
    include("../include/footer.php");
?>
<script src="../spalna_dole/spalnadsvetlo.js"></script>
<script src="../spalna_dole/spalnadroleta.js"></script>
