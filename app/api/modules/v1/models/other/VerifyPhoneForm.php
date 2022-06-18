<?php

namespace api\modules\v1\models\other;


use Yii;
use yii\base\Model;
use api\modules\v1\models\db\User;

/**
 * Login form
 */
class VerifyPhoneForm extends Model
{
    public $code;
    public $token;

    private $_user;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['code', 'token'], 'required'],
            [['code', 'token'], 'validateCodeAndToken']
            // rememberMe must be a boolean value
            // password is validated by validatePassword()
            //['token', 'validateCodeAndToken'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validateCodeAndToken($attribute, $params)
    {
        if (!$this->hasErrors()) {

            if (!$this->getUser()) {
                $this->addError($attribute, 'Incorrect code or token.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public function verify()
    {
        if ($this->validate()) {
            $this->_user->generateAccessToken();
            $this->_user->setVerify();
            $this->_user->save();

            return $this->getUser();
        }

        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByCodeAndToken($this->code, $this->token);
        }

        return $this->_user;
    }
}
