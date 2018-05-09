//[lint]define:un-defアラート除外
/* global define */
(function () {
    "use strict";
    define(['library/lib'], function (lib) {
        return function () {
            console.log('test.js');
            this.name = lib.name;
        };
    });
}());
