<?php /* Smarty version 3.1.27, created on 2015-10-28 08:59:43
         compiled from "templates\massages.html" */ ?>
<?php
/*%%SmartyHeaderCode:261665630806fbc9480_69093044%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4e177729c35371fc00816ffc1c0652332e12d40' => 
    array (
      0 => 'templates\\massages.html',
      1 => 1446019181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261665630806fbc9480_69093044',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5630806fcb9eb2_43644681',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5630806fcb9eb2_43644681')) {
function content_5630806fcb9eb2_43644681 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '261665630806fbc9480_69093044';
echo $_smarty_tpl->getSubTemplate ('inc/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php $_smarty_tpl->_capture_stack[0][] = array('priceTable', null, null); ob_start(); ?>
    <div class="row priceTable">
        <div class="col-lg-10 col-lg-offset-1">
            <hr />
            <!--<table class="table-bordered">
                <thead>
                <tr>
                    <td>30 min.</td>
                    <td>60 min.</td>
                    <td>90 min.</td>
                    <td>120 min.</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>100 Kč.</td>
                    <td>200 Kč.</td>
                    <td>300 Kč.</td>
                    <td>400 Kč.</td>
                </tr>
                </tbody>
            </table>-->
            <div class="price">
                <h3><span>60 minut:</span> 400Kč</h3>
            </div>
        </div>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="content">

    <div class="container section">
        <div class="row">
            <div id="left_menu" class="col-lg-3 left_column">

                    <h4>Rekondiční masáže:</h4>
                    <ul id="rekondicniMasazeMenu" class="no_list_style">
                        <li id="rekondicni1">Klasická masáž</li>
                        <!--<li>Deep Tissue masáž</li>-->
                        <li id="rekondicni2">Baňková masáž</li>
                        <li id="rekondicni3">Dornova terapie + Breussova masáž</li>
                        <li id="rekondicni4">Reflexní terapie chodidel</li>
                    </ul>

                    <h4>Relaxační masáže:</h4>
                    <ul id="relaxacniMasazeMenu" class="no_list_style">
                        <li id="relaxacni1">Havajská masáž LOMI LOMI</li>
                        <li id="relaxacni2">Indická masáž Abhyanga</li>
                        <li id="relaxacni3">Indonéská Bali masáž</li>
                        <li id="relaxacni4">Masáž lávovými kameny</li>
                        <li id="relaxacni5">Thajská olejová masáž</li>
                        <li id="relaxacni6">Thajská masáž nohou</li>
                        <li id="relaxacni7">Australská masáž KODO</li>
                    </ul>

                    <h4>Přístrojové masáže:</h4>
                    <ul id="pristrojoveMasazeMenu" class="no_list_style">
                        <li id="pristrojove1">Vacupress Niodé III</li>
                        <li id="pristrojove2">Lifting obličeje Vacupress Niodé III</li>
                        <li id="pristrojove3">Lymfatické kalhoty Pneuven</li>
                    </ul>

                    <h4>Detoxikační masáže:</h4>
                    <ul id="detoxikacniMasazeMenu" class="no_list_style">
                        <li id="detoxikacni1">Medová masáž</li>
                        <li id="detoxikacni2">Čokoládová masáž</li>
                        <li id="detoxikacni3">Anticelulitidní masáž</li>
                        <li id="detoxikacni4">Lymfatická masáž</li>
                    </ul>

                    <h4>Speciální péče:</h4>
                    <ul id="specialniMasazeMenu" class="no_list_style">
                        <li id="specialni1">Moxování</li>
                        <li id="specialni2">Tygrování</li>
                        <li id="specialni3">Lávové kameny</li>
                        <li id="specialni4">Tělové svítící TADÉ</li>
                    </ul>

            </div>

            <div class="col-lg-9 right_column">

                    <!---------- REKONDICNI MASAZE ---------->

                        <div id="rekondicni1m" class="massage 1m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/rekondicni/rekondicni_1.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>KLASICKÁ MASÁŽ</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Klasická masáž způsobuje značné prokrvení především svalového a vazivového aparátu,
                                        čímž dochází k jeho uvolnění. Blahodárný účinek se projeví na kůži, svalstvu a jeho úponech,
                                        kloubech a dále v krevním oběhu, lymfatickém systému, dýchacích cestách, nervovém systému nebo
                                        na činnosti vnitřních orgánů. Provádí se s přiměřenou intenzitou, s ohledem k potřebám zákazníka
                                        a s možností zaměřit se na problematické partie. Velmi častá je částečná masáž konkrétních
                                        partií, které vyžadují péči – nejčastěji záda a šíje (bolesti zad a krční páteře jsou v
                                        současné době asi nejčastější ze všech pohybových obtíží).
                                    </p>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>

                        <div id="rekondicni2m" class="massage 2m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/rekondicni/rekondicni_2.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>BAŇKOVÁ MASÁŽ</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Baňková masáž pomáhá při bolestech zad a kloubů. Velmi snadno uvolňuje spasmy a
                                        zároveň se vyznačuje silným detoxikačním účinkem. Při lokální aplikaci se buňky
                                        pokládají na bolestivá místa. Baňkování se však hojně využívá i v kombinaci s
                                        ostatními technikami jako vhodný doplněk. Cíleným přikládáním baněk na akupunkturní
                                        body lze ovlivnit meridiánové dráhy, které ovlivňují funkce vnitřních orgánů.
                                    </p>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>

                        <div id="rekondicni3m" class="massage 3m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/rekondicni/rekondicni_3.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>Dornova terapie + Breussova masáž</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Dornova metoda je technika jemného ošetření obratlů páteře a kloubů.
                                        Na rozdíl od většiny dosavadních způsobů se neprovádí uvedení obratlů
                                        a kloubů do původního stavu násilím přes odpor napjatých svalů, ale
                                        šetrně ve spolupráci s klientem při uvolněných svalech. Tím se odstraňuje
                                        nebezpečí natažení tkáňových struktur, zablokování energetických drah
                                        a vzniku krevních sraženin.Základem práce s páteří je vyrovnání délky
                                        nohou. Pracuje se ve stoji, vsedě i vleže. Při kývavém pohybu nohou či
                                        rukou, se uvolňuje svalstvo v páteřní oblasti (neinvazně) a bez bolesti
                                        se ošetřují a uvolňují zablokovaná místa.
                                    </p>
                                    <p>
                                        Breussova masáž se používá většinou po ošetření Dornovou metodou.
                                        Tato masáž se používá při bolestivých potížích, jako je např. ischialgie
                                        nebo „houser“.A bývá většinou jedinou masáží, kterou pacient v
                                        daném stavu snese. Pomocí této terapie mohou ploténky optimálně regenerovat  a znovu se nabít energií.
                                    </p>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>

                        <div id="rekondicni4m" class="massage 4m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/rekondicni/rekondicni_4.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>Reflexní terapie chodidel</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Reflexní terapie vychází z poznatku, že na všech zakončeních lidského
                                        těla existují reflexní plošky odpovídající příslušným vnitřním orgánům
                                        nebo oblastem těla, skrze které lze na celý organismus.Během procedury
                                        se tlakově ošetřují reflexní body na chodidlech, nártech a kotnících. Při terapií se
                                        postupuje citlivě s ohledem na reakci a bolestivost bodů a reflexních zón.
                                        Uvolnění a odstranění bloků v reflexních drahách a jednotlivých vnitřních orgánech,
                                        relaxace po namáhavé fyzické nebo duševní práci.
                                    </p>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>
                    <!----------KONEC REKONDICNI MASAZE ---------->

                     <!---------- RELAXACNI MASAZE ---------->

                        <div id="relaxacni1m" class="massage 1m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/relaxacni/relaxacni_1.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>HAVAJSKÁ MASÁŽ LOMI LOMI</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Havajská masáž LOMI LOMI (“milující ruce“) má kořeny ve staré Polynésii,
                                        kde byla praktikována jako součást místních šamanů (kahunů). Při masáži
                                        je tělo přiváděno do stavu hluboké relaxace. Dochází k propojení psychické,
                                        fyzické a emoční úrovně a zrychluje se regenerace všech tkání. Obecně je považována za
                                        velmi luxusní masáž vycházející z velice jemných a plynulých dotyků, které jsou
                                        prováděny především technikou masáže předloktím. Díky svým relaxačním účinkům patří
                                        mezi nejoblíbenější způsoby odpočinku.
                                    </p>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>
                        
                        <div id="relaxacni2m" class="massage 2m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/relaxacni/relaxacni_2.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>INDICKÁ MASÁŽ ABHYANGA</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Tato Indická masáž vychází ze systému tradičního indického lékařství – Ájurvédy, která
                                        je považována za nejstarší systém péče o zdraví. Jedná se o relaxační, regenerační a
                                        ozdravující celotělovou olejovou masáž, napomáhající uvolnění toxinů z kloubů a orgánů,
                                        speciálně z kůže, což má velký revitalizační efekt. Zpomaluje proces stárnutí, napomáhá
                                        zlepšení kvality spánku. Součástí masáže je i hlava (vlasová, obličejová část, obočí a uši),
                                        krk, ramena, hrudník, ruce, záda a nohy z obou stran.
                                    </p>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>
                        
                        <div id="relaxacni3m" class="massage 3m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/relaxacni/relaxacni_3.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>INDONÉSKÁ BALI MASÁŽ</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Indonéská masáž je jednou z mnoha starobylých tradičních indonéských masáží, které se předávají
                                        z generace na generaci. Nese prvky čínských, japonských a thajských technik. Jedná se
                                        o celotělovou hloubkovou masáž, která uvolňuje napětí a harmonizuje celý organismus za
                                        využití alternativních medicínských postupů: masáže, akupresury, reflexologie a aromaterapie.
                                        Díky tomu výborně stimuluje krevní oběh, ulevuje od svalové a kloubní bolesti a přináší pocit
                                        duševní pohody, klidu a hluboké relaxace.
                                    </p>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>
                        
                        <div id="relaxacni4m" class="massage 4m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/relaxacni/relaxacni_4.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>MASÁŽ LÁVOVÝMI KAMENY</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Technika masáže s lávovými kameny pochází údajně z kmenových rituálů praktikovaných v Polynésii.
                                        Základy této terapie spočívají na použití speciálních havajských technik, které ve spojení s
                                        horkými kameny mají vysoký terapeutický a relaxační účinek. Masáž lávovými kameny zbavuje záda
                                        a klouby bolestí. Díky teplu a složení kamenů se vyrovnává energie v těle, čímž se uvolňují bloky
                                        a stimuluje se jak krevní, tak lymfatický systém.
                                    </p>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>
                        
                        <div id="relaxacni5m" class="massage 5m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/relaxacni/relaxacni_5.png" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>THAJSKÁ OLEJOVÁ MASÁŽ</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Thajská olejová masáž je považována především za relaxační masáž a její počátky sahají
                                        až do období Buddhy. Využívá prvky tradiční thajské masáže, tradiční čínské medicíny,
                                        indické Ájurvédy. Použitím pomalých a táhlých hmatů, kombinovaných s protahováním a akupresurou,
                                        dochází k odblokování energií v těle, uvolnění kloubů, svalů, šlach, protažení páteře.
                                        Tato masáž navozuje celkovou harmonii a dává odpočinout tělu, mysli i duši a je vynikající prevencí před nemocemi.
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>
                        
                        <div id="relaxacni6m" class="massage 6m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/relaxacni/relaxacni_6.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>THAJSKÁ MASÁŽ NOHOU</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                    Thajská masáž nohou má za cíl uvolnit měkké tkáně a mobilizovat klouby nohou a spodní části dolní
                                    končetiny pro stimulaci vnitřních orgánu skrze reflexní body chodidel. Kombinuje tedy uvolňovací hmaty,
                                    akupresuru, uvolňování kloubů prstů a kotníků a protahování a uvolnění ztuhlého svalstva lýtek.
                                    Zvláštností je používání speciálního dřevěného kolíku ke stimulaci akupresurních bodů na chodidlech,
                                    čímž dochází k ovlivnění jednotlivých vnitřních orgánů a zlepšení jejich funkce.
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>

                        <div id="relaxacni7m" class="massage 7m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/relaxacni/relaxacni_7.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>Australská masáž KODO</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Australská masáž Kodo je rytmickou masáží australských Aboridžinců.
                                        Tento prastarý rituál kombinuje jemné protahování, akupresuru a spirálkovité pohyby,
                                        které rychle ulevují od bolesti a stresu. Při masáži užíváme vzácný arganový olej s
                                        vysokým obsahem vitamínů, který působí jako přírodní antioxidant, díky čemuž regeneruje
                                        a dlouhodobě hydratuje pokožku. Smyslná vůně růže, zklidňující levandule a antiseptický
                                        lemon teatree povzbuzují nejen tělo, ale i mysl. Celou proceduru doprovází tradiční hudba
                                        australských domorodců, která z masáže dělá nezapomenutelný zážitek.
                                    </p>
                                    <p>
                                        Masáž lze prodloužit na dvouhodinový rituál, který zahrnuje také Paudskou masáž hlavy.
                                    </p>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>
                    <!----------KONEC RELAXACNI MASAZE ---------->

                    <!---------- PRISTROJOVE MASAZE ---------->

                        <div id="pristrojove1m" class="massage 1m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/pristrojove/pristrojove_1.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>Vacupress Niodé III</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Ošetření přístroji NIODÉ a PNEUVEN je nebolestivé. Provádí jej kvalifikovaná pracovnice či
                                        pracovník v prostředí, které je čisté a hygienické.. Mezi jednotlivými procedurami by pauza
                                        neměla být kratší jak jeden den a delší jak šest dnů. Počítejte s tím, že první tři procedury
                                        jsou "detoxikační". Po prvních procedurách se může objevit únava, pobolívání hlavy, změna barvy,
                                        konzistence a zápachu moči. V tomto období se objeví úbytek objemu ošetřovaných míst.
                                        Přibližně u čtvrtého ošetření se projeví změny na pokožce. Ta začne být znatelně pevná a
                                        přitom pružná a hladká. Ošetření přístrojem NIODÉ trvá 45 minut a poté se přechází na
                                        lymfatická drenáž přístrojem Pneuven, která trvá 40 minut. Tato lymfatická drenáž znásobuje účinky
                                        ošetření. VacupressNiodé III dosahuje výborných výsledků při redukci celulitidy, zpevnění pokožky
                                        a zeštíhlení na problematických místech.
                                    </p>
                                    <h4>Přístroj Vacupress III Niodé</h4>
                                    <p>
                                        VacupressNiode je základní kosmetický přístroj pracující na principu vakuových rázů.
                                        Působením vakuových rázů dochází ke stimulaci fibroblastů, buněk, které v tkáni vytvářejí
                                        základní pojivové struktury – kolagenová a elastická vlákna. Tato vlákna zajišťují pevnost
                                        a pružnost pokožky i vnitřních vazů. U žen rostou kolagenová vlákna převážně kolmo k pokožce.
                                        Tím je zajištěno přizpůsobení pokožky např. při těhotenství. U mužů rostou kolagenová vlákna převážně
                                        šikmo křížem. Proto mají muži menší sklon k celulitidě.
                                    </p>
                                    <h4>Blahodárné účinky přístroje Vacupress III Niodé:</h4>
                                    <ul class="">
                                        <li>Zeštíhlení problematických partií těla a formování postavy</li>
                                        <li>Prevence, redukce a odstraňování celulitidy</li>
                                        <li>Vyhlazení a zpevnění pokožky po liposukci</li>
                                        <li>Odbourávání podkožního tuku</li>
                                        <li>Prevence otékání a zavodnění nohou</li>
                                    </ul>
                                    <h4>Kontraindikace:</h4>
                                    <ul>
                                        <li>Užívání léků na ředění krve</li>
                                        <li>Užívání léků, které ovlivňují činnost štítné žlázy</li>
                                        <li>Větší křečové žíly</li>
                                        <li>Onkologická onemocnění, onemocněné Angínou Pectoris, zánětem žil, otokem plic</li>
                                        <li>Choroba srdce, ledvin</li>
                                        <li>Kožní a infekční onemocnění a jiná závažná onemocnění</li>
                                    </ul>
                                    <p>
                                        <strong>Upozornění:</strong> Ve výjimečných případech se mohou po prvním ošetření objevit
                                        na ošetřovaných partiích drobné hematomy (modřiny). Tento problém však nastává
                                        pouze u klientů, jejichž pokožka a podkožní vazy jsou velmi ochablé. Hematomy
                                        vymizí během několika dnů.
                                        Po ošetření přístrojem NIODÉ VAC III je pokožka vždy hladká, pevná a pružná.

                                    </p>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>

                        <div id="pristrojove2m" class="massage 2m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/pristrojove/pristrojove_2.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>Lifting obličeje Vacupress Niodé III</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Přístrojem VacupressNiodé III nabízíme jedinečný bezskalpelový lifting obličeje a dekoltu.
                                        Tato unikátní masáž přístrojem VacupressNiodé III vyhladí Váš obličej, prokrví a projasní pleť.
                                        Výsledek je viditelný ihned po aplikaci. Speciální ošetření se provádí vakuovým přístrojem NIODÉ VAC III.
                                        Používá se malá baňka, která je určená na ošetření obličeje. Jeho výhodou je vysoká a rychlá účinnost při
                                        stahování pokožky obličeje a dekoltu, odstranění drobných vrásek, redukce hrubších vrásek.
                                        Speciální tahy podpoří odstranění toxických látek a odstraní zadržovanou vodu z obličeje.
                                        Zvýší se maximálně přirozená tvorba elastinu a kolagenu.
                                    </p>
                                    <p>
                                        Lifting je viditelný již po prvním ošetření. Pro výraznější výsledky doporučujeme kůru minimálně 5 - 10 lekcí nejlépe
                                        v první týdnu 3x a následně 2x týdně. Dlouhotrvající výsledky docílíte při následném udržovacím programu minimálně 1x za měsíc.
                                    </p>

                                    <h4>Blahodárné účinky Vacupressu (liftingu) obličeje:</h4>
                                    <ul>
                                        <li>Výrazně omlazuje a vypíná pleť </li>
                                        <li>Podporuje tvorbu elastinu a kolagenu v podkoží </li>
                                        <li>Odstraňuje drobné vrásky a váčky pod očima </li>
                                        <li>Čistí aknózní pleť </li>
                                        <li>Zpomaluje stárnutí pleti </li>
                                        <li>Snižuje napětí v obličeji</li>
                                    </ul>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>

                        <div id="pristrojove3m" class="massage 3m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/pristrojove/pristrojove_3.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>Lymfaticke kalhoty Pneuven</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Jedná se o masážní přístroj pracující na principu presoterapie – tlakových vln.
                                        Masírují se dolní končetiny, břicho, hýždě a pas. Návleky na dolní končetiny
                                        „KALHOTY“ se nafukují a vytlačují lymfu a krev z periferie do centra a zpět.
                                        Masáž probíhá silnou tlakovou vlnou, která zprůchodňuje lymfatické cévy a napomáhá
                                        odtoku toxických látek zadržovaných v těle. Jedná se o téměř neodmyslitelnou
                                        součást regenerace po liposukci stehen, břicha a boků.
                                    </p>
                                    <p>
                                        Díky tlakovým vlnám se rychleji aktivuje lymfatický systém a škodlivé látky tak
                                        z těla mnohem rychleji odcházejí. Nutnou součástí úspěšné procedury je dodržování
                                        pitného režimu. Velice prospívá k mladšímu vzhledu kůže.

                                        K masáži je potřeba si sebou přinést oblečení, ve kterém budete oblečeni během procedury
                                        (např. elastické kalhoty a ponožky)!
                                    </p>
                                    <h4>Blahodárné účinky lymfatických kalhot:</h4>
                                    <ul>
                                        <li>Odstraňuje celulitidu</li>
                                        <li>Přispívá k detoxikaci organismu</li>
                                        <li>Přispívá k lepšímu prokrvení pokožky, toku krve a lymfy</li>
                                        <li>Vyhlazuje a zeštíhluje obvod stehen, břicha a hýždí</li>
                                        <li>Pomáhá lepšímu fungování metabolismu</li>
                                        <li>Zmírňuje příznaky syndromu těžkých nohou</li>
                                    </ul>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>
                    <!----------KONEC PRISTROJOVE MASAZE ---------->

                    <!---------- DETOXIKACNI MASAZE ---------->

                        <div id="detoxikacni1m" class="massage 1m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/detoxikacni/detoxikacni_1.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>Medová masáž</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Medová masáž je unikátní technika, při které dochází pomocí působení včelího medu
                                        a speciálních masážních hmatů k odstraňování toxinů, které lidské tělo nahromadilo ve
                                        svých tkáních. Pomáhá při bolestech hlavy, nespavosti, trávícími obtížemi, ale je vhodná
                                        i u lidí, kteří trpí nemocemi kloubů nebo revmatismem. Díky vysokému podílu
                                        příznivých složek, které med obsahuje, se pravidelnou medovou masáží regenerují vnitřní
                                        orgány lidského těla a člověk se po kvalitní masáži cítí příjemně, uvolněně a mírně unaven.
                                    </p>
                                    <p>
                                        Med se zahřeje a  nanese tělo za použití pumpovací metody.
                                        Prostřednictvím pumpovacích pohybů rukou jsou při masáži medem vysávány staré usazeniny
                                        a jedy až z hloubi tělesných tkání. Během masáže kůže na masírovaném místě pozvolna červená.
                                    </p>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>

                        <div id="detoxikacni2m" class="massage 2m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/detoxikacni/detoxikacni_2.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>Čokoládová masáž</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Masáž horkou čokoládou si mohou užít všichni ti, kteří potřebují akutně zlikvidovat dlouhodobě
                                        nashromážděný stres a únavu. Díky čokoládové masáži a zábalu pronikají do pokožky také
                                        vitaminy, aminokyseliny, minerály, antioxidanty, díky čemuž je pokožka vyhlazená a
                                        ošetřená – ideální doplněk pro anticelulitidní program. Čokoterapie má mimo jiné příznivý
                                        vliv na činnost srdce a podporuje detoxikaci.
                                    </p>
                                    <p>
                                        Před samotnou čokoládovou masáží se nejprve udělá peeling se
                                        slupkami s kakaových bobů. Tento peeling umožní, aby se účinné
                                        látky snadněji vstřebaly do pokožky a napomohly tak k látkové výměně.Rozetřením
                                        pravé hořké čokolády, která se předem nahřeje spolu s kokosovým olejem, masírujeme daná místa.
                                        Tělo se po masáži opět potře čokoládou a vytvoří se zábal, ve kterém relaxujete asi 20minut.
                                    </p>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>

                        <div id="detoxikacni3m" class="massage 3m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/detoxikacni/detoxikacni_3.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>Anticelulitidní masáž</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Anticeluditní masáž má za účel působení na tukové buňky ze zvlákněného podkoží a
                                        stimulování podkožní struktury pro lepší podkožní metabolismus a zlepšení
                                        odtoku nežádoucích látek, čímž dochází ke stimulaci podkožní tukové struktury.
                                        Kompresní hmaty mají příznivý vliv na podkožní metabolismus a dochází poté k lepšímu
                                        vstřebávání tuků. Masáží dochází k výborné regeneraci a relaxaci, vyhlazování kůže,
                                        rozrušování tukových buněk, strií, prasklinek a především celulitidy. Doporučuje kůra deseti ošetření
                                        s pravidelnou návštěvou minimálně jednou týdně.
                                    </p>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>

                        <div id="detoxikacni4m" class="massage 4m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/detoxikacni/detoxikacni_4.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>Lymfatická masáž</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Lymfatická masáž má za úkol obnovit a zvýšit oběh lymfy. Lymfatický systém totiž nemá svoji pumpu.
                                        Jestliže nepracuje nebo je jeho činnost zpomalena, zůstávají zbytky látkové výměny v tkáních.
                                        Tukové buňky zvětšují svůj objem, vytvářejí se tukové polštářky, pomerančová kůže a otoky. Pomocí
                                        cíleného masážního tlaku a směru je možné lymfu aktivovat a dosáhnout odplavení škodlivin z těla ven.
                                        Masáž využívá velmi jemnou technikou manuální lymfodrenáže, která odblokuje hlavní uzliny a odvede drenážovanou
                                        tekutinu vylučovacím systémem z těla ven. Tato metoda je přirozená a lékařsky zdůvodněná. Je nejen účelná,
                                        ale navíc velice příjemná a relaxační.
                                    </p>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>
                    <!----------KONEC DETOXIKACNI MASAZE ---------->

                    <!---------- SPECIALNI PECE ---------->

                        <div id="specialni1m" class="massage 1m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/specialni/specialni_1.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>Moxování</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Při moxování se využívá tepla a kouře z léčivé moxy, která pochází z tradiční čínské medicíny.
                                        Moxy mají podobu zuhelnatělých doutníků, které jsou vyplněny sušeným pelyňkem a dalšími čínskými
                                        léčivými bylinami. Při proceduře se směs zapálí a bezkontaktně se zahřívají akupunkturní body.
                                        Tím dochází k prohřátí a uvolnění jednotlivých částí těla, a to především bederní a krční oblasti,
                                        což činí moxování výborným doplňkem masáže. Energie z bylin vstupuje do akupunkturních drah, vyrovnává je,
                                        podporuje krevní oběh a vylučuje z těla chlad, zatuhlost a bolest.
                                    </p>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>

                        <div id="specialni2m" class="massage 2m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/specialni/specialni_2.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>Tygrování</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Tygrování je Japonská prohřívací technika, která používá speciální kovové pouzdro s hořící
                                        tyčinkou vyrobenou ze směsi různých bylin (nejčastěji však z lisovaného pelyňku).
                                        Kontaktem s pokožkou postupně prohřívají dolní končetiny, především chodidla. Právě díky kombinaci
                                        lehkého tlaku a tepla získává tato terapie jedinečné detoxikační kvality.
                                    </p>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>

                        <div id="specialni3m" class="massage 3m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/specialni/specialni_3.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>Lávové kameny</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Lávové kameny se po samotné masáži nahřejí a přiloží na záda. Přikrytím kamenů dochází
                                        k tepelnému zahřátí a minerály obsažené v lávových kamenech se dostávají do těla.
                                        Intenzivní teplo výborně doplňuje účinky masáže a uvolní i ty nejzatuhlejší partie.
                                    </p>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>

                        <div id="specialni4m" class="massage 4m">
                            <div class="row">
                                <div class="col-lg-3 col-lg-offset-1 col2">
                                    <img src="media/img/specialni/specialni_4.jpg" class="img-circle obrazek" width="150px" height="150px">
                                </div>
                                <div class="col-lg-7 col1">
                                    <h3>Tělové svíce TADÉ</h3>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <p>
                                        Tělové svíčky TADÉ jsou vyráběny z bavlny, včelího vosku, kurkumy a éterických olejů.
                                        Teplo a bioenergie vytvořené při hoření svíčky změkčují v těle nahromaděný maz,
                                        který je prostřednictvím tzv. komínového efektu vytahován směrem vzhůru, tedy z
                                        těla přes kůži ven. Svíčky tímto způsobem napomáhají likvidaci zánětů a lokálních
                                        blokacív organismu a tak přispívají k nastartování samoléčebných procesů a celkové harmonizaci těla.
                                    </p>
                                </div>
                            </div>
                            <?php echo Smarty::$_smarty_vars['capture']['priceTable'];?>

                        </div>

                    <!----------KONEC SPECIALNI PECE ---------->


            
            </div> <!-- Right column-->
        </div>
    </div>



</div>

<?php echo $_smarty_tpl->getSubTemplate ('inc/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>