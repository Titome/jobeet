<?php

/**
 * JobeetJob form.
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginJobeetJobForm extends BaseJobeetJobForm {
    public function configure() {
        $this->disableLocalCSRFProtection();
    }

    public function setup() {
        parent::setup();
        
        $this->removeFields();
        
        $this->widgetSchema->setLabels(array(
            'category_id'  => 'Category',
            'how_to_apply' => 'How to apply ?',
            'is_public'    => 'Public?',            
        ));
        
        $this->widgetSchema->setHelp('is_public',
                'Wheter the job can also be published on affiliate websites or not');
        
        $this->widgetSchema['type'] = new sfWidgetFormChoice(array(
            'choices'  => Doctrine_Core::getTable('JobeetJob')->getTypes(),
            'expanded' => true,
        ));
        
        $this->widgetSchema['logo'] = new sfWidgetFormInputFile(array(
            'label' => 'Company logo',
        ));
        
        $this->validatorSchema['type'] = new sfValidatorChoice(array(
            'choices' => array_keys(Doctrine_Core::getTable('JobeetJob')->getTypes()),
        ));
        
        $this->validatorSchema['logo'] = new sfValidatorFile(array(
            'required'   => false,
            'path'       => sfConfig::get('sf_upload_dir').'/jobs',
            'mime_types' => 'web_images',
        ));
        
        $this->validatorSchema['email'] = new sfValidatorAnd(array(
            $this->validatorSchema['email'],
            new sfValidatorEmail(),
        ));
        
        $this->widgetSchema->setNameFormat('job[%s]');
    }
    
    protected function removeFields() {
        unset($this['created_at'], $this['updated_at'], $this['expires_at'], $this['is_activated'],
                $this['token']);
    }
}
