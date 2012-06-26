<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-PT">
<head>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<meta name="description" content="php echo CHtml::encode($this->pageTitle); ?>" />
	<meta name="keywords" content="php echo CHtml::encode($this->pageTitle); ?>" />
	<meta name="robots" content="index, follow" />
	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/inicial-reset.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/inicial-style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/inicial-font.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div id="header">
	<div class="container">
    	<div id="primary-nav" class="header-right">

        </div>
		<table border="0px" style="width:100%" cellspacing="0px" cellpadding="0px" border="0px">
			<tr>
				<td>
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/logo.png" border="0px" />
				</td>
				<td align="center">
					<h1><?php echo Yii::app()->db->createCommand('select escola_nome from escolas WHERE id_escola=1')->queryScalar(); ?></h1>
				</td>
			</tr>
		</table>
    </div>
</div>



<?php echo $content; ?>


</body>
</html>
