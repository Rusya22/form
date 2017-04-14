<?php 
print_r($_REQUEST);
$file = fopen("file.txt", "a+");
/*if(isset($_POST['login'],  $_POST['pass'], $_POST['pass']))  
  { */
   fwrite($file," Никнейм: ".$_POST['user_name']." Имя: ".$_POST['name']." Дата: ".$_POST['date']." Текст: ".$_POST['other_info']." e-mail : ".$_POST['e-mail']."\n\n");
//} 	 
  fclose($file); 

//переменные из формы ;)
/*$str = "'$sec_name','$name'";

fputs($file, $str);

fclose ($file);
echo '<a href="index.php"><button>Назад</button></a>';*/
?>

<?php

error_reporting(0);
session_start();
include    ("bd.php");
// Построение SQL-оператора

$user_name= mysql_escape_string($_POST['user_name']);
$name = mysql_escape_string($_POST['name']);
$email= mysql_escape_string($_POST['e-mail']);
$other_info= mysql_escape_string($_POST['other_info']);
$file= mysql_escape_string($_POST['file']);
$date= mysql_escape_string($_POST['date']);

$strSQL = "INSERT INTO form(user_name, name, email, other_info, file, date) values ('$user_name', '$name', '$email', '$other_info', '$file', '$date') ";

// SQL-оператор выполняется
$mysqli->query($strSQL) or die (mysqli_error());

// Закрытие соединения
mysqli_close();
?>

  <p>
<a href="index.php"><button>Вернуться</button></a><br/>