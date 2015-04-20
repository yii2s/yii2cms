<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model common\models\PhotoColumn */

$this->title = '跟新栏目图片: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Photo Columns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="photo-column-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>