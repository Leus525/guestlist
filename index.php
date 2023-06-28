<?php
    header("Content-type: text/html; charset=utf-8");
         error_reporting(-1); 

//Глава страница на которой показовается вся таблица
//икранирование 2 ФАЙЛОВ ДЛЯ РАБОТЫ С БАЗОЙ И ФАЙЛЫ
          require_once 'func.php';
          require_once 'connect.php';
      
//Проверяем не пуст ли $_POST  и выводит функцию 
	    /*if(!empty($_POST)) {
            print($_POST['year']); 
              enter();
           
        }*/
       
       $enter_get = get();
      
      ?> 
<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
          <!-- подключение бустрап цсс файлов для стилизирования  кода -->
	 <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet">
    <title>GuestList</title>
      <style type="text/css">
          
          .col tr td {
              border: 1px solid #395c3a;
              padding: 10px;
              margin-bottom: 10px;
          }      
          .small img {
              max-height: 80px; 
              max-width: 80px;
              
          }
          table th, td {
              text-align: center; 
          }

          .table {
            margin: auto;
            width: 50% !important; 
        }
      </style>
  </head>

 <body>
     <!-- заголовок страницы -->
     <hr>
      <h1 class="text-center">Guest List</h1>
     <hr>
     
     <!--КНОПКА ПО КОТОРОЙ ПЕРЕХОДЯТ НА СТРАНИЦУ СОЗДАНИЯ НОВОГО ПОЛЬЗОВАТЕЛЯ  -->
     <center><a href="page2.php" class="btn btn-info btn-lg ">ADD NEW ONE</a></center>
  
   <hr>
     <table class="table table-bordered table-hover" >
    <thead>
    <tr >
        <th>ID</th>
        <th>Photo</th>
        <th>Name</th> 
        <th>Surname</th>
        <th>Date of birth</th>
        <th>    </th>
    </tr>
        </thead>
        <tbody>
     <!-- Условие проверяет не пуста ли $enter_get В СЛУЧАЕ ЭТОГО цикл перебирает элементы массива -->
     <?php if(!empty($enter_get)): ?>
        <?php foreach($enter_get as $enter_get_one): ?>
                      <tr >     
                         <td>
                        <!--ФОРМА С ПОМОЩЬЮ КОТОРОЙ ДОЛЖЕН БЫЛ ПРЕДАВАТЬСЯ АЙДИ НА СТРАНИЦУ ДЛЯ ПОКАЗЫВАВНИЯ ОДНОЙ  ТАБЛИЧКИ -->     
                    <form action="page3.php" method="get">  
                        <a type="submit" class="btn btn-warning btn-sm" 
                           href="page3.php?id=<?=$enter_get_one['id']?>">
                            <?= $enter_get_one['id']?></a>
                    </form>
                             </td>
                       <!-- ОПИСАНИЯ пользователя-->
                         <td  >
                             
                             <div class="small">
                                 <form action="page3.php" method="get">
                             <a href="page3.php?id=<?=$enter_get_one['id']?>">
                                 <img src="foto/<?= $enter_get_one['photo']?>"></a>
                                     </form>
                            </div>
                                  
                         </td>
                        
                         <td><?= $enter_get_one['name']?></td>
                        
                         <td><?=$enter_get_one['surname'] ?></td>
                        
                         <td><?=$enter_get_one['birth'] ?></td>
                      
                         <td >
                             <!--ФОРМА УДАЛЕНИЯ-->
                <form action="page4.php" method="get"> 
                    <a type="submit" class="btn btn-danger" href="page4.php?id=<?=$enter_get_one['id']?>" >DELETE</a></form>
                           
                   </td>
                      </tr>                
        <?php endforeach; ?>
     <?php endif; ?>
         </tbody>
           </table>
 </body> 
</html>