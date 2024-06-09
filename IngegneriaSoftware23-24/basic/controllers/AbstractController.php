<?php

namespace app\controllers;

class AbstractController extends \yii\web\Controller
{
    public function actionAbstract()
    {
        return $this->render('abstract');
    }

}
