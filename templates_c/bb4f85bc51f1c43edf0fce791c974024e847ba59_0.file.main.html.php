<?php
/* Smarty version 3.1.30, created on 2021-03-29 21:38:29
  from "D:\XAMPP\htdocs\test\templates\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60622cb5d60f85_95079876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb4f85bc51f1c43edf0fce791c974024e847ba59' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\test\\templates\\main.html',
      1 => 1617045309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60622cb5d60f85_95079876 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<title>Astral by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper-->
			<div id="wrapper">

				<!-- Nav -->
					<nav id="nav">
						<a href="#" class="icon solid fa-home"><span>Home</span></a>
						<a href="#work" class="icon solid fa-folder"><span>Kalkulator</span></a>

					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Me -->
							<article id="home" class="panel intro">
								<header>
									<h1>Agata Pawluś</h1>
									<p>PAW1</p>
								</header>
								<a href="#work" class="jumplink pic">
									<span class="arrow icon solid fa-chevron-right"><span>See my work</span></span>
									<img src="images/me.jpg" alt="" />
								</a>
							</article>

						<!-- Work -->
							<article id="work" class="panel">
								<header>
									<h2>Kalkulator</h2>
								</header>
								<section>
									<div class="row">
										<form action="<?php echo '<?php ';?>print(_APP_URL);<?php echo '?>';?>/KratCtrl.php" method="get">
										<label for="x">Kwota zaciągniętego kredytu: </label>
										<input id="x" type="text"  name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
" /><br />
										<label for="y">Liczba lat: </label>
										<input id="y" type="text"  name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
" /><br />
										<label for="y">Oprocentowanie: </label>
										<input id="z" type="text"  name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
" /><br />
										<input type="submit" value="Oblicz ratę" style="margin-top:1em" />
										
										</form>	
									</div>
																	</section>
							</article>

					</div>

				<!-- Footer -->
					<div id="footer">
						<ul class="copyright">
							<li>&copy; AP</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>

			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
}
