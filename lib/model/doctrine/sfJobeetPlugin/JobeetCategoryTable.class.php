<?php

/**
 * JobeetCategoryTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class JobeetCategoryTable extends PluginJobeetCategoryTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object JobeetCategoryTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('JobeetCategory');
    }
}