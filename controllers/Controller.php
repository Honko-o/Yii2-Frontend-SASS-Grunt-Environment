<?php

namespace frontend\controllers;

use yii\web\Controller as BaseController;

/**
 * Site controller
 */
class Controller extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
        ];
    }
}
