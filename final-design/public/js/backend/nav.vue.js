var navbar = new Vue({
  el: '#navbar',

  data: {
    status: null,
  },

  created: function () {
    var path = location.pathname;
    var params = path.split('/');
    this.status = params[2];
  },

  methods: {
    logout: function () {
      location.href = '/admin/logout';
    },
  },
});