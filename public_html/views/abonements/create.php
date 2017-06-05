<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use nex\datepicker\DatePicker;
use app\models\Persons;


/* @var $this yii\web\View */
/* @var $model app\models\Abonements */

$this->title = 'Создать абонемент';
?>
<div class="abonements-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<div class="abonements-form">

		<?php $form = ActiveForm::begin();


		echo $form->field($model, 'user_id')->textInput();


		echo DatePicker::widget([
			'model' => $model,
			'attribute' => 'start',
			'language' => 'ru',
			'size' => 'sm',
			'readonly' => false,
			'placeholder' => 'Выберите дату',
			'clientOptions' => [
			'format' => 'YYYY-MM-DD LT',
                //'minDate' => '2015-08-10',
                //'maxDate' => '2015-09-10',
			],
			]); 

		echo DatePicker::widget([
			'model' => $model,
			'attribute' => 'end',
			'language' => 'ru',
			'size' => 'sm',
			'readonly' => false,
			'placeholder' => 'Выберите дату',
			'clientOptions' => [
			'format' => 'YYYY-MM-DD LT',
                //'minDate' => '2015-08-10',
                //'maxDate' => '2015-09-10',
			],
			]);
			?>

			<?= $form->field($model, 'countvis')->textInput() ?>

			<?= $form->field($model, 'balance')->textInput() ?>

			<?= $form->field($model, 'price')->textInput() ?>
			
			<?= $form->field($model, 'status')->textInput(['value' => 1]) ?>

			<?= $form->field($model, 'info')->textarea(['rows' => 6]) ?>

			<div class="form-group">
				<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
			</div>

			<?php ActiveForm::end(); ?>

		</div>

	</div>