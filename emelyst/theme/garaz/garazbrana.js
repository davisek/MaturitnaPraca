Vue.component('garazbrana', {
  data() {
    return {
      activated2: true,
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
        topic: "EMELYST/prizemie/garaz/motorcek",
        qos: 0
      },
      publish: {
        topic: "EMELYST/prizemie/garaz/motorcek",
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
        this.activated2 = this.receiveNews == "on" ? true : false;
        this.receiveNews = "";
        console.log(`Received message ${message} from topic ${topic}`);
      });

    this.doSubscribe();
    this.dbText();
    
  },

  methods: {

    dbText(){
      fetch('../garaz/dbconn2.php')
        .then(response => response.text())
        .then(data => this.activated2 = data == " on" ?  true :  false);   
    },

    btnChange2(){
      this.activated2 = !this.activated2;
      this.publish.payload = this.activated2 ? "on" : "off"
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

    imageState2() {
      return this.activated2 == false
        ? ("../images/garaz_zatvorena_icon.png")
        : ("../images/garaz_otvorena_icon.png");
    }

  },
  template: `<div><h2 class="py-4">brána</h2>
  <div class="mb-3">
    <img :src="imageState2" alt="brana" />
  </div>

  <button
    type="button"
    @click="btnChange2"
    class="btn btn-light mt-3 mb-4"
    :class="{ btnBlue: activated2 == true }"
  >
    {{ activated2 == false ? "otvoriť" : "zatvoriť" }}
  </button></div>`
})

new Vue({
  el: '#garazBrana'
})