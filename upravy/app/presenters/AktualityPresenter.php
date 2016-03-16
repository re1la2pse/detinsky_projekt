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

        $this->aktualityModel->newAktualita($values);

        $this->flashMessage("Aktualita vložena");
        $this->redirect('Aktuality:prehledAktualit');

    }

    public function renderNovaAktualita() {

    }

    public function renderPrehledAktualit() {

        $this->template->aktuality = $this->aktualityModel->getAll();
    }

    public function actionDelete($id) {
        $this->aktualityModel->delete($id);

        $this->flashMessage("Aktualita vymazána");
        $this->redirect('Aktuality:prehledAktualit');
    }



}