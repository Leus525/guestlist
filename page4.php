<?php
header("Content-type: text/html; charset=utf-8");
error_reporting(-1); 
//СТРАНИЦА УДАЛЕНИЯ

//ПРИСОЕДЕННЕНИЕ 2 ФАЙЛОВ ДЛЯ РАБОТЫ С БАЗОЙ И ФАЙЛЫ
  require_once 'func.php';
require_once 'connect.php';
        

           


      ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
<meta http-equiv="refresh" content="0; URL='/index.php'" />
    <title>GuestList</title>
</head>

<body>
         <?php
            delete();
          ?>
    
    <!-- ПОКАЗЫВАНИЕ ТАБЛИЦЫ ОПРЕДЕЛЁННОГО ПОЛЬЗОВАТЕЛЯ-->
   


</body>

</html>