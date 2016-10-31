<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\assets;

use yii\web\AssetBundle;

/**
 * HumHub Core Api Asset
 */
class CoreApiAsset extends AssetBundle
{

    /**
     * @inheritdoc
     */
    public $basePath = '@webroot';
    
    /**
     * @inheritdoc
     */
    public $baseUrl = '@web';
    
    /**
     * @inheritdoc
     */
    public $css = [];
    
    /**
     * @inheritdoc
     */
    public $jsOptions = ['position' => \yii\web\View::POS_BEGIN];
    
    /**
     * @inheritdoc
     */
    public $js = [
        'js/humhub/legacy/jquery.flatelements.js',
        'js/humhub/legacy/jquery.loader.js',
        'js/humhub/legacy/app.js',
        'js/humhub/humhub.core.js', 
        'js/humhub/humhub.util.js', 
        'js/humhub/humhub.log.js', 
        //'js/humhub/humhub.scripts.js', 
        'js/humhub/humhub.ui.additions.js',
        'js/humhub/humhub.ui.loader.js', 
        'js/humhub/humhub.ui.modal.js', 
        'js/humhub/humhub.client.js', 
        'js/humhub/humhub.client.pjax.js', 
        'js/humhub/humhub.action.js',
        'js/humhub/humhub.ui.status.js'
    ];
    
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'humhub\assets\BluebirdAsset',
    ];

}
