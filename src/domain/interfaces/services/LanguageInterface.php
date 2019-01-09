<?php

namespace yii2module\lang\domain\interfaces\services;

use yii\web\NotFoundHttpException;
use yii2lab\domain\interfaces\services\ReadAllInterface;
use yii2lab\domain\interfaces\services\ReadInterface;
use yii2module\lang\domain\entities\LanguageEntity;

interface LanguageInterface extends ReadInterface {
	
	/**
	 * @return LanguageEntity
	 * @throws NotFoundHttpException
	 */
	public function oneCurrent();
	public function saveCurrent($language);
	
}
