var navbar = new Vue({
  el: '#navbar',

  data: {
    status: null,
  },

  created: function () {
    var path = location.pathname;
    var params = path.split('/');
    this.status = params[2];
    console.log(this.status);
  },

  methods: {
    logout: function () {
      location.href = '/admin/logout';
    },
  },
});