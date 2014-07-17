<?php

namespace app\models;

use Yii;

use yii\web\Link;
use yii\web\Linkable;
use yii\helpers\Url;

/**
 * This is the model class for table "xuser".
 *
 * @property string $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property integer $admin
 * @property string $last_login
 * @property integer $is_active
 * @property string $pass
 */
class Xuser extends \yii\db\ActiveRecord implements Linkable
{
    public function getLinks()
    {
        return [
            Link::REL_SELF => Url::to(['user', 'id' => $this->id], true),
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xuser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['admin', 'is_active'], 'integer'],
            [['last_login'], 'safe'],
            [['id'], 'string', 'max' => 20],
            [['first_name', 'last_name', 'email'], 'string', 'max' => 30],
            [['pass'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'admin' => 'Admin',
            'last_login' => 'Last Login',
            'is_active' => 'Is Active',
            'pass' => 'Pass',
        ];
    }
}
