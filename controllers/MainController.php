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

            default:
                self::errorPage();
        }
    }

    public static function frontPage() {

        $smarty = Utils::smartyInit();

        //styly pro frontpage jsou v main.css
        //$smarty->assign('style', 'frontPage_style');
        $smarty->display('frontPage.html');
        exit;
        
    }

    public static function moznostiVyziti() {

        $smarty = Utils::smartyInit();

        $smarty->assign('style', 'moznostiVyziti_style');
        $smarty->display('moznostiVyziti.html');
        exit;
    }


    public static function errorPage() {

        //dodelat predani chybove hlasky

        $smarty = Utils::smartyInit();
        $smarty->display('error.html');
        exit;
    }

} 