Vue.component('cas', {
  data() {
    return {
      timestamp: ""
      };
      },
    created() {
      setInterval(this.getNow, 1000);
    },
    methods: {
      getNow: function() {
        const today = new Date();
        const time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        const currentTime = time;
        this.timestamp = currentTime;
      }
},
     
  template: `<div class="m-auto">
      
                    {{timestamp}}</div>`
})

new Vue({
  el: '#time'
})
