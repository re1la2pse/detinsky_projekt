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
    
}