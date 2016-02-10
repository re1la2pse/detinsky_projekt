<?php
/**
 * Description of Matice
 */
class KalendarMatice {
    private $matice;
    private $obsazeno;
    
    public function __construct($matice, $obsazeno) {
        $this->matice = $matice;//vložení tabulky do proměnné $matice
        $this->obsazeno = $obsazeno;
    }
    
   /*
    * vraci tabulku v html
    * $seZahlavim_bool určuje jestli to celé dát do <table></table>, nebo ne
    */ 
    public function doHtmlTabulky($seZahlavim_bool) {
        $vypis = "";
        
        if($seZahlavim_bool)
            $vypis = "<table>\n";
        
        foreach ($this->matice as $radek)
        {
            $vypis.= "\t<tr>\n\t";
            
            foreach ($radek as $sloupec)
            {
                if (in_array($sloupec, $this->obsazeno))
                    $vypis.= "\t<td class=\"obsazeno\">" . $sloupec . "</td>\n\t";
                else
                    $vypis.= "\t<td>" . $sloupec . "</td>\n\t";
                    }
            
            $vypis.= "</tr>\n";
        }
        
        if($seZahlavim_bool)
            $vypis .= "</table>\n" ;

        return $vypis;
    }
}

?>