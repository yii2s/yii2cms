<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\HualAsset;
use frontend\widgets\Column;

/* @var $this \yii\web\View */
/* @var $content string */

HualAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
</head>

<body>
<?php $this->beginBody() ?>
<!--椤堕儴logo鍜屽鑸?-->
<div id="toper">
    <div id="topcont">
        <div class="topcont_logo"><img src="/images/logo.png"/></div>
<<<<<<< HEAD
        <div class="topcont_nav">

            <ul>
                <li <?php if(Yii::$app->requestedAction->id=='index'):?> class="style hover" <?php endif?>><a href="/">网站首页</a><img src="/images/arrow.png" /></li>
                <?= Column::widget()?>
            </ul>
        </div>
=======
		 <div class="lei"><a href="#">绠€浣?/a>/<a href="#">绻佷綋</a>/<a href="#">ENGLISH</a></div>
       
>>>>>>> b9d41840f338e8f4d94fd01da754f55b703a4074
        <div class="topcont_dhlei">
			
			<div class="bshare-custom icon-medium" style="padding-top:19px; text-align:right;  font-size:14px; color:#868686; margin-left:5px;"><span style="margin-right:10px;">分享到</span><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><!--<span class="BSHARE_COUNT bshare-share-count">0</span>--></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
		</div>
			<!--<div class="dh"><i>400-600-8888</i></div>-->
		</div>
    </div>

</div>


<div id="Nav">
	<div id="nav">
		<ul class="nav_cont">
				
                <li <?php if(Yii::$app->request->get('_url')==''):?> class="style hover" <?php endif?>><a href="/">缃戠珯棣栭〉</a><img src="/images/arrow.png" /></li>
                <?= Column::widget()?>
		</ul>	
		<!--/*<div class="dianhua">400-816-5366</div>*/-->
		<div class="clear"></div>
	</div>
</div>

<?= $content ?>
<!--鏈€搴曢儴-->
<div id="footer">
<<<<<<< HEAD
    <p class="footer_list"><a href="/index/map">网站地图</a><a href="#">招贤纳士</a><a href="#">联系我们</a></p>
    <p class="footer_company">@Copyright 2013-2014中�华粮集�有限公司&nbsp;沪ICP备050190号</p>
=======
    <p class="footer_list"><a href="#">缃戠珯鍦板浘</a><a href="#">鎷涜搐绾冲＋</a><a href="#">鑱旂郴鎴戜滑</a></p>
    <p class="footer_company">@Copyright 2013-2014涓拷鍗庣伯闆嗭拷鏈夐檺鍏徃&nbsp;娌狪CP澶?50190鍙?/p>
>>>>>>> b9d41840f338e8f4d94fd01da754f55b703a4074
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>