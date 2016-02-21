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
        $values = $form->getValues();

        //Debugger::dump($values['fromDate']->format('Y-m-d'));

        $this->rezervaceModel->newRezervace($values);
        
        $this->flashMessage("Rezervace vložena");
        $this->redirect('Ubytovani:prehledRezervace');
    }

    public function renderRezervace() {

        //$rezervace = $this->rezervaceModel->getAktualRezervace();

        //$this->template->rezervace = $rezervace;

        /*foreach($rezervace as $r) {
            Debugger::dump($r['nazev']);
        }*/

    }

    public function actionDeleteRezervace($id) {

        //Debugger::dump($id);
       // Debugger::fireLog($id); // vypíšeme řetězec do konzoly Firebugu

        $this->rezervaceModel->deleteRezervace($id);
       
        $this->flashMessage("Rezervace vymazána");
        $this->redirect('Ubytovani:prehledRezervace');
    }
    
    public function renderPrehledRezervace() {
        
        $rezervace = $this->rezervaceModel->getAktualRezervace();

        $this->template->rezervace = $rezervace;
        $this->template->currentDate = new Nette\Utils\DateTime();
    }

}