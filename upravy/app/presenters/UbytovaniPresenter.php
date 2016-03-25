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
        
        $rezervaceId = $this->getParameter('id');

        if ($rezervaceId) {
            //Debugger::fireLog('editace');
            
            $this->rezervaceModel->updateRezervace($rezervaceId, $values);
            
            $this->flashMessage("Rezervace " . $values['name'] . " upravena");
            $this->redirect('Ubytovani:prehledRezervace');
            
        } else {
            //Debugger::fireLog('nova rezervace');
            
            $this->rezervaceModel->newRezervace($values);
            
            $this->flashMessage("Rezervace vložena");
            $this->redirect('Ubytovani:prehledRezervace');
        }
    
            
        }
    
    

    public function renderRezervace() {}

    public function actionDeleteRezervace($id) {

        $this->rezervaceModel->deleteRezervace($id);
       
        $this->flashMessage("Rezervace vymazána");
        $this->redirect('Ubytovani:prehledRezervace');
    }

    /**
     * Odchyti ajaxovy pozadavek vyvolany checkboxem checkboxZaloha
     * a updatuje rezervaci v db
     * @param $zaloha
     * @param $rezervaceId
     */
    public function handleChangeZaloha($zaloha, $rezervaceId) {

        //Debugger::fireLog($zaloha);
        //Debugger::fireLog( $rezervaceId);

        $this->rezervaceModel->updateZaloha($zaloha, $rezervaceId);
    }
    
    public function renderPrehledRezervace() {

        $this->template->rezervaceMalyPokoj = $this->rezervaceModel->getAktualRezervaceMalyPokoj();
        $this->template->rezervaceApartman = $this->rezervaceModel->getAktualRezervaceApartman();
        $this->template->currentDate = new Nette\Utils\DateTime();
        $this->template->script = "rezervaceScript";
    }
    
    public function actionEditRezervace($id) {
        
        $r = $this->rezervaceModel->getById($id);
        
        $this['rezervaceForm']->setDefaults(array('name' => $r->nazev,
                                                  'fromDate' => $r->odDatum,
                                                  'toDate' => $r->doDatum,
                                                  'email' => $r->email,
                                                  'phone' => $r->telefon,
                                                  'numberOfPersons' => $r->pocet_osob,
                                                  'room' => $r->typPokoje
                                                  ));
        
        //Debugger::fireLog($rezervace);
        
        
    }
    
    public function renderEditRezervace($id) {
        
        $this->template->nameRezervace = $this->rezervaceModel->getNameById($id);
        
        Debugger::fireLog($this->rezervaceModel->getNameById($id));
    }

}