<?php /* Smarty version 3.1.27, created on 2015-09-26 15:05:43
         compiled from "templates/contact.html" */ ?>
<?php
/*%%SmartyHeaderCode:17390090185606982789f5e9_71567276%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f50bc186c5d8c3260f8530e58ffb1e0559fb0ca' => 
    array (
      0 => 'templates/contact.html',
      1 => 1443272727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17390090185606982789f5e9_71567276',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560698278fd2b8_41678713',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560698278fd2b8_41678713')) {
function content_560698278fd2b8_41678713 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17390090185606982789f5e9_71567276';
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
</div>

<?php echo $_smarty_tpl->getSubTemplate ('inc/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>