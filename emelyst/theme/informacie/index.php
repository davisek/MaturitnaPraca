<?php 
    include("../include/header.php");
    include("../include/menu.php");
?>

<div class="col-lg-10">
    <section id="infoObsah" class="py-5">
      <div class="container pl-5">
        <div class="row">
          <div class="infoNadpis col-lg-12 pl-0 mb-3 pr-xl-0 pr-4">
            <div class="casti pt-4 pb-3 pl-5">
              <h1>Informácie</h1>
            </div>
          </div>
            
          <div class="col-xl-6 mt-2 pl-0 pr-4 mb-xl-0 mb-4">
            <div class="domInfo casti pl-3 pt-5 pb-5 pr-3">
              <img class="" src="../images/dom_png.png" alt="dom" />
            </div>
          </div>
          
          <div class="zakladneInfo col-xl-3 mt-xl-2 mt-4 mb-xl-0 mb-4">
            <div class="row pr-xl-5 pr-4 pl-xl-4 pl-0">

                  <div class="col-lg-12 casti hodiny pt-4 pb-3 mb-4" id="time">
                    <h3 class="text-center">čas</h3>
                    <div class="d-flex">
                      <img src="../images/clock_icon.png" alt="clock" />
                      <cas></cas>
                    </div>
                  </div>

                  <div class="col-lg-12 casti pt-4 pb-3 mb-4" id="teplota">
                    <h3 class="text-center">teplota</h3>
                    <div class="d-flex">
                      <img src="../images/teplomer.png" alt="teplomer" />
                      <teplota></teplota>
                    </div>
                  </div>

                  <div class="col-lg-12 casti pt-4 pb-3" id="vlhkost">
                    <h3 class="text-center">vlhkosť</h3>
                    <div class="d-flex">
                      <img src="../images/vlhkost.png" alt="vlhkost" />
                      <vlhkost></vlhkost>
                    </div>
                  </div>
      
            </div>
          </div>
              

          <div
            class="col-xl-3 mt-2 casti text-center uzivatel mr-xl-0 mr-4"
          >
            <div class="pt-xl-5 pt-3 pb-xl-0 pb-4" id="alarmInfo">
              <alarminfo></alarminfo>
            </div>
    
          </div>

          <div class="rodinaNadpis col-xl-12 pl-0 mb-4 mt-5 pr-xl-0 pr-4">
            <div class="casti pt-4 pb-3 pl-4">
              <h2>Moja rodina</h2>
            </div>
          </div>

          <div class="col-xl-12 pr-xl-0 pr-3 pl-3 mb-4">
            <div class="row casti text-center clenovia pt-5 pb-0 mr-xl-0 mr-2">
              
              <div class="col-xl-3">
                <div id="mamaStav">
                  <h2 class="mb-3">Mama</h2>
                  <img  src="../images/businesswoman.png" alt="mama" />
                  <mamastav></mamastav>
                </div>
              </div>

              <div class="col-xl-3">
                <div id="otecStav">
                  <h2 class="mb-3">Otec</h2>
                  <img src="../images/boss.png" alt="otec" />
                  <otecstav></otecstav>
                </div>
              </div>

              <div class="col-xl-3">
                <div id="synStav">
                  <h2 class="mb-3">Syn</h2>
                  <img src="../images/man.png" alt="syn" />
                  <synstav></synstav>
                </div>
              </div>

              <div class="col-xl-3">
                <div id="dceraStav">
                  <h2 class="mb-3">Dcéra</h2>
                  <img src="../images/woman.png" alt="dcera" />
                  <dcerastav></dcerastav>
                </div>
              </div>

            </div>
          </div>

          <div class="col-xl-6 mt-4 text-center pl-0 pr-xl-4 pr-4 mb-5">
            
            <div class="casti py-4 px-3">
              <h2 class="mb-4">priemerná teplota za týždeň</h2>

              <div class="mb-3">
                <?php include("../informacie/graftdb.php") ?>
                <canvas id="chart" style="width: 100%; max-height: 50vh; border: 1px solud #555352; margin-top: 10px;"></canvas>
                <script>
                  var ctx = document.getElementById("chart").getContext('2d');
                  var myChart = new Chart(ctx,{
                    type: 'line',
                    data: {
                      labels: [1,2,3,4,5,6,7],
                      datasets:
                      [{
                        label: 'Teplota',
                        data: [<?php echo $data; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgba(207, 0, 15, 1)',
                        borderWidth: 3
                      }]
                    },

                    options: {
                      scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
                      tooltips:{mode: 'index'},
                      legend:{display: true, position: 'top', labels: {frontColor: 'rgb(255,255,255)', fontSize: 16}}
                    }
                  });
                </script>
              </div>

            </div>

          </div>

          <div class="col-xl-6 mt-4 text-center pl-xl-4 pl-0 pr-xl-0 pr-4 mb-5">

            <div class="casti py-4 px-3">
              <h2 class="mb-4">priemerná vlhkosť za týždeň</h2>

              <div class="mb-3">
                <?php include("../informacie/grafvdb.php") ?>
                <canvas id="chart2" style="width: 100%; max-height: 50vh; border: 1px solud #555352; margin-top: 10px;"></canvas>
                <script>
                  var ctx = document.getElementById("chart2").getContext('2d');
                  var myChart = new Chart(ctx,{
                    type: 'line',
                    data: {
                      labels: [1,2,3,4,5,6,7],
                      datasets:
                      [{
                        label: 'Vlhkosť',
                        data: [<?php echo $data; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgba(44, 130, 201, 1)',
                        borderWidth: 3
                      }]
                    },

                    options: {
                      scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
                      tooltips:{mode: 'index'},
                      legend:{display: true, position: 'top', labels: {frontColor: 'rgb(255,255,255)', fontSize: 25}}
                    }
                  });
                </script>
              </div>

            </div>

          </div>

        </div>
      </div>
    </section>
  </div>

<?php
    include("../include/footer.php");
?>

<script src="../informacie/cas.js"></script>
<script src="../informacie/teplota.js"></script>
<script src="../informacie/vlhkost.js"></script>
<script src="../informacie/rodina/otecStav.js"></script>
<script src="../informacie/rodina/mamaStav.js"></script>
<script src="../informacie/rodina/synStav.js"></script>
<script src="../informacie/rodina/dceraStav.js"></script>
<script src="../informacie/alarm.js"></script>
<script src="../informacie/grafteplota.js"></script>
<script src="../informacie/grafvlhkost.js"></script>


