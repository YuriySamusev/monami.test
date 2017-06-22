<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\admin\Bloc */
/* @var $form yii\widgets\ActiveForm */

$arrTmp = range(1, $maxPriority);
$arrPriority = array_combine($arrTmp, $arrTmp);
?>

<div class="bloc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'dynamic' => 'Dynamic', 'static' => 'Static', ]) ?>

    <?= $form->field($model, 'hide')->dropDownList([ 'no' => 'No', 'yes' => 'Yes', ])  ?>

    <?= $form->field($model, 'priority')->dropDownList($arrPriority) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
