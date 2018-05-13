var detail = new Vue({
  el: '#detail',

  data: {
    apartments: null,
    floorOptions: [],
    currentApartment: null,
  },

  created: function () {
    axios({
      url: '/admin/api/apartments',
      method: 'get',
    }).then((response) => {
      let data = response.data;
      this.apartments = data;
      this.currentApartment = data[0];
      this.setFloorOptions();
    })
  },

  methods: {

    setCurretnApartment: function (e) {
      let apartmentId = e.target.value;

      for (var i in this.apartments) {

        if (this.apartments[i].id == apartmentId) {
          this.currentApartment = this.apartments[i]
          this.setFloorOptions();
          break;
        }

      }

    },

    setFloorOptions: function () {
      this.floorOptions = [];

      for (let i = 1; i <= this.currentApartment.floor_num; i++) {
        let options = {id: i};
        this.floorOptions.push(options);
      }

    }

  }

})