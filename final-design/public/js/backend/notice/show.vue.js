var show = new Vue({
  el: '#show',

  methods: {
    toEdit: function (id) {
      location.href = '/admin/notice/' + id + '/edit';
    },
  },

})