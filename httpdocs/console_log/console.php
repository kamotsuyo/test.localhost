<?PHP

class Console{
    
    function __construct(){

    }
    public function log($_log){

        $_log = str_replace('"','\"',$_log);

        //echo("<script>console.log(\"$_log\")</script>");
        echo "<script>";
        echo "eval(console.log(\"$_log\"))";
        echo "</script>";
    }
    public function vardump($source){
        ob_start();
        var_dump($source);
        $result =ob_get_contents(); 
        ob_end_clean();
        
        $result = str_replace("\r\n", '', $result);
        $result = str_replace('"','\"',$result);
        $result = str_replace(' ','',$result);
        //PHP_EOLを削除
        $result = str_replace(PHP_EOL,'',$result);
        echo "<script>";
        echo "console.log(\"$result\")";
        echo "</script>";
    }

}
