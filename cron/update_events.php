#!/usr/bin/php5
<?php

  require realpath(dirname($_SERVER['SCRIPT_NAME']).'/../muzombies.ini.php');
  require DOCUMENT_ROOT.'/www/module/includes.php';

  $GLOBALS['Wall']->GenerateWallCache();
  
?>