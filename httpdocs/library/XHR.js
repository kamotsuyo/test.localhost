/*global define,XMLHttpRequest*/
(function () {
    "use strict";
    //XHRクラスのコンストラクタ関数
    define(function () {
        return function (_url, _callback) {
            var
                url = _url,
                callback = _callback;
            var xhr = new XMLHttpRequest();
            var handler = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {

                        callback(xhr.responseText);
                    }
                }
            };
            //初期作業
            xhr.addEventListener('readystatechange', handler, false);

            this.get = function (param) {
                var query = url + '/?' + param;

                xhr.open('get', query, true);
                xhr.send();
            };
        };
    });
})();
