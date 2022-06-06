<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        * {
  margin: 0;
  padding: 0;
}

*,
*:after,
*:before {
  box-sizing: border-box;
}

body {
  background: #A0A9CC;
  color: #fff;
  font-size: 1.5em;
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", sans-serif;
  font-weight: 100;
  text-align: center;
}

.container {
  background: #B7BED8;
  color: #6A79A6;
  display: inline-block;
  padding: 0em 2em;
  margin: 6em auto;
  box-shadow: 0 50px 50px rgba(0, 0, 0, .2);
  .navigation {
    text-align: left;
    ol {
      list-style: none;
      background: #B7BED8;
      position: absolute;
      padding: 30px 0;
      width: 600px;
      z-index: 100;
      li {
        display: inline-block;
        margin-right: 27px;
        font-size: 0.7em;
        max-width: 20%;
        text-align: left;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        a {
          color: #fff;
          text-decoration: none;
          position: relative;
          z-index: 2;
          cursor: pointer;
          opacity: 0;
          &.done {
            opacity: 1;
          }
        }
      }
      margin-bottom: 30px;
    }
  }
  .sign-form {
    width: 600px;
    text-align: left;
    margin: 85px 0 0 0;
    #next-page {
      opacity: 0;
      width: 40px;
      height: 40px;
      display: inline-block;
      vertical-align: middle;
      margin-left: 20px;
      background: url("https://jdniki.github.io/signup/images/next-page.svg");
      background-size: contain;
      &:hover {
        background: url("https://jdniki.github.io/signup/images/next-pagehover.svg");
        background-size: contain;
      }
    }
    .questions {
      list-style: none;
      -webkit-transition: height 0.4s;
      transition: height 0.4s;
      width: 88%;
      display: inline-block;
      height: 80px;
      li {
        position: absolute;
        width: 500px;
        span {
          display: block;
          margin-bottom: 10px;
        }
        input {
          width: 100%;
          font-size: .9em;
          color: #f2f2f2;
          margin: 0.3em 0 1em 0;
          border: none;
          background: none;
          border-bottom: 3px solid #fff;
          padding: 0.5em 0.1em;
          transition: all 0.5s ease;
          &:focus {
            outline: none;
            border-bottom: 3px solid #6A79A6;
          }
        }
        &:not(:first-child) {
          opacity: 0;
          margin-top: 150px;
        }
        /*-------------Password ------------------*/
        #viewpswd {
          position: absolute;
          opacity: 0;
          //                    z-index:-100;
        }
        #show-pwd {
          margin: -2.75em 0em;
          width: 40px;
          height: 40px;
          position: absolute;
          right: 0;
          color: rgba(255, 255, 255, 0.4);
          cursor: pointer;
          &.view {
            background: url("https://jdniki.github.io/signup/images/view.svg");
            background-size: contain;
          }
          &.hide {
            background: url("https://jdniki.github.io/signup/images/hide.svg");
            background-size: contain;
          }
        }
        #show-pwd:active,
        #show-pwd:focus {
          background: url("https://jdniki.github.io/signup/images/hide.svg");
          background-size: contain;
        }
        select.country {
          position: absolute;
          width: 4.5em;
          font-size: 0.7em;
          color: #f2f2f2;
          height: 70px;
          background: transparent;
          border: 1px solid #ccc;
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          border: none;
        }
        #phone {
          padding-left: 5em;
        }
      }
    }
  }
  .error-message {
    color: rgba(207, 0, 0, 0.56);
    font-size: 14px;
    margin-top: 10px;
    padding-bottom: 30px;
    background: #B7BED8;
  }
}

::-webkit-input-placeholder {
  font-size: 0.9em;
  color: rgba(255, 255, 255, 0.7);
}

:-moz-placeholder {
  /* Firefox 18- */
  font-size: 0.9em;
  color: rgba(255, 255, 255, 0.7);
}

::-moz-placeholder {
  /* Firefox 19+ */
  font-size: 0.9em;
  color: rgba(255, 255, 255, 0.7);
}

:-ms-input-placeholder {
  font-size: 0.9em;
  color: rgba(255, 255, 255, 0.7);
}

@-webkit-keyframes moveUpFromDown {
  from {
    -webkit-transform: translateY(100%);
  }
  to {
    -webkit-transform: translateY(0);
  }
}

@keyframes moveUpFromDown {
  from {
    -webkit-transform: translateY(100%);
    transform: translateY(100%);
  }
  to {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}
    </style>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>


<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; Darmawati S.Kom </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
