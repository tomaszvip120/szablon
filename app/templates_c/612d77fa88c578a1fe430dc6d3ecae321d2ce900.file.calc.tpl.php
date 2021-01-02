<?php /* Smarty version Smarty-3.1.17, created on 2021-01-02 17:30:43
         compiled from "D:\xampp\htdocs\php_04_szablony_smarty\app\calc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:669303685ff093ec18f124-19244522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '612d77fa88c578a1fe430dc6d3ecae321d2ce900' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_04_szablony_smarty\\app\\calc.tpl',
      1 => 1609605041,
      2 => 'file',
    ),
    'b64147301ab4f20777a8bfc01f7cd247d0ffb5e8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_04_szablony_smarty\\templates\\main.html',
      1 => 1607032791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '669303685ff093ec18f124-19244522',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5ff093ec1dfc23_71151089',
  'variables' => 
  array (
    'page_description' => 0,
    'page_title' => 0,
    'app_url' => 0,
    'hide_intro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ff093ec1dfc23_71151089')) {function content_5ff093ec1dfc23_71151089($_smarty_tpl) {?><!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
">

    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/main-grid-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/main-grid.css">
    <!--<![endif]-->
  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/layouts/marketing.css">
    <!--<![endif]-->

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css">
<?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style_hide_intro.css">
<?php }?>
	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jquery.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/softscroll.js"></script>

</head>
<body>

<div id="app_top" class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href=""><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</a>
        <ul>
            <li class="pure-menu-selected"><a href="#app_top">Góra strony</a></li>
            <li><a href="#app_content">Kalkulator</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
        <p class="splash-subhead">
             <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>

        </p>
        <p>
            <a href="#app_content" class="pure-button pure-button-primary">Pzejdź do kalkulatora</a>
        </p>
    </div>
</div>

<div class="content-wrapper">

    <div id="app_content" class="content">



<h2 class="content-head is-center">Kalkulator kredytu oraz lokaty</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
		<fieldset>

			<label for="x">Kwota</label>
			<input id="x" type="text" placeholder="wartość kwota" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['x'];?>
">
                        
                        <label for="y">Liczba lat</label>
			<input id="y" type="text" placeholder="wartość liczba lat" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['y'];?>
">
                        
                        <label for="z">Oprocentowanie</label>
			<input id="z" type="text" placeholder="wartość oprocentowanie" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['z'];?>
">

			<label for="op">Operacja</label>
					<select id="op" name="op">

<?php if (isset($_smarty_tpl->tpl_vars['form']->value['op_name'])) {?>
<option value="<?php echo $_smarty_tpl->tpl_vars['form']->value['op'];?>
">ponownie: <?php echo $_smarty_tpl->tpl_vars['form']->value['op_name'];?>
</option>
<option value="" disabled="true">---</option>
<?php }?>
						<option value="kredyt">kredyt</option>
						<option value="lokata">lokata</option>
					</select>
					
			

			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">


<?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value)>0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php } ?>
		</ol>
	<?php }?>
<?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['infos']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php } ?>
		</ol>
	<?php }?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['result']->value)&&$_smarty_tpl->tpl_vars['form']->value['op']=='kredyt') {?>
	<h4>Wynik</h4>
	<p class="res">
	Miesięczna rata kredytu wyniesie <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 zl.
	</p>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['result']->value)&&$_smarty_tpl->tpl_vars['form']->value['op']=='lokata') {?>
	<h4>Wynik</h4>
	<p class="res">
	Lokata po <?php echo $_smarty_tpl->tpl_vars['form']->value['y'];?>
 latach z oprocentowaniem rocznym <?php echo $_smarty_tpl->tpl_vars['form']->value['z'];?>
% wyniesie = <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 zł.
	</p>
<?php }?>

</div>
</div>



    </div>

    <div class="footer l-box is-center">
		<p>
Kalkulator
		</p>
        <p>Przykładowa strona kalkulatora bankowego</p>
    </div>

</div>


</body>
</html><?php }} ?>
