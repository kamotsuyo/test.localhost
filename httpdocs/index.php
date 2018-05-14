<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <meta name="Author" content="" />
    <?PHP require_once(__DIR__.'/console_log/console.php'); ?>
</head>

<body>
    <h1>test.localhost</h1>

    <?PHP $arr = array("foo" => "bar",
    "bar" => "foo");?>

    <?PHP $console = new Console(); ?>
    <?PHP $console->log('hogehoge'); ?>
    <?PHP $console->log("これはどう？"); ?>
    <?PHP $console->vardump($arr); ?>
    <?PHP var_dump($arr); ?>
    <?PHP $console->vardump(debug_backtrace() ); ?>
</body>

</html>
