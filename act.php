<?php
//Данные для подключения к серверу MySQL
$servername = "localhost";
$database = "mal";
$username = "root";
$password = "admin";

$conn = mysqli_connect($servername, $username, $password, $database);


//Проверка соединения с БД
if (!$conn) {
 die("Подключение не выполнено: " . mysqli_connect_error());
}




$sql = "INSERT INTO client (imya,surname,patronymic,date1,date2,email,kolvo,option3,option1,option2) VALUES (
'{$_POST['imya']}','".$_POST['surname']."',
'".$_POST['patronymic']."','".$_POST['date1']."',
'".$_POST['date2']."','".$_POST['email']."', '".$_POST['kolvo']."' ,
'".$_POST['option3']."','".$_POST['option1']."',
'".$_POST['option2']."')" ;

//Проверка статуса выполнения sql запроса 

if (mysqli_query($conn, $sql)) {
 echo "Запись успешно добавлена</br>";
echo "<a href='index.html'>На главную</a>";
} else {
 echo "Ошибка добавления записи: " . $sql . "<br>" . 
mysqli_error($conn);
}

//Строка с текстом sql запроса для таблицы 
//Закрытие соединения
mysqli_close($conn);
?>