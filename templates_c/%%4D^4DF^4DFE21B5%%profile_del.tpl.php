<?php /* Smarty version 2.6.26, created on 2010-03-09 14:32:36
         compiled from profile_del.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<br clear="all" />
<div id="main_wrapper" class="">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left_menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="profil_content" class="">
	<div id="profil_style" class="">
	<h1>SUPPRESSION DU PROFILE</h1>
	<fieldset>
	<a href="profile.php?modif=1" class="control_menu">Modifier</a>
	<a href="profile.php?sup=1" class="control_menu">Supprimer</a>
	<form action="profile.php?search=1" method="post">
    <img name="Photo" src="" width="32" height="32" alt="" style="background-color: #999999" />
    <img src="../3_web_computing.jpg" width="450" height="350" />
	<p>Recherche de login <td><input id="search" type="text" name="search" /></td><fieldset class="buttons">
	<input style="margin-right:50%" type="submit" value="Valider" /></fieldset>
	</form>
	<form action="profile.php?sup=2" method="post">
	<p style="margin:10px;"><p>Login : <?php echo $this->_tpl_vars['info']['1']; ?>
 </p> Pass : <td><input id="pass" type="password" name="pass" /></td>
	<br />Pass again : <td><input id="pass2" type="password" name="pass2" /></td><fieldset class="buttons">
	<input style="margin-right:50%" type="submit" value="Valider" /></fieldset>
	<p><?php echo $this->_tpl_vars['fail']; ?>
</p>
	</form>
	</fieldset>
	</div>
	</div>
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>