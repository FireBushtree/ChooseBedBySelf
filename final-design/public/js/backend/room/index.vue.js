var index = new Vue({
  el: '#index',

  data: {
    rooms: null,
    apartments: null,
    currentApartment: null,
  },

  created: function () {
    axios({
      url: '/admin/api/apartments',
      method: 'get'
    }).then((response) => {
      this.apartments = response.data;
      this.currentApartment = this.apartments[0];
      this.getRooms();
    });

  },

  methods: {

    getRooms: function () {
      axios({
        url: '/admin/api/apartment/' + this.currentApartment.id + '/rooms',
        method: 'get'
      }).then((response) => {
        this.rooms = response.data;
        console.log(this.rooms);
      })
    },


  },
})