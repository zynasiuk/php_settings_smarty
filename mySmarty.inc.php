<?php
  require_once 'libs/Smarty.class.php';

// Object instantieren
  $_smarty = new Smarty();
// folders koppelen
  $_smarty->setTemplateDir('./smarty/templates');
  $_smarty->setCompileDir('./smarty/templates_c');
  $_smarty->setCacheDir('./smarty/cache');
  $_smarty->setConfigDir('./smarty/configs');
//caching initialiseren
  $_smarty->caching = false;

  //$smarty->debugging = true;
  // $smarty->cache_lifetime = 120;

?>
