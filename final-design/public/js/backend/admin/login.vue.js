var loginForm = new Vue({
  el: '#login',

  data: {
    name: null,
    password: null,
    rememberMe: true,

    nameTip: null,
    passwordTip: null,
  },

  methods: {
    checkName: function () {

      if (!this.name) {
        this.nameTip = 'Username can not be empty';

        return false;
      } else {
        this.nameTip = '';

        return true;
      }

    },

    checkPassword: function () {

      if (!this.password) {
        this.passwordTip = 'Password can not be empty';

        return false;
      } else {
        this.passwordTip = '';

        return true;
      }

    },

    login: function (e) {
      let nameResult = this.checkName();
      let passwordResult = this.checkPassword();

      if (nameResult && passwordResult) {

        return true;
      } else {
        e.preventDefault();
      }

    },
  },
})