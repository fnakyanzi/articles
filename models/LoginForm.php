<?php

namespace app\models;

use Yii;
use yii\base\Model;

class LoginForm extends Model
{
    public $username;
    public $password;

    private $_intern = null;

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            ['password', 'validatePassword'],
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {

            $intern = $this->getIntern();

            if (!$intern || !Yii::$app->security->validatePassword($this->password, $intern->password_hash)) {

                $this->addError($attribute, 'Incorrect username or password.');

            }

        }
    }

    public function login()
    {
        if ($this->validate()) {

            return Yii::$app->user->login($this->getIntern());

        }

        return false;
    }

    public function getIntern()
    {
        if ($this->_intern === null) {

            $this->_intern = Interns::find()
                ->where(['username' => $this->username])
                ->one();

        }

        return $this->_intern;
    }
}