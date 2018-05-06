var detail = new Vue({
  el: '#detail',

  data: {
    status: 'detail',

    telephoneNum: null,
    email: null,

    telephoneNumTip: null,
    emailTip: null,
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

    checkTelephoneNum: function () {

      if (!this.telephoneNum) {
        this.telephoneNumTip = 'Telephone num can not be empty.';

        return false;
      } else {
        this.telephoneNumTip = null;

        return true;
      }

    },

    checkEmail: function () {

      if (!this.email) {
        this.emailTip = 'E-mail can not be empty.';

        return false;
      } else {
        this.emailTip = null;

        return true;
      }

    },
  }

})