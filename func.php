<?php
// создание цикла для массивов который перебирает ключи и значения массива Пост
function clear(){
    global $connect;
    foreach ($_POST as $key => $value) {
        $_POST[$key] = mysqli_real_escape_string($connect, $value);
        
    }
}
// в функции условие проверяет не пуст ли масссив ФАЙЛС далее перемещает фото в папку фото иначе выведет Фото не найдено
function randomFoto(){
   
    if(!empty($_FILES)) { 
         $img = rand() . ".jpg";
        $user = move_uploaded_file($_FILES["photo"]["tmp_name"], "foto/" .  $img);
        return $img; 
    } else {
      $img = "FOTO NOT FOUND!" ;
    return $img;
    }
    
}
//отправка данных в БД
        function enter(){
            $img =  randomFoto();
             $date = $_POST['year'] . '.' .  $_POST['month'] . '.' .  $_POST['day'];
            clear();
            global $connect; 
            extract($_POST);
             $photo = mysqli_real_escape_string($connect,  $img);
           $name = mysqli_real_escape_string($connect, $_POST['name']);
             $surname = mysqli_real_escape_string($connect, $_POST['surname']);
             $birth = mysqli_real_escape_string($connect, $date);
            $text = mysqli_real_escape_string($connect, $_POST['text']);
          $query = 
        "INSERT INTO GuestList (photo, name, surname, birth, text) VALUES ('$photo' , '$name' , '$surname' , '$birth', '$text') ";    
            mysqli_query($connect, $query);
            
        }
//Получение данных из БД
          function get(){
              global $connect;
              $query = "SELECT * FROM GuestList ORDER BY id DESC";
              $res = mysqli_query($connect, $query);
              return mysqli_fetch_all($res, MYSQLI_ASSOC);
         }
// функция принимающая аргумент т е айди с помощью которого достается вся информация о пользователе

function get_one($id){
              global $connect;
              $query = "SELECT * FROM GuestList WHERE id = $id";
              $res = mysqli_query($connect, $query);
              return mysqli_fetch_assoc($res);
         }
//функция удаления данных по айди пользователя
  function delete(){
              global $connect;
              $id = $_GET['id']; 
            $delete = "DELETE FROM GuestList WHERE id = $id";
            $del = mysqli_query($connect, $delete);
         }
