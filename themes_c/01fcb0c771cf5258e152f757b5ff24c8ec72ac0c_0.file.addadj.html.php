<?php /* Smarty version 3.1.27, created on 2016-03-25 16:12:16
         compiled from "/var/www/html/mutasyon/themes/default/invoiceadj/addadj.html" */ ?>
<?php
/*%%SmartyHeaderCode:74178678856f54740b4bd80_48502627%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01fcb0c771cf5258e152f757b5ff24c8ec72ac0c' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/invoiceadj/addadj.html',
      1 => 1456420612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74178678856f54740b4bd80_48502627',
  'variables' => 
  array (
    '_invoiceadj_name' => 0,
    'page_name' => 0,
    '_ok' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f54740b57888_25521438',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f54740b57888_25521438')) {
function content_56f54740b57888_25521438 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '74178678856f54740b4bd80_48502627';
?>
<div class="collapse topwind" id="addadj">
      <div class="panel panel-pink" style="background:#fff;">
	      <button type="button" class="close addadjm" data-toggle="collapse" href="#addadj" style="margin-right:10px;margin-top:8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_invoiceadj_name']->value;?>
</div>
	      <div class="panel-body pan">
		      <form id="paymentform" action="invoiceadj.php" method="POST" <?php if ($_smarty_tpl->tpl_vars['page_name']->value != 'settings') {?>class="noload"<?php } else { ?>class="reload"<?php }?>>
			      <div class="form-body pal">
					<div class="navbar">
					      <h5><?php echo $_smarty_tpl->tpl_vars['_invoiceadj_name']->value;?>
</h5>
					      <input type="text" name="invoiceadj" class="form-control addinvoiceadj" />
					      <button type ="submit" class="btn btn-info btn-sm margin-top"><i class="glyphicon glyphicon-ok"></i><?php echo $_smarty_tpl->tpl_vars['_ok']->value;?>
</button>
					</div><!--/row-->
			      </div><!--/form-body-->
		      </form>
	      </div><!--/panel-body-->
      </div><!--/panel-->
</div><!--/topwind--><?php }
}
?>