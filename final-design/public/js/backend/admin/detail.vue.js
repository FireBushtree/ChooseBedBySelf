var detail = new Vue({
  el: '#detail',

  data: {
    status: 'detail',
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
  }

})