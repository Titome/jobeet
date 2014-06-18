<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctional(new sfBrowser());

$browser->
    get('/category')->
    click('Signin', array('signin' => array('username' => 'admin', 'password' => 'admin'),
        array('_with_csrf' => true)))->
        
  get('/category/index')->

  with('request')->begin()->
    isParameter('module', 'category')->
    isParameter('action', 'index')->
  end()->

  with('response')->begin()->
    isStatusCode(200)->
    checkElement('body', '!/This is a temporary page/')->
  end()
;
