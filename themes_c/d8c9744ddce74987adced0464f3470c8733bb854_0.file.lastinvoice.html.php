<?php /* Smarty version 3.1.27, created on 2016-04-04 20:49:18
         compiled from "/var/www/html/mcopy/themes/default/widget/lastinvoice.html" */ ?>
<?php
/*%%SmartyHeaderCode:20746496705702a91e972cd5_47461275%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8c9744ddce74987adced0464f3470c8733bb854' => 
    array (
      0 => '/var/www/html/mcopy/themes/default/widget/lastinvoice.html',
      1 => 1456420643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20746496705702a91e972cd5_47461275',
  'variables' => 
  array (
    'screen' => 0,
    '_last_invoices' => 0,
    'invoicelist' => 0,
    'b' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5702a91e9e0734_64333641',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5702a91e9e0734_64333641')) {
function content_5702a91e9e0734_64333641 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20746496705702a91e972cd5_47461275';
?>
<div class="panel">
      <div class="panel-body">
	  <div class="row">
	      <div class="col-md-8">
		  <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'computer') {?>
		  <div id="instocks"></div>
		  <?php }?>
	      </div>
	      <div class="col-md-4">
		  <h4 class="mbm"><?php echo $_smarty_tpl->tpl_vars['_last_invoices']->value;?>
</h4>
		  <?php
$_from = $_smarty_tpl->tpl_vars['invoicelist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['b'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['b']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
$foreach_b_Sav = $_smarty_tpl->tpl_vars['b'];
?>
			<?php if ($_smarty_tpl->tpl_vars['b']->value['invoice_providers'] == 0) {?>
			      <?php if ($_smarty_tpl->tpl_vars['b']->value['invtotal'] != null || $_smarty_tpl->tpl_vars['b']->value['invtotal'] != '' || $_smarty_tpl->tpl_vars['b']->value['invtotal'] != 0) {?>
				    <?php if ($_smarty_tpl->tpl_vars['b']->value['invtotal'] != ($_smarty_tpl->tpl_vars['b']->value['paytotal']+$_smarty_tpl->tpl_vars['b']->value['invoice_discount'])) {?>
					  <span class="task-item"><a href="invoicedetail.php?iid=<?php echo $_smarty_tpl->tpl_vars['b']->value['invoice_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value['invoice_no'];?>
</a><small class="pull-right text-muted"><?php echo round(($_smarty_tpl->tpl_vars['b']->value['paytotal']+$_smarty_tpl->tpl_vars['b']->value['invoice_discount'])/$_smarty_tpl->tpl_vars['b']->value['invtotal']*100);?>
%</small>
					  <div class="progress progress-sm">
					      <div role="progressbar" aria-valuenow="<?php echo ($_smarty_tpl->tpl_vars['b']->value['paytotal']+$_smarty_tpl->tpl_vars['b']->value['invoice_discount'])/$_smarty_tpl->tpl_vars['b']->value['invtotal']*100;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($_smarty_tpl->tpl_vars['b']->value['paytotal']+$_smarty_tpl->tpl_vars['b']->value['invoice_discount'])/$_smarty_tpl->tpl_vars['b']->value['invtotal']*100);?>
%;" class="progress-bar <?php if (round(($_smarty_tpl->tpl_vars['b']->value['paytotal']+$_smarty_tpl->tpl_vars['b']->value['invoice_discount'])/$_smarty_tpl->tpl_vars['b']->value['invtotal']*100) == 100) {?> progress-bar-success <?php } elseif (round(($_smarty_tpl->tpl_vars['b']->value['paytotal']+$_smarty_tpl->tpl_vars['b']->value['invoice_discount'])/$_smarty_tpl->tpl_vars['b']->value['invtotal']*100) < 51) {?> progress-bar-yellow <?php } elseif ($_smarty_tpl->tpl_vars['b']->value['invoice_cancelled'] == 1) {?> progress-bar-red <?php } else { ?> progress-bar-blue<?php }?>">
					      </div>
					  </div>
				    <?php }?>
			      <?php }?>
			<?php } else { ?>
			      <?php if ($_smarty_tpl->tpl_vars['b']->value['servtotal'] != null || $_smarty_tpl->tpl_vars['b']->value['servtotal'] != '' || $_smarty_tpl->tpl_vars['b']->value['servtotal'] != 0) {?>
				    <?php if ($_smarty_tpl->tpl_vars['b']->value['servtotal'] != ($_smarty_tpl->tpl_vars['b']->value['payservtotal']+$_smarty_tpl->tpl_vars['b']->value['invoice_discount'])) {?>
					  <span class="task-item"><a href="invoicedetail.php?seid=<?php echo $_smarty_tpl->tpl_vars['b']->value['invoice_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value['invoice_no'];?>
</a><small class="pull-right text-muted"><?php echo round(($_smarty_tpl->tpl_vars['b']->value['payservtotal']+$_smarty_tpl->tpl_vars['b']->value['invoice_discount'])/$_smarty_tpl->tpl_vars['b']->value['servtotal']*100);?>
%</small>
					  <div class="progress progress-sm">
					      <div role="progressbar" aria-valuenow="<?php echo round(($_smarty_tpl->tpl_vars['b']->value['payservtotal']+$_smarty_tpl->tpl_vars['b']->value['invoice_discount'])/$_smarty_tpl->tpl_vars['b']->value['servtotal']*100);?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($_smarty_tpl->tpl_vars['b']->value['payservtotal']+$_smarty_tpl->tpl_vars['b']->value['invoice_discount'])/$_smarty_tpl->tpl_vars['b']->value['servtotal']*100);?>
%;" class="progress-bar <?php if (round(($_smarty_tpl->tpl_vars['b']->value['payservtotal']+$_smarty_tpl->tpl_vars['b']->value['invoice_discount'])/$_smarty_tpl->tpl_vars['b']->value['servtotal']*100) == 100) {?> progress-bar-success <?php } elseif (round(($_smarty_tpl->tpl_vars['b']->value['payservtotal']+$_smarty_tpl->tpl_vars['b']->value['invoice_discount'])/$_smarty_tpl->tpl_vars['b']->value['servtotal']*100) < 51) {?> progress-bar-yellow <?php } elseif ($_smarty_tpl->tpl_vars['b']->value['service_cancelled'] == 1) {?> progress-bar-red <?php } else { ?> progress-bar-blue<?php }?>">
					      </div>
					  </div>
				    <?php }?>
			      <?php }?>
			<?php }?>
		  <?php
$_smarty_tpl->tpl_vars['b'] = $foreach_b_Sav;
}
?>
	      </div>
	  </div>
      </div>
</div> <?php }
}
?>