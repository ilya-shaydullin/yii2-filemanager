<?php

use vommuan\filemanager\assets\FilemanagerAsset;
use vommuan\filemanager\Module;
use vommuan\filemanager\models\Tag;
use yii\helpers\ArrayHelper;
use yii\widgets\ListView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['moduleBundle'] = FilemanagerAsset::register($this);
?>

<header id="header">
    <span class="glyphicon glyphicon-picture"></span>
    <?= Module::t('main', 'File manager');?>
</header>

<div id="filemanager" data-url-info="<?= Url::to(['file/info']) ?>">
    <?php echo ListView::widget([
        'dataProvider' => $dataProvider,
        'layout' => '<div class="items">{items}</div>{pager}',
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(
                Html::img($model->getIcon($this->params['moduleBundle']->baseUrl))
                    . '<span class="checked glyphicon glyphicon-check"></span>',
                '#mediafile',
                ['data-key' => $key]
            );
        },
    ]);?>

    <div class="dashboard">
        <p>
            <?= Html::a(
                '<span class="glyphicon glyphicon-upload"></span> ' . Module::t('main', 'Upload manager'),
                ['file/uploadmanager'],
                ['class' => 'btn btn-default']
            ); ?>
        </p>
        <div id="fileinfo"></div>
    </div>
</div>