<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use mdm\admin\models\User as UserModel;
use yii\helpers\Url;

class User extends UserModel
{

    public function uploadFiles($folder = 'main')
    {
        $url = 'uploads/' . $folder . '/' . $this->imageFile->baseName . '.' . $this->imageFile->extension;

        if($this->imageFile->saveAs($url)){
            return $url;
        }else{
            return NULL;
        }

    }

    public function getAvatar(){
        if ($this->avatar) {
            return Url::home(true) . $this->avatar;
        }else{
            return Url::home(true) . 'uploads/avatar/avatar.png';
        }
    }

}
