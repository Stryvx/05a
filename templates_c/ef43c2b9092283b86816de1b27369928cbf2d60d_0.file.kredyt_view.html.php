<?php
/* Smarty version 3.1.30, created on 2021-03-29 21:38:29
  from "D:\XAMPP\htdocs\test\app\kredyt_view.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60622cb5d23525_64139543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef43c2b9092283b86816de1b27369928cbf2d60d' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\test\\app\\kredyt_view.html',
      1 => 1617046680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/main.html' => 1,
  ),
),false)) {
function content_60622cb5d23525_64139543 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152485151060622cb5d08ae1_51002918', 'stopka');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11502746660622cb5d22b67_54040330', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../templates/main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'stopka'} */
class Block_152485151060622cb5d08ae1_51002918 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p class="copyright"> Agata Pawluś</p><?php
}
}
/* {/block 'stopka'} */
/* {block "content"} */
class Block_11502746660622cb5d22b67_54040330 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
    	

            <form <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post" >
    <fieldset>
        <label for="id_x">Kwota: </label>
	<input id="id_x" type="text" name="amount" value="" /><br />
	<label for="id_y">Liczba miesięcy: </label>
	<input id="id_y" type="text" name="months" value="" /><br />
	<label for="id_z">Oprocentowanie: </label>
	<input id="id_z" type="text" name="interest" value="" /><br />
    </fieldset>
    <input type="submit" value="Oblicz"  />
</form>
        </div>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>

<h4>Wystąpiły następujące błedy:</h4>
<ol>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
    <li><?php echo $_smarty_tpl->tpl_vars['m']->value;?>
</li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ol>

<?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['result']->value->result)) {?>
	<h4>Twoja rata będzie wynosić:</h4>
	<p>
	<?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>

	</p>
<?php }
}
}
/* {/block "content"} */
}
