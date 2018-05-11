var detail = new Vue({
  el: '#detail',

  data: {
    nameTip: null,
    descriptionTip: null,
  },

  methods: {
    checkName: function () {
      let name = $('#name').val();
      let result = Check.checkEmpty(name, 'Campus name');
      this.nameTip = result.tipMessage;

      return result.status;
    },

    checkDescription: function () {
      let description = $('#description').val();
      let result = Check.checkEmpty(description, 'Campus description');
      this.descriptionTip = result.tipMessage;

      return result.status;
    },

    save: function (event) {
      let nameResult = this.checkName();
      let descriptionResult = this.checkDescription();

      if (nameResult && descriptionResult) {

        return true;
      } else {
        event.preventDefault();
      }

    },
  },
})