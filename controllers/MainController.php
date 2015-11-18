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

        switch ($p) {
            case "":
                self::frontPage();
            break;

            case "error":
                self::errorPage();
            break;

            default:
                echo "Tato stránka neexituje";
        }
    }

    public static function frontPage() {

        $smarty = Utils::smartyInit();

        //styly pro frontpage jsou v main.css
        //$smarty->assign('style', 'frontPage_style');
        $smarty->display('frontPage.html');
        exit;
        
    }

    public static function errorPage() {

        //dodelat predani chybove hlasky

        $smarty = Utils::smartyInit();
        $smarty->display('error.html');
        exit;
    }

} 