<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use app\models\admin\User;

class AdminController extends Controller
{
    public $layout='admin';
    /**
     * @inheritdoc
     */

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'matchCallback' => function () {
                            return true;//AdminController::isAdminGroup();
                        }
                    ],
                ],
            ],
        ];
    }

    public static function isAdmin(){
        return AdminController::getCurrentRole() === 'admin';
    }
    public static function isAdminGroup(){
        return in_array(AdminController::getCurrentRole(),['admin','moderator']);
    }
    public static function getCurrentRole(){
        $currentUserId = (!empty(Yii::$app->user->identity['id']))? Yii::$app->user->identity['id'] : null;
        return (!empty($currentUserId))? User::find()->where(['id' => $currentUserId])->one()['status'] : null;
    }
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }
    public function actionIndex()
    {
        return $this->render('index');
    }

}
