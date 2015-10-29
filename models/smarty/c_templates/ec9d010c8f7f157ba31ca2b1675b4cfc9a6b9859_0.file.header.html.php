<?php /* Smarty version 3.1.27, created on 2015-10-24 14:12:07
         compiled from "templates/inc/header.html" */ ?>
<?php
/*%%SmartyHeaderCode:2098993955562b7597d89c60_46899492%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec9d010c8f7f157ba31ca2b1675b4cfc9a6b9859' => 
    array (
      0 => 'templates/inc/header.html',
      1 => 1445688687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2098993955562b7597d89c60_46899492',
  'variables' => 
  array (
    'style' => 0,
    'ROOT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562b7597ded743_46121310',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562b7597ded743_46121310')) {
function content_562b7597ded743_46121310 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2098993955562b7597d89c60_46899492';
?>
<!DOCTYPE html>
<html lang="cs">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Petr Mokrusa">

    <title>title</title>

    <!-- Bootstrap Core CSS -->
    <link href="media/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="media/css/main.css" rel="stylesheet">
    <link href="media/css/<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
.css" rel="stylesheet">
    <link rel="stylesheet" href="media/css/slimbox.css" type="text/css" media="screen" />
        

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING:<link href="media/css/main.css" rel="stylesheet">.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

    <!-- fonty -->
    <link href="media/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

</head>

<body>
<!-- Navigation -->
<div id="navigation" role="banner">
    <div class="container">
        <div id="navbar" class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/procha_projekt_git"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/procha_projekt_git">Domů</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/galerie">Fotogalerie</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">Dropdown<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                            <li><a href="#">Link 3</a></li>
                        </ul>
                    </li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#about-us">About Us</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['ROOT']->value;?>
/kontakt">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div><?php }
}
?>