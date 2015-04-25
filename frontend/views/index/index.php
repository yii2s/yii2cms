
<!--图片轮播内容区-->
<!-- Slider -->
<div id="Adv">
    <div class="adva">
        <!--图片列表-->
        <div style="width:1184px; margin:0px auto; position:relative; ">
            <?php foreach($cache['menu_31_photos'] as $key=>$photo):?>
                <?php if($photo['place']=='1'):?>
                    <div class="ImgList" style="background:url('<?= Yii::$app->params['adminUrl'].$photo['url']?>') no-repeat center top"></div>
                <?php endif;?>
            <?php endforeach;?>

        </div>

        <!--小图-->
        <div class="xiaotu">
            <ul>
                <?php foreach($cache['menu_31_photos'] as $key=>$photo):?>
                    <?php if($key==1 and $photo['place']=='2'):?>
                        <li class="hover"><img src="<?= Yii::$app->params['adminUrl'].$photo['url']?>" width="296"  height="136" /><p><img src="images/chun.png" /></p></li>
                    <?php elseif($key==3 and $photo['place']=='2'):?>
                        <li><img src="<?= Yii::$app->params['adminUrl'].$photo['url']?>"  width="296"  height="136"  /><p><img src="images/xiay.png" /></p></li>
                        <?php elseif($key==5 and $photo['place']=='2'):?>
                        <li><img src="<?= Yii::$app->params['adminUrl'].$photo['url']?>"  width="296"  height="136"  /><p><img src="images/qiu.png" /></p></li>
                        <?php elseif($key==7 and $photo['place']=='2'):?>
                        <li><img src="<?= Yii::$app->params['adminUrl'].$photo['url']?>"  width="296"  height="136"  /><p><img src="images/dong.png" /></p></li>
                    <?php endif;?>
                <?php endforeach;?>

            </ul>
        </div>


        <!--轮播的按扭-->
        <div class="ydbutton">
            <ul class="button">
                <li class="hover"></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>

        <!--左右按钮-->
        <div class="butcontainer">
            <div class="leftbutton">
                <div class="btimg"><img src="images/left.png" /></div>
            </div>

            <div class="rightbutton">
                <div class="btimg"><img src="images/right.png" /></div>
            </div>
        </div>
    </div>
</div>

