<?php
/**
 * Created by PhpStorm.
 * User: Petr Mokrusa
 * Date: 15.9.15
 * Time: 20:39
 */

class MainController {

    public static function dispatch($path) {

        $p = array_shift($path);
       // echo "obsah p: " . $p . "<br />";

        switch ($p) {
            case "":
                self::frontPage();
            break;

            case "error":
                self::errorPage();
            break;

            case "moznostiVyziti":
                self::moznostiVyziti();
            break;
        
            case "galerie":
                self::galerie();
            break;
        
            case "ubytovani":
                self::ubytovani();
            break;
        
            case "vinarstvi":
                self::vinarstvi();
            break;

            case "rezervace":
                self::rezervace();
            break;

            case "kontakt":
                self::kontakt();
            break;
            
            case "degustace":
                self::degustace();
            break;

            //odesilani kontaktniho formulare
            case "contactForm":
                self::contactForm();
            break;

            case "rezervaceForm":
                self::rezervaceForm();
            break;

            default:
                self::errorPage();
        }
    }

    public static function frontPage() {

        $smarty = Utils::smartyInit();

        
        
        
        $smarty->assign('aktuality', AktualityModel::getLast3());
        
        //styly pro frontpage jsou v main.css
        //$smarty->assign('style', 'frontPage_style');
        $smarty->assign('js_script', "contact");
        $smarty->display('frontPage.html');
        exit;
        
    }

    public static function moznostiVyziti() {

        $smarty = Utils::smartyInit();

        $smarty->assign('style', 'moznostiVyziti_style');
        $smarty->display('moznostiVyziti.html');
        exit;
    }
    
    public static function galerie() {
        
        $smarty = Utils::smartyInit();
        
        $smarty->assign('style', 'galerie_style');
        $smarty->assign('photos', GalerieModel::getGalerie());
        $smarty->assign('galerie', true);
        $smarty->display('galerie.html');
    }
    
    public static function ubytovani() {
        
        $smarty = Utils::smartyInit();
        
        $smarty->assign('style', 'ubytovani_style');
        $smarty->display('ubytovani.html');
    }
    
    public static function vinarstvi() {
        
        $smarty = Utils::smartyInit();
        
        $smarty->assign('style', 'vinarstvi_style');
        $smarty->display('vinarstvi.html');
    }

    public static function rezervace() {

        error_reporting(E_ALL ^ E_NOTICE);//všechna chybová hlášení kromě notice
        $smarty = Utils::smartyInit();
        
        $kalendarMalyPokoj = new KalendarUbytovani(1);
        $smarty->assign('kalendarMalyPokoj', $kalendarMalyPokoj->zobraz());

        $kalendarApartman = new KalendarUbytovani(2);
        $smarty->assign('kalendarApartman', $kalendarApartman->zobraz());

        //$smarty->assign('pom', RezervaceModel::getBusyDay(2, 2016));

        $smarty->assign('style', 'rezervace_style');
        $smarty->assign('js_script', 'rezervace');
        $smarty->display('rezervace.html');
    }

    public static function kontakt() {

        $smarty = Utils::smartyInit();

        $smarty->assign('style', 'kontakt_style');
        $smarty->assign('js_script', 'contact');
        $smarty->display('kontakt.html');
    }
    
    public static function degustace() {

        $smarty = Utils::smartyInit();

        $smarty->assign('style', 'degustace_style');
        $smarty->display('degustace.html');
    }
    

    public static function errorPage() {

        //dodelat predani chybove hlasky

        $smarty = Utils::smartyInit();
        $smarty->display('error.html');
        exit;
    }

    /**
     * Odesila kontaktni formular
     */
    public static function contactForm() {

        $mail = new PHPMailer();
        $mail->CharSet = 'UTF-8';

        //sanitize dat z formulare.
        //kontrola mailu a tel. cisla na spravny tvar je v js, tady to nekontroluju
        //nebo bych měl???
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
        $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

        $mail->From = $email;
        $mail->FromName = $name;
        $mail->AddAddress("petr.mokrusa@centrum.cz");

        $mail->IsHTML(true);
        $mail->Subject = "Zárybnický sklípek - kontaktní formulář";
        $mail->Body = "<h3>Zpráva z kontaktního formuláře:</h3>
                       <p>" . $message . "</p>
                       <p>" . $name . "</p>
                       <p>tel.: " . $phone . "</p>";

        $mail->AltBody =  $message . "\n" . $name . "\n tel.: " . $phone;

        if ($mail->send()) {
            echo "ok";
        } else {
            echo "error: " . $mail->ErrorInfo;
        }
        exit;
    }

    /**
     * Odesila rezervacni formular
     */
    public static function rezervaceForm() {

        $mail = new PHPMailer();
        $mail->CharSet = 'UTF-8';

        $jmeno = filter_var($_POST['jmeno'], FILTER_SANITIZE_STRING);
        $prijmeni = filter_var($_POST['prijmeni'], FILTER_SANITIZE_STRING);
        $tel = filter_var($_POST['tel'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $pocetOsob = filter_var($_POST['pocetOsob'], FILTER_SANITIZE_STRING);
        $datumPrijezdu = filter_var($_POST['datumPrijezdu'], FILTER_SANITIZE_STRING);
        $datumOdjezdu = filter_var($_POST['datumOdjezdu'], FILTER_SANITIZE_STRING);
        $typPokoje = filter_var($_POST['typPokoje'], FILTER_SANITIZE_STRING);
        $snidane = filter_var($_POST['snidane'], FILTER_SANITIZE_STRING);
        $degustace = filter_var($_POST['degustace'], FILTER_SANITIZE_STRING);

        $mail->From = $email;
        $mail->FromName = $jmeno;
        $mail->AddAddress("petr.mokrusa@centrum.cz");

        $mail->IsHTML(true);
        $mail->Subject = "Zárybnický sklípek - rezervační formulář";
        $mail->Body = "<h3>Zpráva z rezervačního formuláře:</h3>
                       <p> Jméno: " . $jmeno . "</p>
                       <p> Přijmení: " . $prijmeni . "</p>
                       <p> Telefon: " . $tel . "</p>
                       <p> Email: " . $email . "</p>
                       <p> Počet osob: " . $pocetOsob . "</p>
                       <p> Datum příjezdu: " . $datumPrijezdu . "</p>
                       <p> Datum odjezdu: " . $datumOdjezdu . "</p>
                       <p> Typ Pokoje: " . ($typPokoje == 1) ? "pokoje bez kuchyňky" : "apartmán s kuchyňkou" . "</p>
                       <p> snidane: " . $snidane . "</p>
                       <p> degustace: " . $degustace . "</p>";


        $mail->AltBody ="Zpráva z rezervačního formuláře: \n
                        Jméno: " . $jmeno . "\n
                        Přijmení: " . $prijmeni . "\n
                        Telefon: " . $tel . "\n
                        Email: " . $email . "\n
                        Počet osob: " . $pocetOsob . "\n
                        Datum příjezdu: " . $datumPrijezdu . "\n
                        Datum odjezdu: " . $datumOdjezdu . "\n
                        Typ Pokoje: " . ($typPokoje == 1) ? "pokoje bez kuchyňky" : "apartmán s kuchyňkou" . "\n
                        snidane: " . $snidane . "\n
                        degustace: " . $degustace . "\n";

        if ($mail->send()) {
            echo "ok";
        } else {
            echo "error: " . $mail->ErrorInfo;
        }
        exit;
    }

} 