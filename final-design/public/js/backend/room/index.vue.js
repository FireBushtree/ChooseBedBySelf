var index = new Vue({
  el: '#index',

  data: {
    rooms: null,
    apartments: null,
    currentApartment: null,
    floorOptions: [],
    currentFloor: 1,
  },

  created: function () {
    axios({
      url: '/admin/api/apartments',
      method: 'get'
    }).then((response) => {
      this.apartments = response.data;
      this.currentApartment = this.apartments[0];
      this.init();
    });

  },

  methods: {
    init: function () {
      this.currentFloor = 1;
      this.floorOptions = [];
      this.getRooms();
      this.setFloorOptions();
    },

    getRooms: function () {
      axios({
        url: '/admin/api/apartment/' + this.currentApartment.id + '/rooms/' + this.currentFloor,
        method: 'get'
      }).then((response) => {
        this.rooms = response.data;
      })
    },

    setFloorOptions: function () {

      for (var i = 1; i <= this.currentApartment.floor_num; i++) {
        let option = {'id': i};
        this.floorOptions.push(option);
      }

    },

    setFloor: function (e) {
      this.currentFloor = e.target.value;
      this.getRooms();
    },

    setApartment: function (e) {
      let apartmentdId = e.target.value;

      for (let i in this.apartments) {

        if (this.apartments[i].id == apartmentdId) {
          this.currentApartment = this.apartments[i];
          break;
        }

      }

      this.init();
    }

  },
})