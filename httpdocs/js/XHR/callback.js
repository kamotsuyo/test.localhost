/*global define*/
(function () {
    "use strict";
    define({
        console_log: function (res) {
            console.log('get:' + res);
        },
        myalert: function (message) {
            alert(message);
        }
    });
})();
