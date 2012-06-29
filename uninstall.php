<?php
define("INSTALL",true);
include_once("./config/config.php");
if(install_lock_clear()) {
    $url = $_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME'])."/install.php;
    header("refresh:3;url=http://".$url);
    echo "uninstall succeed",",<a href=\"http://".$url."\">".$url."</a>";die();
}
