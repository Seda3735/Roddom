<html> 
<head> 
<meta charset="UTF-8">
<title>Заявка на обратный звонок </title> 
<meta http-equiv="Refresh" content="4; url=http://roditelskydom.kiev.ua/">
</head> 
<body>
<h3>Ваша заявка успешно прошла регистрацию.<br>
В ближайшее время сотрудники нашего офиса свяжутся с вами.<br>
Спасибо за заказ.<br></h3>

<?PHP  

$msg .= "<p>ФИО:<b>".$_POST['con_organization']."</b></p>"; 
$msg .= "<p>Телефон<b>".$_POST['con_city']."</b></p>";
$headers .= 'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
 mail('info@roditelskydom.kiev.ua','Заявка',$msg,$headers); 
?> 
</body> 
</html> 
