<div class="admin-default-index">

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Main information</h3>
            <div class="box-tools pull-right">

            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?= \app\models\User::getCount(); ?></h3>
                        <p>Users</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="http://rbac.yii.ps/admin/user" class="small-box-footer">
                        All users <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?= \app\models\Post::getCount(); ?></h3>
                        <p>Posts</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-list-alt"></i>
                    </div>
                    <a href="http://rbac.yii.ps/admin/post" class="small-box-footer">
                        All posts <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
