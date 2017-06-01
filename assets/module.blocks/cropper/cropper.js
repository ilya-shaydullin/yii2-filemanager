function cropperInit(options) {
	'use strict';

	options = options || {};

	$('.cropper .controls').on('click', '.controls__rotate', function (event) {
		event.preventDefault();

		var controlButton = $(event.currentTarget);

    var crop = controlButton.closest('.cropper').find('.crop-image').eq(0);
		if (controlButton.hasClass('controls__rotate_left')) {
			crop.cropper('rotate', -90);
			crop.cropper('crop');
		} else {
			crop.cropper('rotate', 90);
			crop.cropper('crop');
		}
	});


	$.fn.cropper.setDefaults({
		autoCropArea: 1,
		toggleDragModeOnDblclick: false,
		movable: false,
		viewMode: 2,
		zoomable: false,
		crop: function(event) {
			$(event.currentTarget).closest('.cropper').find('.cropper__rotate-input').eq(0).val(event.rotate);

			$(event.currentTarget).closest('.cropper').find('.cropper__crop-x-input').eq(0).val(event.x);
			$(event.currentTarget).closest('.cropper').find('.cropper__crop-y-input').eq(0).val(event.y);
			$(event.currentTarget).closest('.cropper').find('.cropper__crop-width-input').eq(0).val(event.width);
			$(event.currentTarget).closest('.cropper').find('.cropper__crop-height-input').eq(0).val(event.height);
		}
	});

	$('.crop-image').cropper(options);
}
