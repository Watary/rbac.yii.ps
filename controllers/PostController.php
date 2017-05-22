<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 22.05.2017
 * Time: 17:17
 */

namespace app\controllers;


use yii\base\Controller;
use app\models\Post;

class PostController extends Controller
{

    public function actionIndex(){
        $model = Post::find()->all();

        return $this->render('index', ['model' => $model]);
    }

}