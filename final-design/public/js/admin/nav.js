var navbar = new Vue({
  el: '#navbar',

  data: {
    status: null,
  },

  methods: {
    school: function () {
      this.status = 'school';
    },

    academy: function () {
      this.status = 'academy';
    },

    detail: function () {
      $.ajax({
        url: '/admin/detail',
        type: 'get',
        success: function (data) {
          $("#content").html(data);
        }
      })
    },

    changePassword: function () {
      $.ajax({
        url: '/admin/change-password',
        type: 'get',
        success: function (data) {
          $("#content").html(data);
        }
      })
    }
  },
});