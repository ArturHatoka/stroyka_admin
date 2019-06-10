<?php
$HEVA_CMS = "3.1.5.20130222";
if (ini_get('register_globals') == '1' || strtolower(ini_get('register_globals')) == 'on')
	die('Отключите register_globals в php.ini/.htaccess (угроза безопасности)');
session_start();
if (strpos($_SERVER['REQUEST_URI'], '_small.') > 0 && !file_exists("..".$_SERVER['REQUEST_URI'])){
	include("_small.php");
	die;
}
if(isset($_SESSION['user']))
	$user = $_SESSION['user'];
else{
	if (isset($_COOKIE['user']))
		$_SESSION['user'] = $user = $_COOKIE['user'];
	else{
		$_SESSION['user'] = $user = round(rand(10000000000,99999999999),0);
		setcookie("user", $user, time()+3600*24*30);
	}
}
ini_set('display_errors', 0);
include("_mysql.php");
include("_additional.php");
include("_url.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include("_head.php"); ?>
</head>
<body>
<?php include("_new-header.php"); ?>
	<div class="move-end"></div>
	<div class="main">
		<?php include("_".$url['target_type'].".php"); ?>
	</div>
	<div class="pop-up-bg none"></div>
	<div class="pop-up write-us-pop none">
		<div class="h2">Написать нам письмо</div>
		<form method="post" class="write-us-form">
			<label>Ваше имя или название организации:</label>
			<input type="text" name="name" />
			<label>Контактная информация (телефон или e-mail):</label>
			<input type="text" name="contacts" />
			<label>Текст сообщения:</label>
			<textarea name="text"></textarea>
		</form>
		<a class="submit write-us-submit">Отправить</a>
		<a class="clz"></a>
	</div>
	<div class="pop-up ask-quest-pop none">
		<div class="h2">Написать отзыв</div>
		<form method="post" class="ask-quest-form">
			<label>Ваше имя:</label>
			<input type="text" name="name" />
			<label>Текст сообщения:</label>
			<textarea name="text"></textarea>
		</form>
		<a class="submit ask-quest-submit">Отправить</a>
		<a class="clz"></a>
	</div>
	<div class="pop-up call-back-pop none">
		<div class="h2">Заказать обратный звонок</div>
		<form method="post" class="call-back-form">
			<label>Ваше имя:</label>
			<input type="text" name="name" />
			<label>Ваш телефон:</label>
			<input type="text" name="contacts" />
			<label>Удобное время звонка:</label>
			<input type="text" name="time" />
		</form>
		<a class="submit call-back-submit">Отправить</a>
		<a class="clz"></a>
	</div>
	<div class="pop-up just-add-pop none">
		<div class="h2">Товар добавлен в корзину</div>
		<a class="submit righter" href="/cart/">Оформить заказ</a>
		<a class="clz"></a>
	</div>
	<?php if($additional[46]==0){ ?>
	<div class="pop-up one-click-pop none">
		<div class="h2">Введите ваши данные</div>
		<form method="post" class="one-click-form">
			<input type="text" class="text" name="name" placeholder="Ваше Ф.И.О." />
			<input type="text" class="text" name="contacts" placeholder="Ваш телефон" />
			<textarea class="text" name="text" placeholder="Комментарий к заказу"></textarea>
			<input type="hidden" name="good" value="<?=$good['id']?>" />
			<input type="hidden" name="title" value="<?=$good['name']?>" />
			<input type="hidden" name="price" value="<?=$good['price']?>" />
		</form>
		<a class="submit one-click-submit">Оформить заказ</a>
		<a class="clz"></a>
	</div>
	<?php } ?>
	<div class="pop-up result_ajax none">
		<div class="h2">Результаты поиска</div>
		<div class="result_ajax2"></div>
		<a class="clz"></a>
	</div>
    <?php include("_new-footer.php"); ?>
</body>
</html>