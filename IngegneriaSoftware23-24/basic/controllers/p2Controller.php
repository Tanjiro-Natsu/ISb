<?php

namespace app\controllers;

class p2Controller extends \yii\web\Controller
{
    public function actionStripInvisibleMetadata()
    {
        return $this->render('strip-invisible-metadata');
    }

}
