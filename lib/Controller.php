<?php
class Controller extends Base{
    var $view = null;
    var $pager = null;
    
    // 构造函数
    function Controller(){
        header("Content-type: text/html; charset=utf-8");
        include_once(LIB_DIR."Smarty/Smarty.class.php");
        $smarty = new Smarty();
        
        $smarty->template_dir = APP_DIR.'v/';
        $smarty->compile_dir = CACHE_DIR;
        $smarty->cache_dir = CACHE_DIR;
        $this->view = &$smarty;
        
        include_once(LIB_DIR."Page.php");
        $page = new Page();
        $this->page = $page;
    }
    
    function message($sMsg,$url = ''){
        if(empty($url)) $url = $_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
        header("refresh:3;url=http://".$url);
        echo $sMsg.",3秒后跳转 <a href=".$url.">".$url."</a>";die();
    }
}
?>