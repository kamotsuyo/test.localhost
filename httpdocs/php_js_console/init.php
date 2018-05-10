<?PHP

if($GET['request']==null){
    
    echo("<script>
    (function() {
        'use strict';
        console.log('deb');

        function init() {
            var script = document.getElementById('debuger_script');
            if (script === null) {
                console.log('script is null');

                var script = document.createElement('script');

                script.setAttribute('src', 'library/require.js')
                script.setAttribute('data-main', 'php_js_console/main')
                script.setAttribute('id', 'debuger_script');
                document.head.appendChild(script);
            } else {
                console.log('debug mode');

            }
        };
        if (document.head) {
            init();
        } else {
            document.addEventListener('DOMContentLoaded', init, false);
        }
    }());

    </script>";)
}
