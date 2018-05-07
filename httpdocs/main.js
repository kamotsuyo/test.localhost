
(function () {
    "use strict";
    document.addEventListener('DOMContentLoaded', function(){
        console.log('DOMContentLoaded');


    }, false);
    document.addEventListener('readystatechange', function(ev){
        console.log(ev);
        console.log(document.readyState);

        switch (document.readyState) {
            case "interactive":
                console.log('インタラクティブ');
                break;
            case "complete":
                console.log('コンプリート');

                //ディスパッチャーをロードする
                var etc = document.createElement('script');
                etc.src = "/js/etc.js";
                var scripts = document.getElementsByTagName('script');

                document.head.insertBefore(etc,scripts[scripts.length-1].nextSibling);

                break;
            default:

        }

    },false);
}());
