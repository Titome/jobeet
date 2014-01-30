<?php

/**
 * JobeetAffiliate filter form base class.
 *
 * @package    jobeet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJobeetAffiliateFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'url'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'token'                  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_active'              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'jobeet_categories_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'JobeetCategory')),
    ));

    $this->setValidators(array(
      'url'                    => new sfValidatorPass(array('required' => false)),
      'email'                  => new sfValidatorPass(array('required' => false)),
      'token'                  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_active'              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'jobeet_categories_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'JobeetCategory', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jobeet_affiliate_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function add
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Call Stack:
    0.0010     126752   1. {main}() C:\xampp\htdocs\jobeet\symfony:0
    0.0040     314168   2. include('C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\command\cli.php') C:\xampp\htdocs\jobeet\symfony:14
    0.3220    3982984   3. sfSymfonyCommandApplication->run() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\command\cli.php:20
    0.3460    3986728   4. sfTask->runFromCLI() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\command\sfSymfonyCommandApplication.class.php:76
    0.3480    3987944   5. sfBaseTask->doRun() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\task\sfTask.class.php:97
    0.3700    4365176   6. sfDoctrineBuildTask->execute() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\task\sfBaseTask.class.php:68
    4.7120    8063104   7. sfTask->run() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\task\sfDoctrineBuildTask.class.php:182
    4.7130    8065416   8. sfBaseTask->doRun() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\task\sfTask.class.php:173
    4.7170    8066592   9. sfDoctrineBuildFiltersTask->execute() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\task\sfBaseTask.class.php:68
    4.7210    8069880  10. sfGeneratorManager->generate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\task\sfDoctrineBuildFiltersTask.class.php:64
    4.7270    8131840  11. sfDoctrineFormFilterGenerator->generate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfGeneratorManager.class.php:113
    4.7890    8134672  12. sfGenerator->evalTemplate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\generator\sfDoctrineFormFilterGenerator.class.php:92
    4.7900    8177872  13. require('C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineFormFilter\default\template\sfDoctrineFormFilterGeneratedTemplate.php') C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfGenerator.class.php:84
    4.8450    8178880  14. sfInflector::camelize() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineFormFilter\default\template\sfDoctrineFormFilterGeneratedTemplate.php:45
    4.8450    8179248  15. sfToolkit::pregtr() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\util\sfInflector.class.php:32
    4.8450    8179824  16. preg_replace() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php:362


Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Call Stack:
    0.0010     126752   1. {main}() C:\xampp\htdocs\jobeet\symfony:0
    0.0040     314168   2. include('C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\command\cli.php') C:\xampp\htdocs\jobeet\symfony:14
    0.3220    3982984   3. sfSymfonyCommandApplication->run() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\command\cli.php:20
    0.3460    3986728   4. sfTask->runFromCLI() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\command\sfSymfonyCommandApplication.class.php:76
    0.3480    3987944   5. sfBaseTask->doRun() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\task\sfTask.class.php:97
    0.3700    4365176   6. sfDoctrineBuildTask->execute() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\task\sfBaseTask.class.php:68
    4.7120    8063104   7. sfTask->run() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\task\sfDoctrineBuildTask.class.php:182
    4.7130    8065416   8. sfBaseTask->doRun() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\task\sfTask.class.php:173
    4.7170    8066592   9. sfDoctrineBuildFiltersTask->execute() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\task\sfBaseTask.class.php:68
    4.7210    8069880  10. sfGeneratorManager->generate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\task\sfDoctrineBuildFiltersTask.class.php:64
    4.7270    8131840  11. sfDoctrineFormFilterGenerator->generate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfGeneratorManager.class.php:113
    4.7890    8134672  12. sfGenerator->evalTemplate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\generator\sfDoctrineFormFilterGenerator.class.php:92
    4.7900    8177872  13. require('C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineFormFilter\default\template\sfDoctrineFormFilterGeneratedTemplate.php') C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfGenerator.class.php:84
    4.8450    8178880  14. sfInflector::camelize() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineFormFilter\default\template\sfDoctrineFormFilterGeneratedTemplate.php:45
    4.8450    8179248  15. sfToolkit::pregtr() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\util\sfInflector.class.php:32
    4.8450    8179824  16. preg_replace() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php:362

JobeetCategoriesListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.JobeetCategoryAffiliate JobeetCategoryAffiliate')
      ->andWhereIn('JobeetCategoryAffiliate.category_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'JobeetAffiliate';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'url'                    => 'Text',
      'email'                  => 'Text',
      'token'                  => 'Boolean',
      'is_active'              => 'Boolean',
      'created_at'             => 'Date',
      'updated_at'             => 'Date',
      'jobeet_categories_list' => 'ManyKey',
    );
  }
}
