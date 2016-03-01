<?php
/**
 * Created by PhpStorm.
 * User: Peta
 * Date: 4.11.15
 * Time: 19:21
 */

namespace Forms;

use Nette\Application\UI\Form;


class UploadPictureForm extends BaseBT3Form
{
    public function __construct()
    {
        //konstruktor
    }

    public function create()
    {
        $form = $this->getBootstrapForm();

        $form->addMultiUpload('pictures', 'Vyber fotky: ')
            ->addRule($form::IMAGE, 'Fotky musí být ve formátu JPEG, PNG nebo GIF.')
            ->addRule(Form::MAX_FILE_SIZE, 'Soubor je příliš velký! Povolená velikost je 2M.', 3 * 1024 * 1024)
            ->setRequired('Vyberte prosím fotky.');

        $form->addSubmit('send', 'Nahrát');

        $form->getElementPrototype()->onsubmit('style = cursor:wait');

        return $form;

    }
}