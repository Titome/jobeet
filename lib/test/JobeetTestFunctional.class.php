<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JobeetTestFunctional
 *
 * @author girard-t
 */
class JobeetTestFunctional extends sfTestFunctional {
    public function loadData() {
        Doctrine_Core::loadData(sfConfig::get('sf_test_dir').'/fixtures');
        
        return $this;
    }
    
    public function getMostRecentProgrammingJob() {
        $q = Doctrine_Query::create()
            ->select('j.*')
            ->from('JobeetJob j')
            ->leftJoin('j.JobeetCategory c')
            ->where('c.slug = ?', 'programming');
        $q = Doctrine_Core::getTable('JobeetJob')->addActiveJobsQuery($q);

        return $q->fetchOne();
    }
}
