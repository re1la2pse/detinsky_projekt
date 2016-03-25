<?php

namespace App\Model;

use Nette;
use Tracy\Debugger;

class RezervaceModel extends Nette\Object
{
    const MALY_POKOJ = 1;
    const APARTMAN = 2;

    private $db;

    public function __construct(Nette\Database\Context $database)
    {
        $this->db = $database;
    }

    /**
     * Zalozi novou rezervaci
     * @param $values
     */
    public function newRezervace($values) {

        //rezervace se muzou prekryvat, vice ubytovanych ve stejny cas

        $this->db->table('rezervace')->insert(array(
            'nazev' => $values['name'],
            'odDatum' => $values['fromDate']->format('Y-m-d'),
            'doDatum' => $values['toDate']->format('Y-m-d'),
            'email' => $values['email'],
            'telefon' => $values['phone'],
            'pocet_osob' => $values['numberOfPersons'],
            'typPokoje' => $values['room']
        ));
    }

    /**
     * Vrati aktualne probihajici rezervace pro maly pokoj (1)
     * @return Nette\Database\Table\Selection
     */
    public function getAktualRezervaceMalyPokoj() {

        $currentDate = new Nette\Utils\DateTime();

        $rezervace = $this->db->table('rezervace')->where('doDatum >= ? AND typPokoje = ?', $currentDate->format('Y-m-d'), self::MALY_POKOJ)->order('odDatum');

        return $rezervace;
    }

    /**
     * Vrati aktualne probihajici rezervace pro apartman (2)
     * @return Nette\Database\Table\Selection
     */
    public function getAktualRezervaceApartman() {

        $currentDate = new Nette\Utils\DateTime();

        $rezervace = $this->db->table('rezervace')->where('doDatum >= ? AND typPokoje = ?', $currentDate->format('Y-m-d'), self::APARTMAN)->order('odDatum');

        return $rezervace;
    }

    /**
     * Smaze rezervaci na zaklade id
     * @param $id
     */
    public function deleteRezervace($id) {
        
        $this->db->table('rezervace')->where('id', $id)->delete();
    }

    /**
     * Updatuje u rezervace pole zaloha
     * @param $zaloha
     * @param $idRezervace
     */
    public function updateZaloha($zaloha, $idRezervace) {

        $this->db->table('rezervace')->where('id', $idRezervace)->update(array('zaloha' => $zaloha));
    }
    
    /**
     * Vraci nazev dane rezervace
     */
    public function getNameById($idRezervace) {
        
        $rezervace = $this->db->table('rezervace')->where('id', $idRezervace)->fetch();
        
        return $rezervace->nazev;
    }
    
    /**
     * Vraci danou rezervaci podle id
     */
    public function getById($idRezervace) {
        
        return $this->db->table('rezervace')->where('id', $idRezervace)->fetch();
    }
    
    /*
     * Aktualizuje rezervaci
     */
    public function updateRezervace($idRezervace, $values) {
        
        $this->db->table('rezervace')->where('id', $idRezervace)->update(array(
                            'nazev' => $values['name'],
                            'odDatum' => $values['fromDate']->format('Y-m-d'),
                            'doDatum' => $values['toDate']->format('Y-m-d'),
                            'email' => $values['email'],
                            'telefon' => $values['phone'],
                            'pocet_osob' => $values['numberOfPersons'],
                            'typPokoje' => $values['room']
                            ));
    }

}