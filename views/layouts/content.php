<?php

use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

/**
 * @var $content mixed
 */

$content_h1 = '';

if (isset($this->blocks['content-header'])) {
    $content_h1 = $this->blocks['content-header'];
} else {
    if ($this->title !== null) {
        $content_h1 = \yii\helpers\Html::encode($this->title);
    } else {
        $content_h1 = \yii\helpers\Inflector::camel2words(
            \yii\helpers\Inflector::id2camel($this->context->module->id)
        );

        $content_h1 .= ($this->context->module->id !== \Yii::$app->id ? '' : '');
    }
}
?>

<div class="app-main__inner">
    <div class="app-page-title p-0 pl-5 pt-3">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div>
                    <div class="page-title-head center-elem">
                        <span class="d-inline-block"> <?= $content_h1 ?></span>
                    </div>
                    <div class="page-title-subheading opacity-10">
                        <nav class="" aria-label="breadcrumb">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="app-inner-layout">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>