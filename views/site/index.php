<?php

/** @var yii\web\View $this */
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <?php $form = ActiveForm::begin(['id' => "contact-form"
        ]); 
  ?>

    <!-- <form id="sign-form" class="sign-form"> -->
      <ol class="questions">
          <li>
              <?= $form->field($model, 'number')?>
              <?= Html::submitButton('CEK', ['number'], ['class' => 'btn btn-primary']) ?>
          </li>
          <h1><?= $is_prime ? 'BILANGAN PRIMA' : 'BUKAN BILANGAN PRIMA' ?></h1>
      </ol>
  <?php ActiveForm::end(); ?>
</div>
