<div class="cont_left">
    <div class="cont_left_bt">
        <span><?= $cname?></span><br />
        Walk into us
    </div>

    <div class="cont_left_list">
        <ul>
            <?php foreach($cache['menu_'.$id.'_children'] as $child):?>
                <li <?php if(Yii::$app->request->get('menu')==$child['id']):?> class="hover" <?php endif?> ><a href="/menu/<?= $child['id']?>"><?= $cl->lang($child['cname'])[$lang] ?></a></li>
            <?php endforeach;?>
        </ul>
    </div>

</div>