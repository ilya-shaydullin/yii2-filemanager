<?php
use ilusha2012\filemanager\Module;
use ilusha2012\filemanager\widgets\TopMenu;

$this->beginContent('@app/views/layouts/main.php');?>

	<?php
	if (!Module::getInstance()->rbac || (Yii::$app->user->can('filemanagerManageFiles') || Yii::$app->user->can('filemanagerManageOwnFiles') || Yii::$app->user->can('filemanagerManageSettings'))) {
		echo TopMenu::widget();
	}
	?>
	<?= $content;?>
	
	<?php 
$this->endContent();