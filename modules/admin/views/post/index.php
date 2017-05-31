<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right">
                <?php if (Yii::$app->user->can('createPost')): ?>
                    <p>
                        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
                    </p>
                <?php endif; ?>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->

        <div class="box-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
                    'title',
                    'description:ntext',
                    'author',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
