<?php

namespace app\controllers;

class p8Controller extends \yii\web\Controller
{
    public function actionEncryptionWithUserManagedKeys()
    {
        return $this->render('encryption-with-user-managed-keys');
    }

}
