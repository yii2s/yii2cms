<?php
use frontend\widgets\Articlepager;
$page = Yii::$app->request->getQueryParam('page')? Yii::$app->request->getQueryParam('page')-1:0;
?>
<!--内容区-->
<div id="content">
    <div id="cont2">

        <div class="cont2_right_weizhi">Posion：<span>Home</span> <?= $position?></div>
        <div class="nbh">
            <div class="nbh_bt"><?= $cache['menu_'.$node.'_article_'.$id]['title'] ?></div>

            <div class="nbh_nr">
                <?= $cache['menu_'.$node.'_article_'.$id.'_pages'][$page] ?>
            </div>
            <div style="height:56px;"><p></p></div>
        </div>
        <div class="biaozhi"><img src="../images/jiao2.png" /></div>
        <div class="fenye">
            <?= Articlepager::widget([
                'data'=>$cache['menu_'.$node.'_article_'.$id.'_pages'],
                'page_size'=>1
            ])?>
        </div>

    </div>
</div>
	
