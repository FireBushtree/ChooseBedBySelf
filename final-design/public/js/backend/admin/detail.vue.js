var detail = new Vue({
  el: '#detail',

  data: {
    status: 'detail',

    telephoneNum: null,
    email: '',

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
      let result = Check.checkEmpty(this.telephoneNum, 'Telephone number');
      this.telephoneNumTip = result.tipMessage;

      return result.status;
    },

    checkEmail: function () {
      let result =  Check.checkEmpty(this.email, 'E-mail');
      this.emailTip = result.tipMessage;

      return result.status;
    },

    saveDetail: function (e) {
      let telephoneNumResult = this.checkTelephoneNum();
      let emailResult = this.checkEmail();

      if (telephoneNumResult && emailResult) {

        return true;
      } else {
        e.preventDefault();
      }

    }

  }

})