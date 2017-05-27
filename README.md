Yii 2 Basic Project Template
============================

Yii 2 Basic Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
rapidly creating small projects.

DIRECTORY STRUCTURE
-------------------

    assets/             contains assets definition
    commands/           contains console commands (controllers)
    config/             contains application configurations
    controllers/        contains Web controller classes
    mail/               contains view files for e-mails
    models/             contains model classes
    rbac_rule/          contains custom ruls for user
    runtime/            contains files generated during runtime
    tests/              contains various tests for the basic application
    vendor/             contains dependent 3rd-party packages
    views/              contains view files for the Web application
    web/                contains the entry script and Web resources
        upload/         contains upload user images         



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Migrate

    yii migrate --migrationPath=@mdm/admin/migrations
    yii migrate --migrationPath=@yii/rbac/migrations
    yii migrate

### Config (web.php)

```php
$config = [
    ...
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            'post/*',
            'admin/*',  // access for admin panel
            'rbac/*',   // access for RBAC panels
        ]
    ],
    ...
]
```

CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.