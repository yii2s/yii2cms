<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ImageUpload;
use yii\widgets\Ueditor;
/* @var $this yii\web\View */
/* @var $model backend\models\Article */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= Ueditor::widget(['model'=>$model,'name'=>'miaoshu'])?>

    <script id="editor" name="Article['miaoshu']" type="text/plain" style="width:1024px;height:500px;"></script>

    <?= ImageUpload::widget(['model'=>$model,'attribute'=>'file'])?>

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'meta_keywords')->textInput(['maxlength' => 255]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

