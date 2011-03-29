<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php print Configure::read('App.name') ?>
		<?php //echo $title_for_layout; ?>
	</title>
	<?php
		// echo $this->Html->css('blueprint/blueprint/screen.css');
		echo $this->Html->css('default');
		echo $this->Html->css('fonts');
		//echo $this->Html->css('forms');
		//echo $this->Html->css('grids');
		//echo $this->Html->css('gui');
		echo $this->Html->css('smoothness/jquery-ui-1.8.10.custom.css');
		echo $this->Html->script('jquery-ui/js/jquery-1.4.4.min.js');
		echo $this->Html->script('jquery-ui/js/jquery-ui-1.8.10.custom.min.js');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div>
				<?php print $html->image('minilogo.png', array('id' => 'logo')) ?>
				<div class="app-name"><?php print $html->link(Configure::read('App.name'), '/') ?></div>
				<div class="app-by">an application created by Broad Institute Administrative Computing</div>
			</div>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div>
		<div id="footer">
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>