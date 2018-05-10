/*global require*/
(function () {
    "use strict";
    var callback = function (res) {
        console.log(res);
    };
    require(['library/XHR.js'], function (XHR) {
        var xhr = new XHR('php_js_console/debuger.php', callback);
        xhr.get('request=start');

    });



}());
