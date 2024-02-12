<?php 
    include("../include/header.php");
    include("../include/menu.php");
?>

  <div class="col-lg-10">
    <section id="ochranaObsah" class="pt-5 pb-xl-0 pb-5">
      <div class="container px-5 pb-5">
        <div class="row">
          <div class="col-lg-12 pt-4 pb-3 pl-5 casti mb-4">
            <h1>zabezpečenie</h1>
          </div>

          <div
            class="col-lg-4 pl-0 pr-lg-3 pr-0 mb-5 text-center zabezpecenieIcons"
            id="vonDvere"
          >
            <div class="casti pt-2 pb-4">
              <vondvere></vondvere>
            </div>
          </div>

          <div
            class="col-lg-4 px-lg-3 px-0 mb-5 text-center zabezpecenieIcons"
            id="garazBrana"
          >
            <div class="casti pt-2 pb-4">
              <garazbrana></garazbrana>
            </div>
          </div>

          <div
            class="col-lg-4 pr-0 pl-lg-3 pl-0 mb-5 text-center zabezpecenieIcons"
            id="alarm"
          >
            <div class="casti pt-2 pb-4">
              <alarm></alarm>
            </div>
          </div>

          <div class="col-lg-6 vsetkyRolety mt-3 px-0">

            <div class="casti pt-3 pb-2 pl-3 mb-4">
              <h2 class="pl-3">okenné<br />rolety</h2>
            </div>

            <div class="casti p-3 mb-5">
              
              <div class="row mt-3 pb-3 text-center">
                
                <div class="col-xl-4" id="spalnaDRoleta2">
                  <spalnadroleta2></spalnadroleta2>
                </div>

                <div class="col-xl-4 mt-xl-0 mt-3" id="spalnaHRoleta2">
                  <spalnahroleta2></spalnahroleta2>
                </div>

                <div class="col-xl-4 mt-xl-0 mt-3" id="pracovnaRoleta2">
                  <pracovnaroleta2></pracovnaroleta2>
                </div>

                <div class="col-xl-6 mt-3" id="detskaRoleta2">
                  <detskaroleta2></detskaroleta2>
                </div>

                <div class="col-xl-6 mt-3" id="detskaRoletaDva">
                  <detskaroletadva></detskaroletadva>
                </div>

              </div>

            </div>
          </div>

          <div class="col-lg-1"></div>

          <div class="col-lg-5 mt-3 prijazdovaCesta px-0">
            <div class="casti pt-3 pb-2 pl-3 mb-4">
              <h2 class="pl-lg-3 pl-1">príjazdová<br />cesta</h2>
            </div>

            <div class="casti pb-3 pt-4 mb-3" id="cestaSvetlo">
              <cestasvetlo></cestasvetlo>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>

<?php
    include("../include/footer.php");
?>
<script src="../ochrana/vondvere.js"></script>
<script src="../ochrana/cestasvetlo.js"></script>
<script src="../ochrana/brana.js"></script>
<script src="../ochrana/alarm.js"></script>
<script src="../ochrana/spalnahroleta2.js"></script>
<script src="../ochrana/spalnadroleta2.js"></script>
<script src="../ochrana/pracovnaroleta2.js"></script>
<script src="../ochrana/detskaroleta2.js"></script>
<script src="../ochrana/detskaroletadruha.js"></script>
