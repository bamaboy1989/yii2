<?php
?>
<h1>
    Create Activity
</h1>


<?php $form= yii\bootstrap\ActiveForm::begin([]) ?>
<?=$form->field($model, 'title'); ?>
<?=$form->field($model, 'description')->textarea(); ?>
<?=$form->field($model, 'creator')->textarea(); ?>
<?=$form->field($model, 'responsible')->textarea(); ?>
<?=$form->field($model, 'deadline'); ?>
<?=$form->field($model, 'isIterated')->checkbox(); ?>
<?=$form->field($model, 'isBlocked')->checkbox(); ?>
<?=$form->field($model, 'userNotification')->checkbox(); ?>
<?=$form->field($model, 'email'); ?>
<?=$form->field($model, 'emailRepeat'); ?>
<?=$form->field($model, 'fileImage')->fileInput(); ?>
<div class="form-group">
    <button class="btn btn-default" type="submit">Создать</button> 
</div>
<?php $form= yii\bootstrap\ActiveForm::end() ?>