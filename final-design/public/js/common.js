var Check = {
    /**
     * Verify the value weather it is empty.
     *
     * @param string ['value' => 'The type of string need to verify']
     * @param string ['key' => 'The name of this value']
     *
     * @return json ['status' && 'tipMessage']
     */
    checkEmpty: function (value, key) {

        if (!$.trim(value)) {
            var tipMessage = key + ' can not be empty.';
            var status = false;
        } else {
            var tipMessage = null;
            var status = true;
        }

        return {'status': status, 'tipMessage': tipMessage};
    }

}

var Show = {
    /**
     * To show the page of resource's edit
     *
     * @param string url
     */
    jump: function (url) {
        location.href = url;
    }
}
