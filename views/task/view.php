<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
require_once('../vendor/parsedown/Parsedown.php');

/* @var $this yii\web\View */
/* @var $model app\models\Task */

$this->title = $model->title;
$this->params['subtitle'] = $model->subtitle;
$this->params['image'] = $model->image;
?>
    <h1><?= Html::encode($this->title) ?></h1>

<?php

    $pd = new Parsedown();
    echo $pd->text($model->description);
?>

