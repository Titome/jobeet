<?php

/**
 * JobeetJobTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class JobeetJobTable extends PluginJobeetJobTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object JobeetJobTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('JobeetJob');
    }
}