var changePassword = new Vue({
  el: '#changePassword',

  data: {
    oldPassword: null,
    newPassword: null,
    retypePassword: null,

    oldPasswordTip: null,
    newPasswordTip: null,
    retypePasswordTip: null,
  },

  methods: {
    checkOldPassword: function () {
      let result = Check.checkEmpty(this.oldPassword, 'Old password');
      this.oldPasswordTip = result.tipMessage;

      return result.status;
    },

    checkNewPassword: function () {
      let result = Check.checkEmpty(this.newPassword, 'New password');
      this.newPasswordTip = result.tipMessage;

      return result.status;
    },

    checkRetypePassword: function () {

      if (!this.retypePassword) {
        this.retypePasswordTip = 'Retype password can not be empty.';

        return false;
      } else if (this.retypePassword != this.newPassword) {
        this.retypePasswordTip = 'The retype password does not match.';

        return false;
      } else {
        this.retypePasswordTip = null;

        return true;
      }

    },

    changePassword: function (e) {
      let oldPasswordResult = this.checkOldPassword();
      let newPasswordResult = this.checkNewPassword();
      let retypePasswordResult = this.checkRetypePassword();

      if (oldPasswordResult && newPasswordResult && retypePasswordResult) {

        return true;
      } else {
        e.preventDefault();
      }

    },

  },
})