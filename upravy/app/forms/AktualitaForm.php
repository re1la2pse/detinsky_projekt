<?php

namespace Forms;
use Tracy\Debugger;
use Nette\Application\UI\Form;

class AktualitaForm extends BaseBT3Form {
    
    public function create() {
        
        $form = $this->getBootstrapForm();
        
        $form->addText('name', 'Název aktuality')
            ->setRequired('Zadejte název aktuality');
            
        $form->addTextArea('text', 'Text aktuality')
             ->setRequired('Zadejte text aktuality');
             
        $form->addSubmit('send', 'Potvrdit');
        
        $form->onValidate[] = array($this, 'validateForm');

	return $form;
    }
    
    public function validateForm($form) {
        
    }
}
