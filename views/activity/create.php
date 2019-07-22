<?php
?>
<h1>
    Create Activity
</h1>


<?php $form= yii\bootstrap\ActiveForm::begin([]) ?>
<?=$form->field($model, 'title'); ?>
<?=$form->field($model, 'description')->textarea(); ?>
<?=$form->field($model, 'dateStart'); ?>
<?=$form->field($model, 'isBlocked')->checkbox(); ?>
<div class="form-group">
    <button class="btn btn-default" type="submit">Создать</button> 
</div>
<?php $form= yii\bootstrap\ActiveForm::end() ?>