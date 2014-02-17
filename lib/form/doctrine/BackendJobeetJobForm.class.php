<?php

/**
 * Description of BackendJobeetJobForm
 *
 * @author girard-t
 */
class BackendJobeetJobForm extends JobeetJobForm {
    public function configure() {
        parent::configure();
        
        $this->widgetSchema['logo'] = new sfWidgetFormInputFileEditable(array(
            'label'     => 'Company logo',
            'file_src'  => '/web/uploads/jobs/'.$this->getObject()->getLogo(),
            'is_image'  => true,
            'edit_mode' => !$this->isNew(),
            'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
        ));
        
        $this->validatorSchema['logo_delete'] = new sfValidatorPass();
    }

    protected function removeFields() {
        unset($this['created_at'], $this['updated_at'], $this['token']);
    }
}
