<?php

namespace app\controllers\auth;

use yii\web\Controller;

class UserController extends Controller
{
    /**
     * Login.
     *
     * @return string
     */
    public function actionLogin()
    {
        return $this->render('login');
    }
}
