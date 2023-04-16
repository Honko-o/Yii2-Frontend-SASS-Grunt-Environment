<?php

/** @var \yii\web\View $this */

/** @var string $content */

use frontend\assets\AppAsset;
use yii\helpers\Html;

?>

<?php
    AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta name="robots" content="noindex, nofollow">

    <meta charset="<?= Yii::$app->charset ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language"
        content="<?= Yii::$app->language ?>">
    <meta http-equiv="Content-Type"
        content="text/html; charset=<?= Yii::$app->charset ?>" />

    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />

    <meta name="msapplication-tap-highlight" content="no">

    <?php $this->registerCsrfMetaTags() ?>

    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <?= $this->render('header.php', [
                        //'directoryAsset' => $directoryAsset,
                    ]);
?>
        <div class="app-main">


            <div class="app-main__outer">
                <?= $this->render('content.php', [
            'content' => $content,
           // 'directoryAsset' => $directoryAsset
        ]) ?>
            </div>

        </div>
    </div>


    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
