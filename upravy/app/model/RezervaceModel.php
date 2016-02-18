<?php

namespace App\Model;

use Nette;
use Tracy\Debugger;

class RezervaceModel extends Nette\Object
{
    private $db;

    public function __construct(Nette\Database\Context $database)
    {
        $this->db = $database;
    }

    public function newRezervace($values) {

        //rezervace se muzou prekryvat, vice ubytovanych ve stejny cas

        $this->db->table('rezervace')->insert(array(
            'nazev' => $values['name'],
            'odDatum' => $values['fromDate']->format('Y-m-d'),
            'doDatum' => $values['toDate']->format('Y-m-d')
        ));
    }

    public function getAktualRezervace() {

        $currentDate = new Nette\Utils\DateTime();

        $rezervace = $this->db->table('rezervace')->where('doDatum >= ?', $currentDate->format('Y-m-d'))->order('doDatum');

        return $rezervace;
    }

}