<?php
$name=$_POST["name"];
$phone=$_POST["phone"];
if (isset ($name))
{
$name = substr($name,0,20); //Не может быть более 20 символов
if (empty($name))
{
exit;
}
}
else
{
$name = "не указано";
}
if (isset ($phone))
{
$phone = substr($phone,0,1000); //Не может быть более 1000 символов
if (empty($phone))
{
exit;
}
}
else
{
$phone = "не указано";
}
$i = "не указано";
if ($name == $i AND $phone == $i)
{
exit;
}
$to = "info@tt-billiard.com.ua";  /*МЕНЯЕШЬ НА СВОЙ АДРЕСС!*/
$subject = "Flexxboll";
$message = "Имя пославшего:$name::::::::::Телефон:$phone";
mail ($to,$subject,$message) or print "Не могу отправить письмо !!!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/landpages.css" type="text/css">
    <title>FlexxBoll</title>
</head>
<body>
    <div class="main_page">
    Спасибо за заказ! С Вами в ближайшее время свяжется наш менеджер.
        </div>
</body>