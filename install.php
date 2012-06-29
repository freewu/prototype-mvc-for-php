<?php
define("INSTALL",true);
include_once("./config/config.php");
include_once(LIB_DIR."Install.php");

if(Install::checkLock()) die("install lock,plase access uninstall.php to remove lock");

new Install();
