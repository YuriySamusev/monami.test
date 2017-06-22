<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
</head>

<body>
<?php $this->beginBody() ?>
    <?= $content ?>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer__text">
                    <p>© BE Pharma 2016			</p>
                </div>
                <div class="footer__copyright">
                    <p>All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php $this->endBody() ?>
</body>

<script> var lang = new Langselect("#lang-select_1"); </script>
</html>
<?php $this->endPage() ?>