<?php 
    include("../include/header.php");
    include("../include/menu.php");
?>

<div class="col-lg-10">
    <section id="svetlaObsah" class="py-5">
      <div class="container px-5 pb-5">
        <div class="row">
          <div class="col-lg-12 casti">
            <div class="svetlaNadpis pt-4 pb-3 pl-4">
              <h1 class="pt-3">svetlá</h1>
              <h3 class="pt-3">dolné poschodie</h3>
            </div>
          </div>
          <!-- Dolné poschodie -->
          <div
            class="col-xl-2 casti text-center mt-4 pt-4 pb-1 mr-4 miestnostiSvetiel img"
            id="kuchynaSvetlo"
          >
            <h3 class="pb-2">kuchyňa</h3>
            <kuchynasvetlo></kuchynasvetlo>
          </div>

          <div
            class="col-xl-2 casti text-center mt-4 pt-4 pb-1 mr-4 miestnostiSvetiel img"
            id="obyvackaSvetlo"
          >
            <h3 class="pb-2">obývačka</h3>
            <obyvackasvetlo></obyvackasvetlo>
          </div>

          <div
            class="col-xl-2 casti text-center mt-4 pt-4 pb-1 mr-4 miestnostiSvetiel img"
            id="garazSvetlo"
          >
            <h3 class="pb-2">garáž</h3>
            <garazsvetlo></garazsvetlo>
          </div>

          <div
            class="col-xl-2 casti text-center mt-4 pt-4 pb-1 mr-4 miestnostiSvetiel img"
            id="pracovnaSvetlo"
          >
            <h3 class="pb-2">pracovňa</h3>
            <pracovnasvetlo></pracovnasvetlo>
          </div>

          <div
            class="col-xl-2 casti text-center mt-4 pt-4 pb-1 mr-4 miestnostiSvetiel img"
            id="spalnaDSvetlo"
          >
            <h3 class="pb-2">spálňa</h3>
            <spalnadsvetlo></spalnadsvetlo>
          </div>

          <div
            class="col-xl-2 casti text-center mt-4 mb-3 pt-4 pb-1 mr-4 miestnostiSvetiel img"
            id="chodbaDSvetlo"
          >
            <h3 class="pb-2">chodba</h3>
            <chodbadsvetlo></chodbadsvetlo>
          </div>

          <div
            class="col-xl-2 casti text-center mt-4 mb-3 pt-4 pb-1 mr-4 miestnostiSvetiel img"
            id="kupDSvetlo"
          >
            <h3 class="pb-2">kúpeľňa</h3>
            <kupdsvetlo></kupdsvetlo>
          </div>

          <div
            class="col-xl-2 casti text-center mt-4 mb-3 pt-4 pb-1 mr-4 miestnostiSvetiel img"
            id="wcSvetlo"
          >
            <h3 class="pb-2">WC</h3>
            <wcsvetlo></wcsvetlo>
          </div>


          <div
            class="col-xl-2 casti text-center mt-4 mb-3 pt-4 pb-1 mr-4 miestnostiSvetiel img"
            id="vchodSvetlo"
          >
            <h3 class="pb-2">vchod</h3>
            <vchodsvetlo></vchodsvetlo>
          </div>
          
          <div
            class="col-xl-2 casti text-center mt-4 mb-3 pt-4 pb-1 mr-4 miestnostiSvetiel img"
            id="prijazdSvetlo"
          >
            <h3 class="pb-2">príjazd</h3>
            <prijazdsvetlo></prijazdsvetlo>
          </div>

          <!-- Horné poschodie -->
          <div class="col-lg-12 casti mt-5">
            <div class="svetlaNadpis pt-4 pb-3 pl-4">
              <h1 class="pt-3">svetlá</h1>
              <h3 class="pt-3">horné poschodie</h3>
            </div>
          </div>

          <div
            class="col-xl-2 casti text-center mt-4 pt-4 pb-1 mr-4 miestnostiSvetiel img"
            id="spalnaHSvetlo"
          >
            <h3 class="pb-2">spálňa</h3>
            <spalnahsvetlo></spalnahsvetlo>
          </div>

          <div
            class="col-xl-2 casti text-center mt-4 pt-4 pb-1 mr-4 miestnostiSvetiel img"
            id="detskaSvetlo"
          >
            <h3 class="pb-2">detská&nbsp;izba</h3>
            <detskasvetlo></detskasvetlo>
          </div>

          <div
            class="col-xl-2 casti text-center mt-4 pt-4 pb-1 mr-4 miestnostiSvetiel img"
            id="kupHSvetlo"
          >
            <h3 class="pb-2">kúpeľňa</h3>
            <kuphsvetlo></kuphsvetlo>
          </div>

          <div
            class="col-xl-2 casti text-center mt-4 pt-4 pb-1 mr-4 miestnostiSvetiel img"
            id="chodbaHSvetlo"
          >
            <h3 class="pb-2">chodba</h3>
            <chodbahsvetlo></chodbahsvetlo>
          </div>
          
          <div
            class="col-xl-2 casti text-center mt-4 pt-4 pb-1 mr-4 miestnostiSvetiel img"
            id="spalnaHSatnikSvetlo"
          >
            <h3 class="pb-2">šatník</h3>
            <spalnahsatniksvetlo></spalnahsatniksvetlo>
          </div>

        </div>
      </div>
    </section>
</div>

<?php
    include("../include/footer.php");
?>

<script src="../kuchyna/kuchynasvetlo.js"></script>
<script src="../obyvacka/obyvackasvetlo.js"></script>
<script src="../garaz/garazsvetlo.js"></script>
<script src="../pracovna/pracovnasvetlo.js"></script>
<script src="../spalna_hore/spalnahsvetlo.js"></script>
<script src="../spalna_hore/spalnahsatniksvetlo.js"></script>
<script src="../spalna_dole/spalnadsvetlo.js"></script>
<script src="../detska_izba/detskasvetlo.js"></script>
<script src="../kupelna_hore/kupelkahsvetlo.js"></script>
<script src="../kupelna_dole/kupelkadsvetlo.js"></script>
<script src="../chodba_hore/chodbahsvetlo.js"></script>
<script src="../chodba_dole/chodbadsvetlo.js"></script>
<script src="../svetla/vchodsvetlo.js"></script>
<script src="../svetla/wcsvetlo.js"></script>
<script src="../svetla/prijazdsvetlo.js"></script>
