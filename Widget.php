<?php

namespace nepster\faceviewer;

use Yii;
use yii\helpers\Html;
use yii\base\InvalidParamException;
use yii\base\InvalidConfigException;
use yii\db\ActiveRecord;

/**
 * 
 * Class Face
 * @package common\modules\users\widgets
 * Виджет показывает лицевое изображение пользователя (аватар или фотографию)
 * 
 * 
 * ПРИМЕР 1:
 * 
 * \common\modules\users\widgets\faceviewer\FaceViewer::widget([
 *       'template'=>function($data) {
 *           var_dump($data);
 *       },
 *       'templateUrl'=>['/users/profile/view','login'=>'{username}'],
 *       'userId'=>$userId,
 *       'faceField' => 'photo_url',
 *   ]);
 * 
 * 
 * ПРИМЕР 2:
 * 
 * \common\modules\users\widgets\faceviewer\FaceViewer::widget([
 *       'template'=>'<div class="avatar min"><span>{face}</span>{username}</div>',
 *       'templateUrl'=>['/users/profile/view','login'=>'{username}'],
 *       'userId'=>$userId,
 *       'faceField' => 'photo_url',
 *   ]);
 * 
 * 
 * ПРИМЕР 3:
 * 
 * \common\modules\users\widgets\faceviewer\FaceViewer::widget([
 *       'template'=>'<div class="avatar min"><span>{face}</span>{username}</div>',
 *       'templateUrl'=>['/users/profile/view','login'=>'{username}'],
 *       'data'=>['username'=>'Денчик'],
 *       'faceField' => 'photo_url',
 *   ]);
 * 
 * 
 */
class Widget extends \yii\base\Widget
{

    /**
     * @inheritdoc
     */
    public function run()
    {
        return 1;

    }

}
