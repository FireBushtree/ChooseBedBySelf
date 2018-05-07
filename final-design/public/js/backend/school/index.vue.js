var detail = new Vue({
  el: '#detail',

  data: {
    status: 'detail',

    nameTip: null,
    descriptionTip: null,
  },

  methods: {
    toEdit: function () {
      this.status = 'edit';
    },

    cancel: function () {
      location.href = '/admin/index';
    },

    back: function () {
      this.status = 'detail';
    },

    checkName: function () {
      let name = $('#name').val();
      let result = Check.checkEmpty(name, 'School name');
      this.nameTip = result.tipMessage;

      return result.status;
    },

    checkDescription: function () {
      let description = $('#description').val();
      let result = Check.checkEmpty(description, 'The description of school');
      this.descriptionTip = result.tipMessage;

      return result.status;
    },

    saveDetail: function (e) {
      let nameResult = this.checkName();
      let descriptionResult = this.checkDescription();

      if (nameResult && descriptionResult) {

        return true;
      } else {
        e.preventDefault()
      }
    },

  },
})