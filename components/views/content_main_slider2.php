<?php
/**
 * @var $this ContentMain
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/appic
 *
 */
?>

<?php //begin.head-text-area ?>
<div class="section site-header header-style-3 banner">
	<div class="container">
		<div class="row">
			<div class="hidden-xs col-md-6 col-lg-6">
				<div id="banner-slides">
					<div class="item">
						<div class="slider-img-inner">
							<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/mockfeau-2.png" alt="">
						</div>
					</div>
					<div class="item">
						<div class="slider-img-inner">
							<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/mockup.png" alt="">
						</div>
					</div>
					<div class="item">
						<div class="slider-img-inner">
							<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/preview/IPhone-71.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6">
				<div class="head-text-area type-1">
					<div class="h-text-inner">
						<h2 class="type-headings wow fadeInDown"><?php echo $this->title;?></h2>
						<a href="#" class="btn btn-primary action-btn wow fadeInUp"><span><?php echo Yii::t('phrase', 'GET STARTED');?></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>