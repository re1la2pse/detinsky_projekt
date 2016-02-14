<?php

namespace App\Presenters;

use Nette;
use Forms;
use Tracy\Debugger;
use Tracy;
use App\Model\RezervaceModel;

class UbytovaniPresenter extends BasePresenter
{
    /**
     * @inject
     * @var RezervaceModel
     */
    public $rezervaceModel;
    

    protected function createComponentRezervaceForm() {
        
        $form = (new Forms\RezervaceForm())->create();
        $form->onSuccess[] = array($this, 'rezervaceFormSuccess');
        return $form;
    }
    
    public function rezervaceFormSuccess(Nette\Forms\Form $form) {
        
    }

    public function renderRezervace() {

    }

}