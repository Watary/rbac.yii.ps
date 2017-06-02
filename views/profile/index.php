<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 31.05.2017
 * Time: 10:38
 */

use yii\helpers\Html;

$this->title = $user['username'];
?>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="list-group">
                <?= Html::a('Profile', '/profile/view/' . $user['id'], ['class' => 'list-group-item']) ?>
                <!-- <?= Html::a('Friends <span class="badge pull-right">4</span>', '/profile/friends/' . $user['id'], ['class' => 'list-group-item']) ?>
                <?= Html::a('Messages <span class="badge pull-right">25</span>', '/profile/messages', ['class' => 'list-group-item']) ?>-->
                <?php if($user['own']){ ?>
                    <?= Html::a('Setting', '/profile/setting', ['class' => 'list-group-item']) ?>
                <?php } ?>
            </div>
        </div>

        <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">User info</h3>
                </div>
                <div class="panel-body">
                    <div class="col-sm-4">
                        <img src="<?= $user['avatar'] ?>" alt="avatar" class="img-circle">

                        <div class="text-center" style="font-size: 20px; margin-top: 10px; margin-bottom: 10px;">
                            <a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>

                        <?php if(!$user['own']){ ?>
                            <div class="list-group">
                                <?= $user['friend'] ? Html::a('Remove friends', '/profile/remove-friend/' . $user['id'], ['class' => 'list-group-item text-center']) : Html::a('Add to friends', '/profile/add-friend/' . $user['id'], ['class' => 'list-group-item text-center']) ?>
                                <?= Html::a('Write message', '/profile/write-message/' . $user['id'], ['class' => 'list-group-item text-center']) ?>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="col-sm-8">
                        <ul class="list-group">
                            <li class="list-group-item">Username: <?= $user['username'] ?></li>
                            <li class="list-group-item">Status: <?= $user['status'] == 10 ? 'active': 'not active';  ?></li>
                            <li class="list-group-item">Created at: <?= Yii::$app->formatter->asDate($user['created_at']) ?></li>
                            <li class="list-group-item">Updated at: <?= Yii::$app->formatter->asDate($user['updated_at']) ?></li>
                            <li class="list-group-item">Email: <a href="mailto:<?= $user['email'] ?>"><?= $user['email'] ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Friends</h3>
                </div>
                <div class="panel-body">
                    <?php foreach ($user['friends'] as $item) { ?>
                        <div><?= Html::a($item->friends->username, '/profile/view/' . $item->friends->id, ['class' => 'btn']) ?></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

