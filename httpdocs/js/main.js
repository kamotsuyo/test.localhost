/*global require*/
//require(['/js/XHR/XHR.js', 'js/XHR/callback.js'], function (XHR, callback) {
//    var xhr = new XHR("post.php", callback.console_log);
//
//    xhr.get('hoge="haaaaaaaaaaaaa?"');
//});
require(['js/test.js'], function (TEST) {
    var test = new TEST();
    var name = test.name;
    console.log(name);
});
