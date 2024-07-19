<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Отправка СМС</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<form method="post" action="send.php">
<select class="list-group" id="phone">
    
    </select>
<br/>
Шаблон СМС:
    <select class="list-group" id="smsList">
    
    </select>
Сообщение<br><textarea name="message" rows="4" cols="40" id="messageArea"></textarea></br>
Оправитель<br/><input name="sender" value=""><br/><br/>

<input type="submit" name="send" value="Отправить">
</form>

<?
require_once (__DIR__.'/crest.php');

$result = CRest::call(
		'crm.contact.get',
		['ID' => '42', ]
	);

echo '<pre>';
	print_r($result);
echo '</pre>';
?>