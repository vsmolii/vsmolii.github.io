
<meta charset="utf-8"> 
<?php
$name = $_POST['first_name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$urok="Заявка с сайта";
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['first_name']))			{$first_name			= $_POST['first_name'];		if ($first_name == '')	{unset($first_name);}}
if (isset($_POST['email']))		{$email		= $_POST['email'];		if ($email == '')	{unset($email);}}
if (isset($_POST['subject']))			{$subject			= $_POST['subject'];		if ($subject == '')		{unset($subject);}}
if (isset($_POST['message']))			{$message			= $_POST['message'];		if ($message == '')	{unset($text);}}

//стирание треугольных скобок из полей формы
if (isset($first_name) ) {
$first_name=stripslashes($first_name);
$first_name=htmlspecialchars($first_name);
}
if (isset($email) ) {
$email=stripslashes($email);
$email=htmlspecialchars($email);
}
if (isset($subject) ) {
$subject=stripslashes($subject);
$subject=htmlspecialchars($subject);
}
if (isset($message) ) {
$message=stripslashes($message);
$message=htmlspecialchars($message);
}
// адрес почты куда придет письмо
$address="vsmoliy7@gmail.com";
// текст письма 
$note_text="Theme : $urok \r\n Name : $first_name \r\n Email : $email \r\n Subject : $subject \r\n Message : $message";

if (isset($first_name)  &&  isset ($subject) ) {
mail($address,$urok,$note_text,"Content-type:text/plain; windows-1251"); 
// сообщение после отправки формы
echo "<p style='color:#009900;'>Dear <b>$first_name</b> Your mail was sent successfully. <br> Thank you. <br>You will be answered soon by mail <b> $email</b>.</p>";
}

?>