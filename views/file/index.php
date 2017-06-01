<?php

use zozoh94\filemanager\assets\FileManagerAsset;
use zozoh94\filemanager\Module;
use zozoh94\filemanager\widgets\FileManager;

/* @var $this yii\web\View */

$this->title = Module::t('main', 'Files');

$this->params['breadcrumbs'][] = [
	'label' => Module::t('main', 'File manager'),
	'url' => ['/' . Module::getInstance()->uniqueId . '/file/index']
];

$this->params['breadcrumbs'][] = $this->title;

$widgetId = 'standalone-filemanager';

$this->registerJs("new FileManager({
	'widget': $('#{$widgetId}')
});");

?>

<div id="<?= $widgetId;?>">
	<?= FileManager::widget();?>
</div>