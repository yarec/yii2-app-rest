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

    public function actionSearch($keyword) {
        #$result = SolrService::search($keyword);
        $result = ['x'=>1,'y'=>2];
        return $result;
    }
}
