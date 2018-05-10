<?PHP require_once(__DIR__.'/php_js_console/debuger.php'); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <meta name="Author" content="" />
    <script data-main="php_js_console/main.js" src="library/require.js"></script>
</head>

<body>
    <h1> test
    </h1>
    <h2> PHPログをjavascript console.logに出力
    </h2>
    <p> console.log出力
    </p>

    <button id="button"> XHR
                </button>
    <?PHP $log = new MDebug(); ?>
    <?PHP $log->log('hogehoge');?>
</body>

</html>
