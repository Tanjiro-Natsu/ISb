<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionPbd()
    {
        return $this->render('pbd');
    }
    public function actionPp()
    {
        return $this->render('pp');
    }
    public function actionScenari()
    {
        return $this->render('scenari');
    }
    public function actionVulnerabilities()
    {
        return $this->render('vulnerabilities');
    }
    
    public function actionPds()
    {
        return $this->render('pds');
    }
    public function actionControl()
    {
        return $this->render('control');
    }
    
    public function actionAbstract()
    {
        return $this->render('abstract');
    }
    public function actionDemostrate()
    {
        return $this->render('demostrate');
    }
    public function actionEnforce()
    {
        return $this->render('enforce');
    }
    
    public function actionHide()
    {
        return $this->render('hide');
    }
    public function actionInform()
    {
        return $this->render('inform');
    }
    public function actionMinimize()
    {
        return $this->render('minimize');
    }
    public function actionSeparete()
    {
        return $this->render('separete');
    }
    public function actionApplicazione()
    {
        return $this->render('applicazione');
    }
    public function actionProtectionAgainstTracking()
    {
        return $this->render('protection-against-tracking');
    }
    public function actionStripInvisibleMetadata()
    {
        return $this->render('strip-invisible-metadata');
    }
    public function actionAddedNoiseMeasurementObfuscation()
    {
        return $this->render('added-noise-measurement-obfuscation');
    }
    public function actionDataBreachNotificationPattern()
    {
        return $this->render('data-breach-notification-pattern');
    }
    public function actionUnusualActivities()
    {
        return $this->render('unusual-activities');
    }
    public function actionMinimalInformationAsymmetry()
    {
        return $this->render('minimal-information-asymmetry');
    }
    public function actionOnionRouting()
    {
        return $this->render('onion-routing');
    }
    public function actionEncryptionWithUserManagedKeys()
    {
        return $this->render('encryption-with-user-managed-keys');
    }
    public function actionUseOfDummies()
    {
        return $this->render('use-of-dummies');
    }
    public function actionFederatedPrivacyImpactAssessment()
    {
        return $this->render('federated-privacy-impact-assessment');
    }
    public function actionObligationManagement()
    {
        return $this->render('obligation-management');
    }
    public function actionStickyPolicies()
    {
        return $this->render('sticky-policies');
    }
    public function actionPersonalDataStore()
    {
        return $this->render('personal-data-store');
    }
    public function actionUserDataConfinementPattern()
    {
        return $this->render('user-data-confinement-pattern');
    }
    public function actionAnonymousReputationBasedBlacklisting()
    {
        return $this->render('anonymous-reputation-based-blacklisting');
    }
    public function actionLocationGranularity()
    {
        return $this->render('location-granularity');
    }
    public function actionDiscouragingBlanketStrategies()
    {
        return $this->render('discouraging-blanket-strategies');
    }
    public function actionReciprocity()
    {
        return $this->render('reciprocity');
    }
    public function actionIncentivizedParticipation()
    {
        return $this->render('incentivized-participation');
    }
    public function actionOutsourcing()
    {
        return $this->render('outsourcing');
    }
    public function actionSignAnAgreementToSolveLackOfTrustOnTheUseOfPrivateDataContex()
    {
        return $this->render('sign-an-agreement-to-solve-lack-of-trust-on-the-use-of-private-data-contex');
    }
    public function actionPseudonymousMessaging()
    {
        return $this->render('pseudonymous-messaging');
    }
    public function actionPsuedonymousIdentity()
    {
        return $this->render('psuedonymous-identity');
    }
    public function actionAggregationGateway()
    {
        return $this->render('aggregation-gateway');
    }
    public function actionInformedSecurePasswords()
    {
        return $this->render('informed-secure-passwords');
    }
    public function actionEseguibile()
    {
        return $this->render('eseguibile');
    }
    public function actionRicerca()
    {
        return $this->render('ricerca');
    }


}
