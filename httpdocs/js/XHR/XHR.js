(function () {
    "use strict";
    //XHRクラスのコンストラクタ関数
    define(function () {
        return function (_url, _callback) {
            const
                url = _url,
                callback = _callback;
            const xhr = new XMLHttpRequest();
            const handler = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {

                        callback(xhr.responseText);
                    }
                }
            };
            //初期作業
            xhr.addEventListener('readystatechange', handler, false);

            this.get = function (param) {
                const query = url + '/?' + param;

                xhr.open('get', query, true);
                xhr.send();
            };
        };
    });
})();
