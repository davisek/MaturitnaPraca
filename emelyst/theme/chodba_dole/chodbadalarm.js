Vue.component('chodbadalarm', {
  data() {
    return {
      activated3: false,
      activated4: true,
      connection: {
        host: "192.168.0.5",
        port: 1884,
        endpoint: "/mqtt",
        clean: true, // Reserved session
        connectTimeout: 4000, // Time out
        reconnectPeriod: 4000, // Reconnection interval
        // Certification Information
        clientId: "mqttjs_3be2c321",
        username: "",
        password: ""
      },
      subscription: {
        topic: "EMELYST/prizemie/chodba/alarm",
        qos: 0
      },
      publish: {
        topic: "EMELYST/prizemie/chodba/alarm",
        qos: 0,
        payload: '{ "msg": "Hello, I am browser." }'
      },
      receiveNews: "",
      qosList: [
        { label: 0, value: 0 },
        { label: 1, value: 1 },
        { label: 2, value: 2 }
      ],
      client: {
        connected: false
      },
      subscribeSuccess: false
    };
  },

  created: 
    function() {
      // Connect string, and specify the connection method used through protocol
      // ws unencrypted WebSocket connection
      // wss encrypted WebSocket connection
      // mqtt unencrypted TCP connection
      // mqtts encrypted TCP connection
      // wxs WeChat mini app connection
      // alis Alipay mini app connection
      const { host, port, endpoint, options } = this.connection;
      const connectUrl = `ws://${host}:${port}${endpoint}`;
      try {
        this.client = mqtt.connect(connectUrl, options);
      } catch (error) {
        console.log("mqtt.connect error", error);
      }
      this.client.on("connect", () => {
        console.log("Connection succeeded!");
      });
      this.client.on("error", error => {
        console.log("Connection failed", error);
      });
      this.client.on("message", (topic, message) => {
        this.receiveNews = this.receiveNews.concat(message);
        this.activated3 = this.receiveNews == "on" ? true : false;
        this.receiveNews = "";
        console.log(`Received message ${message} from topic ${topic}`);
      });

    this.doSubscribe();
    this.dbText();
    
  },

  methods: {

    dbText(){
      fetch('../chodba_dole/dbconn3.php')
        .then(response => response.text())
        .then(data => this.activated3 = data == " on" ?  true :  false);   
    },

    btnChange3(){
      this.activated3 = !this.activated3;
      this.activated4 = !this.activated4;
      this.publish.payload = this.activated3 ? "on" : "off"
      this.doPublish();
    },

    btnChange4() {
      this.activated4 = !this.activated4;
      this.activated3 = !this.activated3;
      this.publish.payload = this.activated4 ? "off" : "on"
      this.doPublish();
    },

    doSubscribe() {
      const { topic, qos } = this.subscription;
      this.client.subscribe(topic, { qos }, (error, res) => {
        if (error) {
          console.log("Subscribe to topics error", error);
          return;
        }
        this.subscribeSuccess = true;
        console.log("Subscribe to topics res", res);
      });
    },

    doPublish() {
      const { topic, qos, payload } = this.publish
      this.client.publish(topic, payload, qos, error => {
      if (error) {
      console.log('Publish error', error)
      }
      })
    }

  },

  computed: {

    imageState3() {
      return this.activated3 == false
        ? ("../images/alarm_icon.png")
        : ("../images/alarm_on_icon.png");
    }

  },
  template: `<div><div class="row">
  <div class="col-lg-9 d-flex">
    <div class="my-3 ml-3 mr-lg-5 mr-2 img">
      <img :src="imageState3" alt="lamp" />
    </div>
    <div class="mt-3">
      <h2>alarm</h2>
      <p>
        stav
        <strong>{{
          activated3 == false ? "vypnutý" : "zapnutý"
        }}</strong>
      </p>
    </div>
  </div>
  <div class="col-lg-3 text-center">
    <div>
      <button
        type="button"
        @click="btnChange3"
        class="btn btn-light mt-4"
        :class="{ btnBlueEvent: activated3 == true }"
      >
        zapnúť
      </button>
    </div>
    <div class="mb-3">
      <button
        type="button"
        @click="btnChange4"
        class="btn btn-light mt-3 mb-lg-0 mb-3"
        :class="{ btnBlueEvent: activated4 == true }"
      >
        vypnúť
      </button>
    </div>
  </div>
</div></div>`
})

new Vue({
  el: '#chodbaDAlarm'
})