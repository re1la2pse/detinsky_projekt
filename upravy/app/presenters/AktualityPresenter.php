<?php

namespace App\Presenters;

use Nette;
use Forms;
use Tracy\Debugger;
use Tracy;
use App\Model\AktualityModel;

class AktualityPresenter extends BasePresenter
{

    /**
     * @inject
     * @var AktualityModel
     */
    public $aktualityModel;

    protected function createComponentAktualityForm() {

        $form = (new Forms\AktualityForm)->create();
        $form->onSuccess[] = array($this, 'aktualityFormSuccess');

        return $form;
    }

    public function aktualityFormSuccess(Nette\Forms\Form $form) {
        $values = $form->getValues();
        
        
        $aktualitaId = $this->getParameter('id');

        if ($aktualitaId) {
            //Debugger::fireLog('editace');
            
            $this->aktualityModel->updateAktuality($aktualitaId, $values);
            
            $this->flashMessage("aktualita " . $values['name'] . " byla upravena");
            $this->redirect('Aktuality:prehledAktualit');
            
        } else {

            $this->aktualityModel->newAktualita($values);
    
            $this->flashMessage("Aktualita vložena");
            $this->redirect('Aktuality:prehledAktualit');
        }

    }

    public function renderNovaAktualita() {

    }

    public function renderPrehledAktualit() {

        $this->template->aktuality = $this->aktualityModel->getLast3();
        $this->template->script = "aktualityScript";
    }

    public function actionDelete($id) {
        $this->aktualityModel->delete($id);

        $this->flashMessage("Aktualita vymazána");
        $this->redirect('Aktuality:prehledAktualit');
    }
    
    public function handleChangeAktivni($aktivni, $aktualitaId) {
        
        //Debugger::fireLog($aktivni);
        //Debugger::fireLog($aktualitaId);
        
        $this->aktualityModel->setAktivita($aktivni, $aktualitaId);
        
    }
    
    public function actionEdit($id) {
        
        $aktualita = $this->aktualityModel->getById($id);
        
        $this['aktualityForm']->setDefaults(array('name' => $aktualita->nazev,
                                                  'text' => $aktualita->text
                                                  ));
    }
    
    public function renderEdit() {
        
        Debugger::dump("edit ");
    }



}