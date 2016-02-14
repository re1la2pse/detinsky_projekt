<?php

namespace Forms;

use Nette\Application\UI\Form;


class RezervaceForm extends BaseBT3Form {
    
    public function __construct() {
        //konstruktor
    }
    
    public function create() {
        
        $form = $this->getBootstrapForm();

	$form->addText('Name', 'Název:')
            ->setRequired('Prosím vložte název.');

	$form->addDatePicker('fromDate', 'Od:')
		->setRequired('Prosím vložte datum začátku ubytování.');

	$form->addDatePicker('toDate', 'Do:')
		->setRequired('Prosím vložte datum konce ubytování.');

	$form->addSubmit('send', 'Potvrdit');
        
        $form->onValidate[] = array($this, 'validateForm');

	return $form;
    }
    
    public function validateForm($form) {
        
        $values = $form->getValues();
        
        if ($values['fromDate'] > $values['toDate']){
            $form->addError('Datum konce nemůže být před datem začátku.');    
        }        
    }  
}