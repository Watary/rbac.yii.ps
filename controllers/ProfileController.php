<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 31.05.2017
 * Time: 9:58
 */

namespace app\controllers;

use app\models\Friend;
use Yii;
use yii\web\Controller;
use app\models\User;

class ProfileController extends Controller
{

    public $own = false;
    public $friend = false;

    public function actionIndex($id = NULL)
    {
        return $this->actionView($id);
    }

    public function actionView($id = NULL)
    {
        if(!$id){
            $id = Yii::$app->getUser()->identity->id;
        }

        $this->isOwn($id);
        $this->isFriend($id);

        $model = User::getUserBuId($id);

        $user['id'] = $model['id'];
        $user['username'] = $model['username'];
        $user['email'] = $model['email'];
        $user['status'] = $model['status'];
        $user['created_at'] = $model['created_at'];
        $user['updated_at'] = $model['updated_at'];
        $user['friends'] = $model->friends;
        $user['own'] = $this->own;
        $user['friend'] = $this->friend;
        $user['avatar'] = $model->getAvatar();

        return $this->render('index', ['user' => $user]);
    }

    public function actionAddFriend($id = NULL)
    {
        if($id) {
            $model = new Friend();
            $model->addFriend($id);
        }

        return $this->redirect('/profile/view/' . $id);
    }

    public function actionRemoveFriend($id = NULL)
    {
        if($id) {
            $model = new Friend();
            $model->removeFriend($id);
        }

        return $this->redirect('/profile/view/' . $id);
    }

    public function actionWriteMessage($id = NULL)
    {
        echo 'write-message';
        return $this->redirect('/profile/view/' . $id);
    }

    private function isOwn($id)
    {
        if (Yii::$app->getUser()->identity->id == $id){
            $this->own = true;
        }
        return;
    }

    private function isFriend($id)
    {
        $model = new Friend();

        if ($model->isFriends($id, Yii::$app->getUser()->identity->id)){
            $this->friend = true;
        }
        return;
    }

}