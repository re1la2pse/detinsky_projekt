<?php

class KalendarUbytovani {
    /*
     * promenná, do které se ukládá v konstruktoru první den zadaného měsíce v daném roce,
     * nebo první den aktuálního měsíce
     */
    private $datum;
    
    public function __construct()
    {
     $this->datum = ($_GET['mesic']&&$_GET['rok']) 
             ? DateTime::createFromFormat('j-n-Y', '1-'.$_GET['mesic'].'-'.$_GET['rok']) 
             : DateTime::createFromFormat('j', '1'); //vrazi datum 1-aktualni mesic-aktualni rok
    }
    
    /*
     * funkce, která vrací pole posledních dnů předchozího měsíce, než který je 
     * zadán, do prvního dne v prvním týdnů daného měsíce
     */
    private function  predchoziMesic()
    {
        $pocetDnu = $this->datum->format('N')-2;//kolik dnu je treba doplnit
        
        $predchozi = array();//pole ke vraceni
        for($i =$this->datum->modify('-1 month')->format('t') - $pocetDnu ;$i<=$this->datum->format('t');$i++ )
        {
            array_push($predchozi,'<del>'.$i.'</del>');
        }
        $this->datum->modify('+1 month');//kvuli poslednimu dnu predchozi mesice jsem snizil datum o jeden mesic, takze ho musim vratit zpet (reference)
        return $predchozi;
     }
    
     /*
     * funkce, která vrací pole prvních dnů dalšího měsíce (do konce posledního týdne
     * zadaného měsíce
     * bere hodnotu kolik dní je třeba vrátit
     */ 
    private function nadchazejiciMesic($kolikDni)
    {
       $nasledujici = array(); //pole ke vraceni
        for($i =1 ;$i<=$kolikDni;$i++ )
        {
            array_push($nasledujici,'<del>'.$i.'</del>');
        }
        return $nasledujici;   
     }
     
     /*
      * vraci udaje do GET pro odkaz na předchozí nebo následující měsíc
      */
     private function odkazy()
    {
        $odkazy = array(); //pole ke vrácení
        if ($this->datum->format('n') >1){
            $odkazy[0] = $this->datum->format('n') -1;// předchozí měsíc
            $odkazy[1] = $this->datum->format('Y');//rok předchozího měsíce
        }
        else {
            $odkazy[0] = 12;// předchozí měsíc
            $odkazy[1] = $this->datum->format('Y')-1;//rok předchozího měsíce
        }
        
        if ($this->datum->format('n') <12){
            $odkazy[2] = $this->datum->format('n') +1;// následující měsíc
            $odkazy[3] = $this->datum->format('Y');//rok následujícího měsíce
        }
        else {
            $odkazy[2] = 1;// následující měsíc
            $odkazy[3] = $this->datum->format('Y')+1;//rok následujícího měsíce
        }
        return $odkazy;
    }
    /*
     *vrací měsíc česky 
     */
    private function mesicCesky(){
        $mesice = array('leden', 'únor', 'březen', 'duben', 'květen', 'červen',
    'červenec', 'srpen', 'září', 'říjen', 'listopad', 'prosinec');
        return $mesice[$this->datum->format('n') - 1];
    }

    /*
     * funkce které to dává všechno dohromady, vkládá dny zadaného měsíce a taky zajišťuje výpis
     */
    public function zobraz(){
        $tabulka = array($this->predchoziMesic($this->datum));//vložení dnů předchozího měsíce
        
        //vkládání dnů do tabulky 
        $den = 1;//počitají se a vypisují se přes něj dny měsíce
        for($i = 0; $den<= $this->datum->format('t'); $i++ )//počítadlo pro řádky v $tabulka
        {
            for($j = count($tabulka[$i]); $j <7&&$den<= $this->datum->format('t');$j++)//počítadlo pro sloupce v $tabulka, kontroluje, jestli už není poslední den
            {
                $tabulka[$i][$j] = $den++;//vpisuje den
            }
        }
        
        //vkládá první dny následujícího měsíce
        $tabulka[count($tabulka)-1] = array_merge_recursive(
                $tabulka[count($tabulka)-1], 
                $this->nadchazejiciMesic(7-count($tabulka[count($tabulka)-1])));
        
        //vytvoření matice kvuli vypisu
        $matice = new KalendarMatice($tabulka);
        $matice = $matice->doHtmlTabulky(FALSE);//vložení do proměnné hotový výstup těla tabulky
        $odkazy = $this->odkazy();//uložení hodnot odkazů
        $nadpis = $this->mesicCesky().' '.$this->datum->format('Y');//vytvoření nadpisu - měsíc a rok
        //formátování
        return <<<EOT
<table id="calendar">
    <thead>
         <tr>
                <th><a href="rezervace?mesic=$odkazy[0]&rok=$odkazy[1]"><</a></th>
                <th colspan="5">$nadpis</th>
                <th><a href="rezervace?mesic=$odkazy[2]&rok=$odkazy[3]">></a></th>
         </tr>
         <tr>
                <th>Po</th>
                <th>Út</th>
                <th>St</th>
                <th>Čt</th>
                <th>Pá</th>
                <th>So</th>
                <th>Ne</th>                
         </tr>
    </thead>
    <tbody>
         $matice
    </tbody>
 </table>

EOT;
        
}
        
    }

?>