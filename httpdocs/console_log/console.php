<?PHP

class Console{
    
    function __construct(){

    }
    public function log($_log){
        
        //ダブルコートをエスケープ文字に置き換える
        $_log = str_replace('"','\"',$_log);

        //スクリプトタグを生成してconsole.logに書き出し。
        echo "<script>";
        echo "eval(console.log(\"$_log\"))";
        echo "</script>";
    }
    /**
    * vardump
    * 引数をvar_dump()実行しconsol.logに書き出す。
    * 
    * 
    * 
    * 
    * 
    */
    public function vardump($source){
        ob_start();
        var_dump($source);
        $result =ob_get_contents(); 
        ob_end_clean();

        $result = str_replace('"','\"',$result);
        //半角スペースを取り除く
        $result = str_replace(' ','',$result);
        //PHP_EOLを削除
        $result = str_replace(PHP_EOL,'',$result);
        
        echo "<script>";
        echo "console.log(\"$result\")";
        echo "</script>";
    }

}
