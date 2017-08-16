<?php

use ilusha2012\filemanager\assets\FileGalleryAsset;
use ilusha2012\filemanager\Module;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $mediaFiles array of ilusha2012\filemanager\models\MediaFile */

$bundle = FileGalleryAsset::register($this);
?>

<?php 
foreach ($mediaFiles as $mediaFile) :?>
	<div class="selected-file">
		<?= Html::img(
			$mediaFile->getIcon($bundle->baseUrl) . '?' . $mediaFile->updated_at, ArrayHelper::merge(
				[
					'alt' => $mediaFile->alt,
					'class' => 'selected-file__image',
					'data' => [
						'id' => $mediaFile->id,
					],
				],
				$imageOptions
			)
		);?>
	</div>
	<?php
endforeach;?>