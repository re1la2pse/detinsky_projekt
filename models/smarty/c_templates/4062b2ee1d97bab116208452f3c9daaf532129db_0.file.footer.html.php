<?php /* Smarty version 3.1.27, created on 2015-10-24 14:38:30
         compiled from "templates/inc/footer.html" */ ?>
<?php
/*%%SmartyHeaderCode:1770977745562b7bc6c9fd73_11094888%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4062b2ee1d97bab116208452f3c9daaf532129db' => 
    array (
      0 => 'templates/inc/footer.html',
      1 => 1445690309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1770977745562b7bc6c9fd73_11094888',
  'variables' => 
  array (
    'galerie' => 0,
    'js_script' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562b7bc6d09634_92396158',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562b7bc6d09634_92396158')) {
function content_562b7bc6d09634_92396158 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1770977745562b7bc6c9fd73_11094888';
?>

        <?php if (!isset($_smarty_tpl->tpl_vars['galerie']->value)) {?>
        <!-- jQuery -->
            <?php echo '<script'; ?>
 src="media/js/jquery.js"><?php echo '</script'; ?>
>
        <?php }?>

        <!-- Bootstrap Core JavaScript -->
        <?php echo '<script'; ?>
 src="media/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="media/js/jqBootstrapValidation.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="media/js/contact_me.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="media/js/main.js"><?php echo '</script'; ?>
>
        
        <!-- slim box -->
        <?php if (isset($_smarty_tpl->tpl_vars['galerie']->value)) {?>
            <?php echo '<script'; ?>
 src="media/js/mootools.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="media/js/slimbox.js"><?php echo '</script'; ?>
>
        <?php }?>
        
        <?php echo '<script'; ?>
 src="media/js/<?php echo $_smarty_tpl->tpl_vars['js_script']->value;?>
.js"><?php echo '</script'; ?>
>
    </body>

</html><?php }
}
?>