<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('JobeetCategoryAffiliate', 'doctrine');

/**
 * BaseJobeetCategoryAffiliate
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $category_id
 * @property integer $affiliate_id
 * @property JobeetAffiliate $JobeetAffiliate
 * @property JobeetCategory $JobeetCategory
 * 
 * @method integer                 getCategoryId()      Returns the current record's "category_id" value
 * @method integer                 getAffiliateId()     Returns the current record's "affiliate_id" value
 * @method JobeetAffiliate         getJobeetAffiliate() Returns the current record's "JobeetAffiliate" value
 * @method JobeetCategory          getJobeetCategory()  Returns the current record's "JobeetCategory" value
 * @method JobeetCategoryAffiliate setCategoryId()      Sets the current record's "category_id" value
 * @method JobeetCategoryAffiliate setAffiliateId()     Sets the current record's "affiliate_id" value
 * @method JobeetCategoryAffiliate setJobeetAffiliate() Sets the current record's "JobeetAffiliate" value
 * @method JobeetCategoryAffiliate setJobeetCategory()  Sets the current record's "JobeetCategory" value
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJobeetCategoryAffiliate extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('jobeet_category_affiliate');
        $this->hasColumn('category_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('affiliate_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('JobeetAffiliate', array(
             'local' => 'affiliate_id',
             'foreign' => 'id'));

        $this->hasOne('JobeetCategory', array(
             'local' => 'category_id',
             'foreign' => 'id'));
    }
}