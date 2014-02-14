<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new JobeetTestFunctional(new sfBrowser());

$browser->
    info('1 - Web service security')->
        
    info('  1.1 - A token is needed to access the service')->
    get('/api/foo/jobs.xml')->

    with('request')->begin()->
        isParameter('module', 'api')->
        isParameter('action', 'index')->
    end()->

    with('response')->begin()->
        isStatusCode(200)->
        checkElement('body', '!/This is a temporary page/')->
    end()
;
