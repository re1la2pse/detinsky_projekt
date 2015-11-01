<?php /* Smarty version 3.1.27, created on 2015-10-12 17:37:08
         compiled from "templates\voucher.html" */ ?>
<?php
/*%%SmartyHeaderCode:14639561bd3a4f00373_37091616%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73f78101fee589ee68a1a6cb12d6790b2b239453' => 
    array (
      0 => 'templates\\voucher.html',
      1 => 1444664227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14639561bd3a4f00373_37091616',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561bd3a4f36e88_04405519',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561bd3a4f36e88_04405519')) {
function content_561bd3a4f36e88_04405519 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14639561bd3a4f00373_37091616';
echo $_smarty_tpl->getSubTemplate ('inc/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="content">

    <div class="container section">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-1">

                <h3>Dárkové poukazy</h3>

                <form id="voucherForm">
                    <div class="form-group">
                        <label for="fText">Vlastní text:</label>
                        <input id="fText" type="text" name="customText" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="fworth">Hodnota:</label>
                        <select id="fworth" class="form-control">
                            <option value="500">500</option>
                            <option value="600">600</option>
                            <option value="1000">1000</option>
                            <option value="pairMassage">Párová masáž</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="fdelivery">Způsob doručení:</label>
                        <select id="fdelivery" class="form-control">
                            <option selected="selected" value="0">Osobní vyzvednutí</option>
                            <option value="1">Zaslat poštou</option>
                        </select>
                    </div>

                    <fieldset>
                    <div class="form-group">
                        <label for="fStreet">Ulice:</label>
                        <input id="fStreet" type="text" name="street" class="form-control address">
                    </div>

                    <div class="form-group">
                        <label for="fCity">Město:</label>
                        <input id="fCity" type="text" name="city" class="form-control address">
                    </div>

                    <div class="form-group">
                        <label for="fPSC">PSČ:</label>
                        <input id="fPSC" type="text" name="psc" class="form-control address">
                    </div>
                    </fieldset>

                    <input type="submit" value="Odeslat" class="btn btn-default">


                </form>

            </div>

            <div class="col-lg-4 col-lg-offset-1">

                <div id="righColumn">
                    <h4>Připravíme Vám dárkové poukazy s vlastním textem</h4>
                    <p>
                        Zadejte vlastní text, vyberte hodnotu darkoveho poukazu a zvolte způsob doručení.
                        V případě zasílání poštou vyplňte také doručovací adresu.
                    </p>
                    <br />
                    <p>
                        Vezměte prosím na vědomí, že <strong>platnost poukazů je 3 měsíce od data vystavení</strong>,
                        své obdarované informujte o dodržování platnosti. Pokud si nemohou darované služby v
                        platném termínu vybrat (ze zdravotních důvodů kontaktujte nejpozději 14 dní před ukončením
                        platnosti s žádostí o <strong>bezplatné prodloužení o 1 měsíc.</strong>
                    </p>

                    <div id="voucherImg"></div>
                </div>


            </div>
        </div> <!-- row -->
    </div>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('inc/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>