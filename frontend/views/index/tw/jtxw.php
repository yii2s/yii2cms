<?php
use frontend\widgets\Pager;
use common\helps\column;
$page_size = 2;
$array = Yii::$app->request->get('page')?array_slice($cache['column_'.$id.'_articles'],$page_size*(Yii::$app->request->get('page')-1),$page_size):array_slice($cache['column_'.$id.'_articles'],0,$page_size);

$cl = new column();?>
<!--内容区-->
<div id="content">
    <div id="cont">
        <?php include '../views/index/left_l.php'?>
        <div class="cont_right">
            <div class="cont_right_weizhi">當前位置：<span>首頁 <?= $position?></div>
            <div class="zoujin">
                <div class="zoujin_bt"><?= $cl->lang($cache['column_'.$id]['cname'])[$lang]?></div>
                <div class="zoujin_nr">

                    <div class="new_iconimg"><img src="../images/newicon.jpg"  /></div>

                    <div class="new_list">
                        <ul>
                            <?php foreach($array as $key=>$article):?>
                                <li>
                                    <div class="styleone">华粮动态<br />OUR NEW</div>
                                    <div class="styletwo"><a href="/page/<?= $article['id']?>?column=<?= Yii::$app->request->get('column')?>" ><?= $article['title']?></a></div>
                                    <div class="stylethree"><?= date('Y-m-d',$article['created_at'])?></div>
                                </li>
                            <?php endforeach;?>

                        </ul>
                    </div>
                </div>


            </div>
            <div class="clear"></div>
            <div class="biaozhi"><img src="../images/jiao2.png" /></div>

            <div class="fenye">
                <?= Pager::widget([
                    'data'=>$cache['column_'.$id.'_articles'],
                    'page_size'=>$page_size
                ])?>
            </div>

        </div>
    </div>
</div>