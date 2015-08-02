<?php

namespace kingzeus\material\asset;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Bootstrap Material css and js files.
 *
 * @author Romanos Tsouroplis <rom-dim@hotmail.com>
 */
class BootMaterialCssAsset extends AssetBundle
{
	public $sourcePath = '@bower/bootstrap-material-design/dist';
	public $css = [
		'css/ripples.min.css',
		'css/material-fullpalette.min.css'
	];
	public $depends = [
		'yii\bootstrap\BootstrapAsset',
	];
}
