<?php
$_content="";

include("./php_lib/inlezen.inc.php");    
$_content = inlezen("loginBuddy.html");

require("./smarty/mySmarty.inc.php");
$_smarty->assign('content', $_content);

$_smarty->display('B_index.tpl');



?>