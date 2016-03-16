<?php

namespace App\Model;

use Nette;
use Tracy\Debugger;

class AktualityModel extends Nette\Object
{
    private $db;

    public function __construct(Nette\Database\Context $database)
    {
        $this->db = $database;
    }

    /**
     * Vlozi novou rezervaci do db
     */
    public function newAktualita($values) {

        //Debugger::dump($values);

        $this->db->table('aktuality')->insert(array(
            'nazev' => $values['name'],
            'text' => $values['text']
        ));
    }

    /**
     * Vraci vsechny aktuality ulozene v db
     * @return Nette\Database\Table\Selection
     */
    public function getAll() {

        return $this->db->table('aktuality');
    }

    /**
     * Smaze aktualitu podle id
     * @param $id
     */
    public function delete($id) {

        $this->db->table('aktuality')->where('id', $id)->delete();
    }

}