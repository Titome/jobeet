<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SfGuardRememberKey', 'doctrine');

/**
 * BaseSfGuardRememberKey
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $user_id
 * @property string $remember_key
 * @property string $ip_address
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property SfGuardUser $SfGuardUser
 * 
 * @method integer            getId()           Returns the current record's "id" value
 * @method integer            getUserId()       Returns the current record's "user_id" value
 * @method string             getRememberKey()  Returns the current record's "remember_key" value
 * @method string             getIpAddress()    Returns the current record's "ip_address" value
 * @method timestamp          getCreatedAt()    Returns the current record's "created_at" value
 * @method timestamp          getUpdatedAt()    Returns the current record's "updated_at" value
 * @method SfGuardUser        getSfGuardUser()  Returns the current record's "SfGuardUser" value
 * @method SfGuardRememberKey setId()           Sets the current record's "id" value
 * @method SfGuardRememberKey setUserId()       Sets the current record's "user_id" value
 * @method SfGuardRememberKey setRememberKey()  Sets the current record's "remember_key" value
 * @method SfGuardRememberKey setIpAddress()    Sets the current record's "ip_address" value
 * @method SfGuardRememberKey setCreatedAt()    Sets the current record's "created_at" value
 * @method SfGuardRememberKey setUpdatedAt()    Sets the current record's "updated_at" value
 * @method SfGuardRememberKey setSfGuardUser()  Sets the current record's "SfGuardUser" value
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSfGuardRememberKey extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_guard_remember_key');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('user_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('remember_key', 'string', 32, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 32,
             ));
        $this->hasColumn('ip_address', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('SfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));
    }
}