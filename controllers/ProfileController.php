<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 31.05.2017
 * Time: 9:58
 */

namespace app\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use app\models\User;

class ProfileController extends Controller
{

    public $own = false;
    public $friend = false;

    public function actionIndex($id = NULL){
        return $this->actionView($id);
    }

    public function actionView($id = NULL){

        if(!$id){
            $id = Yii::$app->getUser()->identity->id;
        }

        $this->ifOwn($id);

        $model = User::getUserBuId($id);

        $user['id'] = $model['id'];
        $user['username'] = $model['username'];
        $user['email'] = $model['email'];
        $user['status'] = $model['status'];
        $user['created_at'] = $model['created_at'];
        $user['updated_at'] = $model['updated_at'];

        $user['own'] = $this->own;
        $user['friend'] = $this->friend;

        if ($model['avatar']) {
            $user['avatar'] =  Url::home(true) . $model['avatar'];
        }else{
            $user['avatar'] =  Url::home(true) . 'uploads/avatar/avatar.png';
        }

        return $this->render('index', ['user' => $user]);
    }

    public function actionAddFriend($id = NULL){
        echo 'Add to friends';
        return $this->redirect('/profile/view/' . $id);
    }

    public function actionWriteMessage($id = NULL){
        echo 'write-message';
        return $this->redirect('/profile/view/' . $id);
    }

    public function ifOwn($id){
        if (Yii::$app->getUser()->identity->id == $id){
            $this->own = true;
        }
        return;
    }

}