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

            default:
                echo "Tato stránka neexituje";
        }
    }

    public static function frontPage() {

        $smarty = Utils::smartyInit();

        $smarty->assign('style', 'frontPage_style');
        $smarty->display('frontPage.html');
        exit;
        
    }

} 