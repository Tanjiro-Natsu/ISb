<?php

namespace app\controllers;

class p15Controller extends \yii\web\Controller
{
    public function actionAnonymousReputationBasedBlacklisting()
    {
        return $this->render('anonymous-reputation-based-blacklisting');
    }

}
