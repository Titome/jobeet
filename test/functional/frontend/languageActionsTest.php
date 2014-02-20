<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctional(new sfBrowser());

$browser->
  get('/change_language')->

  with('request')->begin()->
    isParameter('module', 'sfJobeetLanguage')->
    isParameter('action', 'changeLanguage')->
  end()->

  with('response')->begin()->
    isStatusCode(302)->
    checkElement('body', '!/This is a temporary page/')->
  end()
;
