function check() {
    /**
     * Verify the value weather it is empty.
     *
     * @param string ['value' => 'The type of string need to verify']
     * @param string ['key' => 'The name of this value']
     * @param string ['tipArea' => 'The area to show tip message']
     */
    this.checkEmpty = function (value, key, tipArea) {

        if (!value) {
            tipArea = key + 'can not be empty.';

            return false;
        } else {
            tipArea = null;

            return true;
        }

    }

}