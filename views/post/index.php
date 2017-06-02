<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 22.05.2017
 * Time: 17:20
 */

foreach ($model as $item){ ?>
    <div class="well clearfix">
        <h3><?= $item->title ?></h3>
        <p><?= $item->description ?></p>
        <p class="pull-right"><?= \yii\bootstrap\Html::a($item->authore->username, '/profile/view/' . $item->authore->id) ?></p>
    </div>
<?php }