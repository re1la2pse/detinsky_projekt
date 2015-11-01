<?php /* Smarty version 3.1.27, created on 2015-10-28 08:39:19
         compiled from "templates\contact.html" */ ?>
<?php
/*%%SmartyHeaderCode:302556307ba75de4d6_14205078%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c615f945fad9f7d074d0214c696e4f70772e654' => 
    array (
      0 => 'templates\\contact.html',
      1 => 1446017958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302556307ba75de4d6_14205078',
  'variables' => 
  array (
    'ROOT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56307ba761cce2_81025931',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56307ba761cce2_81025931')) {
function content_56307ba761cce2_81025931 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '302556307ba75de4d6_14205078';
echo $_smarty_tpl->getSubTemplate ('inc/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<div class="content">
<!-- Contact Section -->
    <section>
        <div id="contact" class="container section">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Vložte jméno.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Vložte email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Vložte tel. číslo.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Vložte zprávu."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container sectionBetweenSection">
        </div>
    </section>

    <section>
        <div id="contactSection" class="container small-section">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 contactColumn">
                    <h3>Kontakt:</h3>
                    <a href="https://www.facebook.com/TajemstviMaserny"><div id="fb-icon"></div> </a>

                    <ul>
                        <li><h4>Monika Páclová</h4></li>
                        <li>tet.: 739 513 425</li>
                        <li>e-mail: info@tajemstvimaserny.cz</li>
                        <li></li>
                        <li>adresa: 28.října 548/8, Ostrava</li>
                        <!--<li><a href="https://www.facebook.com/TajemstviMaserny?__mref=message_bubble" class="btn btn-block btn-social btn-twitter fb_icon">
                            <i class="fa fa-facebook"></i> facebook
                        </a></li>-->
                    </ul>
                </div>

                <div class="col-lg-5  voucherColumn" >
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
</div>

<?php echo $_smarty_tpl->getSubTemplate ('inc/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>