<?php

namespace app\controllers;

class p1Controller extends \yii\web\Controller
{
    public function actionProtectionAgainstTracking()
    {
        return $this->render('protection-against-tracking');
    }

}
