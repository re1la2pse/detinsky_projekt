<?php

class RezervaceModel {

    /**
     * Vrácí číselné pole obsazených dnů v daném měsíci
     * @param $month - číslo
     * @param $year - rok ve tvaru YYYY
     */
    public static function getBusyDay($month, $year) {

        //pripravim si dotaz do databaze
        if($month == 12) {
            $nextMonth = "01";
            $yearD1 = $year + 1;
        } else {
            $yearD1 = $year;
            $nextMonth = ($month < 9) ? ("0" . ($month+1)) : ($month+1);
        }

        $d1 = $yearD1 . "-" . $nextMonth . "-01";
        $d2 = $year . "-" . (($month < 10) ? ("0") : "") . $month . "-01";
        
        $pdo = Db_Data::getPDO();

        //vyberu jen ty zaznamy, ktere se tykaji daneho mesice
        $sql = "SELECT * from rezervace WHERE odDatum <:d1 AND doDatum >= :d2";

        $q = $pdo->prepare($sql);
        $q->execute(array(":d1" => $d1, ":d2" => $d2));

        $rezervace =  $q->fetchAll(); //rezervace pro dany mesic

        //print_r($rezervace);
        
        //hraniční datumy daneho měsíce
        $firstDay = date($year . "-" . (($month < 10) ? ("0") : "") . $month . "-01");
        $lastDay = date($year . "-" . (($month < 10) ? ("0") : "") . $month . "-" . self::getNumberOfDays($month));

        //sestavim pole obsazených dnu
        $busyDays = array();
        foreach ($rezervace as $r) {

            $fromDate = date($r['odDatum']);
            $toDate = date($r['doDatum']);
            
            $begin = (int)explode('-', $fromDate)[2]; //zacatek rezervace (cislo dne)
            $end = (int)explode('-', $toDate)[2]; // konec rezervace

            //1. - uvnitr daneho mesice
            if (($fromDate >= $firstDay && $fromDate <= $lastDay) && ($toDate <= $lastDay && $toDate >= $firstDay)) {
                
                for ($i=$begin; $i<=$end; $i++) {
                    $busyDays[$i] = $i;
                }
            } else
            
            //2. - cast mesice ze zacatku (zacatek mimo)
            if ($fromDate < $firstDay && ($toDate >= $firstDay && $toDate <= $lastDay)) {
              
                for ($i=1; $i<=$end; $i++) {
                    $busyDays[$i] = $i;
                }
                
            } else
            
            //3. - cast mesice - konec (konec mimo)
            if (($fromDate >= $firstDay && $fromDate <= $lastDay) && $toDate > $lastDay) {
                
                for ($i=$begin; $i<=self::getNumberOfDays($month); $i++) {
                    $busyDays[$i] = $i;
                }
                
            } else
            
            //4. cely mesic (zacatek a konec mimo)
            if ($fromDate < $firstDay && $toDate > $lastDay) {
                
                for ($i=1; $i<=self::getNumberOfDays($month); $i++) {
                    $busyDays[$i] = $i;
                }
            }
        }
        
         //print_r($busyDays);
         return $busyDays;
    }

    /**
     * Vratí počet dnů daného měsíce
     * počítá i s přestupným rokem pro únor
     * @param $month
     */
    public static function getNumberOfDays($month) {

        $months = array(1 => 31,
                       2 => 28,
                       3 => 31,
                       4 => 30,
                       5 => 31,
                       6 => 30,
                       7 => 31,
                       8 => 31,
                       9 => 30,
                       10 => 31,
                       11 => 30,
                       12 => 31);

        if (($month == 2) && (date("Y")%4 == 0) ) {
            return 29;
        }

        return $months[$month];
    }
}