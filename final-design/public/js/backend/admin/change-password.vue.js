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

      if (!this.oldPassword) {
        this.oldPasswordTip = 'Old password can not be empty.';

        return false;
      } else {
        this.oldPasswordTip = null;

        return true;
      }

    },

    checkNewPassword: function () {

      if (!this.newPassword) {
        this.newPasswordTip = 'New password can not be empty.';

        return false;
      } else {
        this.newPasswordTip = null;

        return true;
      }

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