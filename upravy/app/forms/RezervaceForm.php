<?php

namespace Forms;
use Tracy\Debugger;
use Nette\Application\UI\Form;


class RezervaceForm extends BaseBT3Form {
    
    public function __construct() {
        //konstruktor
    }
    
    public function create() {
        
        $form = $this->getBootstrapForm();

	$form->addText('name', 'Název:')
            ->setRequired('Prosím vložte název.');

	$form->addDatePicker('fromDate', 'Od:')
		->setRequired('Prosím vložte datum začátku ubytování.');

	$form->addDatePicker('toDate', 'Do:')
		->setRequired('Prosím vložte datum konce ubytování.');
		
	$form->addText('email', 'E-mail:');
	   // ->addRule(Form::EMAIL, 'Zadejte platný email');
		
	$form->addText('phone', 'Telefon:');
	    //->addRule(Form::INTEGER, 'Telefon musí být číslo');
		
	$form->addText('numberOfPersons', 'Počet osob:');
	    //->addRule(Form::INTEGER, 'Hodnota počet osob musí být číslo');

	$form->addSelect('room', 'Pokoj:', array('1' => 'Pokoj bez kuchyňky pro 2 osoby',
                                             '2' => 'Apartman s kuchyňkou pro 4 osoby'))
        ->setRequired('Prosím vyberte pokoj');

    $form->addSelect('breakfast', 'Snidane:', array('1' => 'ANO',
                                                    '0' => 'NE'))
        ->setRequired('Prosím vyberte snidani');

    $form->addSelect('tasting', 'Degustace:', array('1' => 'ANO',
                                                    '0' => 'NE'))
        ->setRequired('Prosím vyberte degustaci');

	$form->addSubmit('send', 'Potvrdit');
        
        $form->onValidate[] = array($this, 'validateForm');

	return $form;
    }
    
    public function validateForm($form) {
        
        $values = $form->getValues();
        
        if ($values['fromDate'] > $values['toDate']){
            $form->addError('Datum konce nemůže být před datem začátku.');    
        }
	
	/*$currentDate = \date('Y-m-d');
	if ($values['fromDate'] < $currentDate) {
	   $form->addError('Datum začátku rezervace musí být alespoň dnešek.');     
	}*/
	
	if ($values['email'] !='' && !preg_match("/[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}/", $values['email'])){
	    $form->addError('Zadejte platný email');
	}
	
	if ($values['phone'] !='' && !preg_match("/^(\+420)? ?[1-9][0-9]{2} ?[0-9]{3} ?[0-9]{3}$/", $values['phone'])){
	    $form->addError('Zadejte platné tel. číslo');
	}
	
	if ($values['numberOfPersons'] != '' && !preg_match("/^[0-9]+$/", $values['numberOfPersons'])){
	    $form->addError('Počet osob musí být číslo');
	}
	
	
	//Debugger::dump($values['fromDate']);
	//Debugger::dump($currentDate);
    }  
}