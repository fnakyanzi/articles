<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class Interns extends ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'interns';
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'username', 'password_hash', 'university_id', 'auth_key'], 'required'],
            [['first_name', 'last_name', 'email', 'username', 'password_hash'], 'string'],
            [['university_id'], 'integer'],
            [['auth_key'], 'string', 'max' => 255],
        ];
    }

    public function getArticles()
    {
        return $this->hasMany(Articles::class, ['interns_id' => 'id']);
    }
    

    public function getUniversity()
    {
        return $this->hasOne(University::class, ['id' => 'university_id']);
    }
}