<?php /* Smarty version 3.1.27, created on 2015-10-24 13:22:15
         compiled from "templates/frontPage.html" */ ?>
<?php
/*%%SmartyHeaderCode:468831501562b69e78c0832_96755240%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fb1252b77f5cce32d033a6ddb17d0ed2f3f27eb' => 
    array (
      0 => 'templates/frontPage.html',
      1 => 1445685712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '468831501562b69e78c0832_96755240',
  'variables' => 
  array (
    'ROOT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562b69e79c5423_67292202',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562b69e79c5423_67292202')) {
function content_562b69e79c5423_67292202 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '468831501562b69e78c0832_96755240';
?>

<?php echo $_smarty_tpl->getSubTemplate ('inc/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <!--<ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>-->

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('media/img/slider/1c.png');"></div>
            <div class="carousel-caption">
                <h2></h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('media/img/slider/2c.png');"></div>
            <div class="carousel-caption">
                <h2></h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('media/img/slider/3c.png');"></div>
            <div class="carousel-caption">
                <h2></h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('media/img/slider/4c.png');"></div>
            <div class="carousel-caption">
                <h2></h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('media/img/slider/5c.png');"></div>
            <div class="carousel-caption">
                <h2></h2>
            </div>
        </div>
    </div>
</div>

<!-- *************************************** -->
<!-- content -->
<!--
<section>
    <div id="about_us"class="container section">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>O nás</h2>
                <p>
                    Dnešní doba bohužel přeje poruchám pohybového aparátu a jejich léčba vyžaduje nejen cit, ale i zkušenosti.
                    Naši maséři a masérky mají několikaleté zkušenosti, které neustále rozšiřují skrze různé kurzy a školení. Nabízíme tak vysoce individuální přístup ke každému klientovi.
                    Přijďte i Vy objevit Tajemství masérny.
                </p>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container sectionBetweenSection">
    </div>
</section>
-->
<section>
    <div id="services" class="container section">
        <div >
            <div class="row center">
                
                <div class="col-lg-10 col-lg-offset-1">
                    <p id="uvodText">
                        Dnešní doba bohužel přeje poruchám pohybového aparátu a jejich léčba vyžaduje nejen cit, ale i zkušenosti.
                        Naši maséři a masérky mají několikaleté zkušenosti, které neustále rozšiřují skrze různé kurzy a školení. Nabízíme tak vysoce individuální přístup ke každému klientovi.
                        Přijďte i Vy objevit Tajemství masérny.
                    </p>
                </div>
                
                <div class="col.md-12">
                    <h2>Nabídka masáží</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="center">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/rekondicni"><img src="media/img/masaze/recondicni_masaze.jpg" class="img-circle obrazek" width="200px" height="200px"></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/rekondicni"><h4>Rekondiční masáže</h4></a>
                        <p>Když Vás chytnou záda – uvolnění a regenerace pohybového aparátu.</p>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6">
                    <div class="center">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/relaxacni"><img src="media/img/masaze/relaxacni_masaze.jpg" class="img-circle obrazek" width="200px" height="200px"></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/relaxacni"><h4>Relaxační masáže</h4></a>
                        <p>Pro navození hlubokého odpočinku a nenásilného uvolnění bolavých míst.</p>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6">
                    <div class="center">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/pristrojove"><img src="media/img/masaze/pristrojove_masaze.jpg" class="img-circle obrazek" width="200px" height="200px"></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/pristrojove"><h4>Přístrojové masáže</h4></a>
                        <p>Tyto přístroje nám poskytují specifické masážní služby a účinky, kterých by masér nemohl svým ručním provedením dosáhnout.</p>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 col-md-offset-2">
                    <div class="center">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/detoxikacni"><img src="media/img/masaze/detoxikacni_masaze.jpg" class="img-circle obrazek" width="200px" height="200px"></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/detoxikacni"><h4>Detoxikační masáže</h4></a>
                        <p>Pro oživení organismu, který je vyčerpaný stresem a nezdravým životním stylem.</p>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6">
                    <div class="center">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/specialni"><img src="media/img/masaze/specialni_masaze.jpg" class="img-circle obrazek" width="200px" height="200px"></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/specialni"><h4>Speciální péče</h4></a>
                        <p>Dopřejte si k masáži něco extra.</p>
                    </div>
                </div><!--/.col-md-4-->

            </div><!--/.row-->
        </div><!--/.box-->
    </div><!--/.container-->
</section><!--/#services-->

<section>
    <div class="container sectionBetweenSection">
    </div>
</section>

<section>
    <div id="contactSection"class="container small-section">
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-6 contactColumn">
                <h3>Kontakt:</h3>

                <ul>
                    <li><h4>Monika Páclová</h4></li>
                    <li>tet.: 739 513 425</li>
                    <li>e-mail: info@tajemstvimaserny.cz</li>
                    <li></li>
                    <li>adresa: 28.října 548/8, Ostrava</li>
                    <li><a href="https://www.facebook.com/TajemstviMaserny?__mref=message_bubble" class="btn btn-block btn-social btn-twitter fb_icon">
                        <i class="fa fa-facebook"></i> facebook
                    </a></li>
                </ul>


            </div>

            <div class="col-lg-5 col-sm-6 voucherColumn" >
                <h3>Darkový poukaz:</h3>
                <a href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/darkovyPoukaz">
                    <div id="voucher">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container sectionBetweenSection">
    </div>
</section>


<?php echo $_smarty_tpl->getSubTemplate ('inc/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>