<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\Url;
use common\models\Item;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $request_params = Yii::$app->request->get();
        if($request_params) {
            $sharing_url = Url::to('', true);
            $this->view->registerMetaTag(['property' => 'og:locale', 'content' => Yii::$app->language]);
            $this->view->registerMetaTag(['property' => 'og:url', 'content' => $sharing_url]);
            $sharing_image = '';
            $sharing_title = '';
            $sharing_description = '';
            if(isset($request_params['auction_id'])) {
                /** @var $auction_info Item */
                $auction_info = Item::find()->where(['id' => $request_params['auction_id']])->one();
                $sharing_image = $auction_info->getItemImage();
                $sharing_title = $auction_info->getAuctionTitle();
                $sharing_description = $auction_info->getAuctionSubTitle();
            }
            if (isset($request_params['page'])) {
                $sharing_image = Yii::getAlias('@frontend_url') . DIRECTORY_SEPARATOR . 'images/mazad.png';
                $sharing_title = Yii::t('app', 'Mazad V3 Website Title');
                $sharing_description = Yii::t('app', 'Mazad V3 Website description');
            }
            $this->view->registerMetaTag(['property' => 'og:image', 'content' => $sharing_image, 'itemprop' => 'image']);
            $this->view->registerMetaTag(['property' => 'og:title', 'content' => $sharing_title]);
            $this->view->registerMetaTag(['property' => 'og:description', 'content' => $sharing_description]);
            $this->view->registerMetaTag(['name' => 'twitter:url', 'content' => $sharing_url]);
            $this->view->registerMetaTag(['name' => 'twitter:title', 'content' => $sharing_title]);
            $this->view->registerMetaTag(['name' => 'twitter:description', 'content' => $sharing_description]);
            $this->view->registerMetaTag(['name' => 'twitter:image', 'content' => $sharing_image]);
        }
        return $this->render('index');
    }
}
