<?php

class RezervaceModel {

    /**
     * Vrácí číselné pole obsazených dnů v daném měsíci
     * @param $month - číslo
     * @param $year - rok ve tvaru YYYY
     */
    public static function getBusyDay($month, $year) {

        if($month == 12) {
            $nextMonth = "01";
            $yearD1 = $year + 1;
        } else {
            $yearD1 = $year;
            $nextMonth = ($month < 9) ? ("0" . ($month+1)) : ($month+1);
        }

        $d1 = $yearD1 . "-" . $nextMonth . "-01";

        $d2 = $year . "-" . (($month < 10) ? ("0") : "") . $month . "-01";

        echo "###" . $d1 . "###";
        echo "###" . $d2 . "###";

        $pdo = Db_Data::getPDO();

        $sql = "SELECT * from rezervace WHERE odDatum <:d1 AND doDatum >= :d2";

        $q = $pdo->prepare($sql);
        $q->execute(array(":d1" => $d1, ":d2" => $d2));

        $rezervace =  $q->fetchAll(); //rezervace pro dany mesic

        print_r($rezervace);

        $busyDays = array();
        foreach ($rezervace as $r) {

            $fromDate = date($r['odDatum']);
            $toDate = date($r['doDatum']);

            echo "od " . $fromDate . " do " . $toDate . "<br />";

            if ($monthFrom == $month && $monthTo == $month) { //zacatek i konec v jednom mesici


            }
        }

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