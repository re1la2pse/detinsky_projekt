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

        $this->rezervaceModel->newRezervace($values);
        
        $this->flashMessage("Rezervace vložena");
        $this->redirect('Ubytovani:prehledRezervace');
    }

    public function renderRezervace() {

        /*foreach($rezervace as $r) {
            Debugger::dump($r['nazev']);
        }*/

    }

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

}