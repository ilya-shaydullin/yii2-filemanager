<?php

use zozoh94\filemanager\assets\FileInputAsset;
use zozoh94\filemanager\widgets\FileManager;

FileInputAsset::register($this);
?>

<div class="input-widget-form">
	<?= $input;?>

	<div class="filemanager-modal modal fade" id="<?= $widgetId;?>" data-cropper-options='<?= $cropperOptions;?>' data-backdrop="static">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<?= FileManager::widget([
						'multiple' => $multiple,
					]);?>
				</div>
			</div>
		</div>
	</div>
</div>