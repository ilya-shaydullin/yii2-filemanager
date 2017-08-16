<?php

namespace ilusha2012\filemanager\models\forms;

use ilusha2012\filemanager\models\MediaFile;
use yii\base\Model;
use yii\web\UploadedFile;

/**
 * Form for upload files
 * 
 * @license MIT
 * @author Michael Naumov <ilusha2012@gmail.com>
 */
class UploadFileForm extends Model
{
	public $file;
	
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['file'], 'required'],
			[['file'], 'file'],
		];
	}
	
	/**
	 * Get handler to save file by type
	 * 
	 * @return mixed
	 */
	public function getHandler()
	{
		$this->file = UploadedFile::getInstance($this, 'file');
		
		return new MediaFile(['file' => $this->file]);
	}
}