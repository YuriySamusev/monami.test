<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15.06.2017
 * Time: 20:50
 */

namespace app\controllers;


use yii\web\Controller;
use app\models\admin\Bloc;

class PublicController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'dynamicBlocs' => (new Bloc())->getDynamicBlocs(),
            'lastSectionName' => Bloc::$lastSectionName,
        ]);
    }
}