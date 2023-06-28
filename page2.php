<?php
         header("Content-type: texthtml; charset=utf-8");
         error_reporting(-1); 
// АЛГОРИТМ (ПОШАГОВАЯ ИНСТРУКЦИЯ) СТРАНИЦА КОТОРАЯ СОЗДАЕТ НОВЫЕ ТАБЛИЧКИ

//ПРИСОЕДЕННЕНИЕ 2 ФАЙЛОВ ДЛЯ РАБОТЫ С БАЗОЙ И ФАЙЛЫ
          require_once 'connect.php';
          require_once 'func.php';
          
//Проверяем сушествует ли элемент в  $_POST  и выводит функцию ПОСЛЕ ЧЕГО ВЫВОДИМ ФУНКЦИЮ
	     if(!empty($_POST)) { 
          enter();
          header("Location: http://guestlist.local/index.php");
          exit;     
        }
      ?> 
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- подключение бустрап цсс файлов для стилизирования  кода т-->
  <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>GL</title>
    <style>
          .col{
              border: 1px solid #395c3a;
              padding: 20px;
              margin-bottom: 10px;
               float: center;
          }   
        .col2{
              border: 1px solid #FFF;
              padding: 20px;
          } 
        .lft {
            float: left;
        }
       
      </style>
  </head>

 <body>
	  <!-- Форма регестрации ПОЛЬЗОВАТЕЛЯ  ГДЕ ЗАПИСЫВАЕТСЯ ФОТО ИМЯ ФАМИЛИЯ РОДЖЕНИЕ И ОПИСАНИЕ -->
  <div class="d-flex justify-content-center">
     <div class="col-6 col" >
         <h1 class="text-center">FILL THE FORM</h1>
	 <form action="page2.php" method="post" enctype="multipart/form-data">
         

         <div >
             <div class="input-group">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="inputGroupFileAddon01">Upload person photo</span>
                </div>
                 <div class="custom-file">
                     <input type="file" class="custom-file-input" name="photo" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                     <label class="custom-file-label" for="inputGroupFile01">Click here and choose photo</label>
                 </div>
            </div>  
	 </div>
         <hr>
     <div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Enter person name</span>
            </div>
             <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
         </div>
         <hr>
	 </div>
        <div>
         <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Enter person surname</span>
            </div>
             <input type="text" class="form-control" name="surname" placeholder="Surname" aria-label="Username" aria-describedby="basic-addon1">
         </div>
         <hr>
	 </div>
    <div>
     <p class="float-left">  Enter person birth:   </p>
        <select name="year" class="custom-select custom-select-sm">
                 <option>Year</option>
         <?php for($year = 1910; $year <= 2019; $year++): ?>
            <option><?= $year ?> </option>
        <?php endfor; ?>
        </select>
         <select name="month" class="custom-select custom-select-sm">
                 <option>Month </option>
         <?php for($month = 1; $month <= 12; $month++): ?>
            <option><?= $month ?> </option>
        <?php endfor; ?>
        </select>
        <select name="day" class="custom-select custom-select-sm">
         <option>Day</option>
         <?php for($day = 1; $day <= 31; $day++): ?>
            <option><?= $day ?> </option>
        <?php endfor; ?>
        </select>
        <hr>
	 </div>
    <div class="input-group float-left col2">
  <div class="input-group-prepend ">
    <span class="input-group-text ">Describe person</span>
  </div>
  <textarea class="form-control " aria-label="With textarea" type="text" name="text" rows="3" cols="50"></textarea>
       
</div>
           <!--КНОПКА КОТОРАЯ ОТПРАВЛЯЕТ ДАННЫЕ В БД -->
	       <button type="submit" name="butt" class="btn btn-success btn-lg">ADD</button>
           <hr>
         <!--ВОЗРАШЕНИЕ НА ГЛАВНУЮ СТРАНИЦУ -->
         <a href="index.php" class="btn btn-info btn-sm ">Back</a>
	 </form>
         
     </div>
     </div>    
       
     
    
 </body> 

</html>                                                                                                                                                                                                                                                                                                                                       