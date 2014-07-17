<?php

namespace app\controllers;

use yii\rest\ActiveController;

class XuserController extends ActiveController
{
    public $modelClass = 'app\models\Xuser';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
}
