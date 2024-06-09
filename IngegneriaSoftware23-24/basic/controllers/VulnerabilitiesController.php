<?php

namespace app\controllers;

class VulnerabilitiesController extends \yii\web\Controller
{
    public function actionVulnerabilities()
    {
        return $this->render('vulnerabilities');
    }

}
