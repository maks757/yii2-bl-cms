<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        [
            'label' => Yii::t('shop', 'Shop'),
            'items' => [
                [
                    'label' => Yii::t('shop', 'Products'),
                    'url' => Url::toRoute(['/shop/product']),
                ],
                [
                    'label' => Yii::t('shop', 'Categories'),
                    'url' => Url::toRoute(['/shop/category']),
                ],
                [
                    'label' => Yii::t('shop', 'Vendors'),
                    'url' => Url::toRoute(['/shop/vendor'])
                ],
                [
                    'label' => Yii::t('shop', 'Countries'),
                    'url' => Url::toRoute(['/shop/country']),
                ]
            ]
        ],
        [
            'label' => 'Materials',
            'items' => [
                [
                    'label' => 'Articles',
                    'url' => Url::toRoute(['/articles'])
                ],
                [
                    'label' => 'Article Categories',
                    'url' => Url::toRoute(['/articles/category'])
                ],
            ]
        ],
        [
            'label' => 'Settings',
            'items' => [
                [
                    'label' => 'Languages',
                    'url' => Url::toRoute(['/languages'])
                ],
                [
                    'label' => 'Redirects',
                    'url' => Url::toRoute(['/redirect'])
                ],
            ]
        ]
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
