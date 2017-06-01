<?php
use zozoh94\filemanager\Module;
use zozoh94\filemanager\widgets\TopMenu;

$this->beginContent('@app/views/layouts/main.php');?>

	<?php
	if (!Module::getInstance()->rbac || (Yii::$app->user->can('filemanagerManageFiles') || Yii::$app->user->can('filemanagerManageOwnFiles') || Yii::$app->user->can('filemanagerManageSettings'))) {
		echo TopMenu::widget();
	}
	?>
	<?= $content;?>
	
	<?php 
$this->endContent();