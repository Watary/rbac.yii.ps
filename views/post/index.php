<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 22.05.2017
 * Time: 17:20
 */

foreach ($model as $item){ ?>
    <div class="well">
        <h3><?= $item->title ?></h3>
        <p><?= $item->description ?></p>
    </div>
<?php }