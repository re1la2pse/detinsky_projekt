<?php

class AktualityModel {
    
    public static function getLast3() {
        
        $pdo = Db_Data::getPDO();
        
        $sql = "SELECT * FROM aktuality ORDER BY id DESC LIMIT 3";
        
        $q = $pdo->prepare($sql);
        $q->execute();

        return $q->fetchAll(); //posledni tri aktuality
    }
}
