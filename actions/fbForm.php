<html> 
<head> 
<title>Заявка, на получение информации, о пансионате </title> 
<meta charset="UTF-8">
<meta http-equiv="Refresh" content="4; url=http://roditelskydom.kiev.ua/">
</head> 
<body>
<h3>Ваша заявка успешно прошла регистрацию.<br>
В ближайшее время сотрудники нашего офиса свяжутся с вами.<br>
Спасибо за заказ.<br></h3>

<?PHP  
$from .= "info@roditelskydom.kiev.ua";

  
$msg .= "<p>Дополнительные условия<b>".$_POST['comment']."</b></p>"; 
$msg .= "<p>ФИО:<b>".$_POST['con_organization']."</b></p>"; 
$msg .= "<p>Телефон<b>".$_POST['con_city']."</b></p>";
$msg .= "<p>E-mail:<b>".$_POST['con_email']."</b></p>"; 
$headers .= 'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n"; 

mail('info@roditelskydom.kiev.ua','Заявка',$msg,$headers); 
?> 
</body> 
</html> 
