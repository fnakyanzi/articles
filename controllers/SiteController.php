<?php

namespace app\controllers;

use Yii;
use app\models\LoginForm;
use yii\web\Controller;
use app\models\Interns;
use yii\web\Response;
use yii\web\ErrorAction;
use yii\captcha\CaptchaAction;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class SiteController extends Controller
{


    public $layout = 'guest';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSignup()
{
    $intern = new Interns();

    if ($intern->load(Yii::$app->request->post())) {

        
        $intern->password_hash = Yii::$app->security->generatePasswordHash($intern->password_hash);

        
        $intern->auth_key = Yii::$app->security->generateRandomString();

        $intern->save(false);

        return $this->redirect(['login']);
    }

    return $this->render('signup', [
        'model' => $intern
    ]);
}
    
    public function actionLogin()
{
    $model = new LoginForm();

    if (Yii::$app->request->isPost) {

        $username = Yii::$app->request->post('LoginForm')['username'] ?? null;
        $password = Yii::$app->request->post('LoginForm')['password'] ?? null;

        $intern = Interns::findOne(['username' => $username]);

        if ($intern && Yii::$app->security->validatePassword($password, $intern->password_hash)) {

            Yii::$app->user->login($intern);

            return $this->redirect(['/articles/create']);
        }
    }

    return $this->render('login', [
        'model' => $model,
    ]);
}

    public function actionLogout()
{
    Yii::$app->user->logout();

    return $this->redirect(['site/index']);
}
    
    // public function behaviors()
    // {
    //     return [
    //         'access' => [
    //             'class' => AccessControl::class,
    //             'only' => ['logout'],
    //             'rules' => [
    //                 [
    //                     'actions' => ['logout'],
    //                     'allow' => true,
    //                     'roles' => ['@'],
    //                 ],
    //             ],
    //         ],

    //         'verbs' => [
    //             'class' => VerbFilter::class,
    //             'actions' => [
    //                 'logout' => ['post'],
    //             ],
    //         ],
    //     ];
    // }

    // public function actions()
    // {
    //     return [
    //         'error' => [
    //             'class' => ErrorAction::class,
    //         ],

    //         'captcha' => [
    //             'class' => CaptchaAction::class,
    //         ],
    //     ];
    // }

    // public function actionIndex()
    // {
    //     return $this->render('index');
    // }

    // public function actionLogin()
    // {
    //     $login = new LoginForm();

    //     if ($login->load(Yii::$app->request->post()) && $login->login()) {
    //         return $this->redirect(['/intern/view']);
    //     }

    //     return $this->render('login', [
    //         'model' => $login
    //     ]);
    // }

    // public function actionLogout()
    // {
    //     Yii::$app->user->logout();

    //     return $this->goHome();
    // }
}