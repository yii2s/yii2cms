<!--内容区-->
<div id="content">
    <div id="cont">
        <div class="cont_left">
            <div class="cont_left_bt">
                <span>网站地图</span>
            </div>

            <div class="cont_left_list">
                <ul>
                    <?php foreach($cache['menu_21_children'] as $v):?>
                    <li><a href="/menu/<?= $v['id']?>"><?= $v['cname']?></a></li>
                    <?php endforeach;?>

                </ul>
            </div>
           
        </div>
        <div class="cont_right">
            <div class="cont_right_weizhi">當前位置：<span>首頁</span> <?= $position?></div>
            <div class="ditu">
                <ul>
                    <?php foreach($cache['menu_1_brother'] as $menu):?>
                    <li>

                        <span><a href="/menu/<?= $menu['id']?>"><?= $menu['cname']?></a></span>

                        <?php foreach($cache['menu_'.$menu['id'].'_children'] as $chiid):?>
                             <p><a href="/menu/<?= $chiid['id']?>"><?= $chiid['cname']?></a></p>
                        <?php endforeach;?>

                    </li>
                    <?php endforeach;?>

                </ul>
                <div class="clear"></div>
            </div>

            <div style="height:140px;"><p></p></div>
            <div class="biaozhi"><img src="../images/jiao2.png" /></div>
        </div>

    </div>
</div>
</div>
