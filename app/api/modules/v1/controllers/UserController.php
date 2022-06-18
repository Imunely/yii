<?php

namespace api\modules\v1\controllers;

use api\modules\v1\models\other\LoginForm;
use api\modules\v1\models\other\SignForm;
use api\modules\v1\models\other\VerifyPhoneForm;
use yii\rest\ActiveController;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii;

/**
 * User Controller API
 */
class UserController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\db\User';

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        
        $behaviors['authenticator'] = [
            'class' => HttpBearerAuth::class,
            'except' => ['login', 'sign', 'verifyphone']
        ];

        return $behaviors;
    }

    public function actionLogin()
    {
        $model = new LoginForm();

        if ($model->load(Yii::$app->getRequest()->getBodyParams(), '') && $data = $model->login()) {
            Yii::$app->response->setStatusCode(200);

            return $data;
        } else {
            Yii::$app->response->setStatusCode(401);

            return $model->getFirstErrors();
        }
    }

    public function actionVerifyphone()
    {
        $model = new VerifyPhoneForm();

        if ($model->load(Yii::$app->getRequest()->getBodyParams(), '') && $data = $model->verify()) {
            Yii::$app->response->setStatusCode(200);

            return $data;
        } else {
            Yii::$app->response->setStatusCode(401);

            return $model->getFirstErrors();
        }
    }


    public function actionSign()
    {
        $model = new SignForm();

        if ($model->load(Yii::$app->getRequest()->getBodyParams(), '') && $data = $model->signup()) {
            Yii::$app->response->setStatusCode(200);

            return $data;
        } else {
            Yii::$app->response->setStatusCode(406);

            return $model->getFirstErrors();
        }
    }


    public function actionGo()
    {
        return 'Ok';
    }
}
