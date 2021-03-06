<?php
/**
 * @var \yii\base\View $this
 * @var string $content
 */
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html>
<?php $this->beginPage(); ?>
<head>
	<title><?php echo Html::encode($this->title); ?></title>
	<?php $this->head(); ?>
</head>
<body>
<?php $this->beginBody(); ?>
<?php echo $content; ?>
<?php $this->endBody(); ?>
</body>
<?php $this->endPage(); ?>
</html>
