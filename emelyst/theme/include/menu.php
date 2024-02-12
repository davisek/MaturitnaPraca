<div class="col-md-2 m-lg-0 m-auto text-center">
    <section id="sideBarWrap">
      <div class="sideBarLogo py-3">
        <a href="../informacie"><img src="../images/emelyst_logo_light.png" alt="emelyst"
        /></a>
      </div>
      <div>
        <nav class="navbar justify-content-center pl-xl-3 pl-lg-4 pl-md-5 pl-3">
          <ul class="navbar-nav">
            <li
              class="nav-item text-left"
              v-for="(polozka, odkaz, index) in polozky"
              :key="index"
              :class="{ tretie: index == 2 }"
            >
              <a :href="'../' + odkaz" :class="{active: odkaz == stranka}"
                ><i class="sideIcons"
                  ><img
                    :src="'../images/icons/' + odkaz + '.png'"
                    alt="icon"/></i
                >{{ polozka }}</a
              >
            </li>
          </ul>
        </nav>
      </div>
    </section>
</div>

<script>
    var vueApp = new Vue({
        el: "#sideBarWrap",
        data: {
            polozky: {},
            stranka: ""
        },
        created: function() {
            fetch('../include/sidebar.json')
                .then(response => response.json())
                .then(data => this.polozky = data);

            url = window.location.pathname;
            url = url.replace(/\/$/, '');
            this.stranka = url.replace(/.*\//, '');
        }
    });
</script>
