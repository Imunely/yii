<?php

namespace api\modules\v1\models\other;

use Yii;
use yii\base\Model;

use api\modules\v1\models\db\User;

/**
 * Signup form
 */
class SignForm extends Model
{
    public $username;
    public $phone;
    public $password;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\api\modules\v1\models\db\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['phone', 'trim'],
            ['phone', 'required'],
            ['phone', 'match', 'pattern' => "/^\d+$/", 'message' => 'Phone must be number'],
            ['phone', 'unique', 'targetClass' => '\api\modules\v1\models\db\User', 'message' => 'This phone  has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],
        ];
    }

    /**
     * Signs user up.
     *
     * @return array|null whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {

            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->phone = $this->phone;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateAccessToken();
        $user->generatePhoneVerificationToken();

        return $user->save() ? ['token' => $user->access_token, 'code' => $user->auth_code] : null;
    }
}
