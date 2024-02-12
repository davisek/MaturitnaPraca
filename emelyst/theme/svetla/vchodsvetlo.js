Vue.component('vchodsvetlo', {
  data() {
    return {
      activated: true,
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
        topic: "EMELYST/von/vchod/svetlo",
        qos: 0
      },
      publish: {
        topic: "EMELYST/von/vchod/svetlo",
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
        this.activated = this.receiveNews == "on" ? true : false;
        this.receiveNews = "";
        console.log(`Received message ${message} from topic ${topic}`);
      });

    this.doSubscribe();
    this.dbText();
    
  },

  methods: {

    dbText(){
      fetch('../svetla/dbconn.php')
        .then(response => response.text())
        .then(data => this.activated = data == " on" ?  true :  false);   
    },

    btnChange(){
      this.activated = !this.activated;
      this.publish.payload = this.activated ? "on" : "off"
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

    imageState() {
      return this.activated == false
        ? ("../images/light_bulb_off.png")
        : ("../images/light_bulb_on.png");
    }

  },
  template: `<div>
  <div class="mb-2">
    <img :src="imageState" alt="light" />
  </div>
  <button
    type="button"
    @click="btnChange"
    class="btn btn-light mt-4 mb-4"
    :class="{ btnYellow: activated == true }"
  >
    {{ activated == false ? "zapnúť" : "vypnúť" }}
  </button>
</div>`
})

new Vue({
  el: '#vchodSvetlo'
})