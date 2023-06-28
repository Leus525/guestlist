<?php
header("Content-type: text/html; charset=utf-8");
error_reporting(-1); 
//  СТРАНИЦА ПОКАЗЫВАЮЩАЯ ОДНУ ТАБЛИЧКУ

//икранирование 2 ФАЙЛОВ ДЛЯ РАБОТЫ С БАЗОЙ И ФАЙЛЫ
  require_once 'func.php';
require_once 'connect.php';
        

    if(!empty($_GET["id"])) {   
        $get_one = get_one($_GET["id"]);
    }
//print_r($get_one);
//print_r(); 

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
        .col {
            border: 1px solid #426d42;
            padding: 10px;
            margin-bottom: 10px;
        }
        .small img {
              max-height: 400px; 
              max-width: 400px;
              
          }
        .table {
            margin: auto;
            width: 50% !important; 
        }
        table th td {
              text-align: center; 
          }
    </style>
</head>

<body>
    <!-- Вывод данных пользователя одного -->
   <div class="conteiner">
     <table class="table table-bordered table-condensed">
       
         <tr  >     
             <td colspan="2">
                 <center>
                 <div class="small">
                 <img src="foto/<?=$get_one["photo"] ?>"/>
                </div>
                </center>
                 </td>
             
        </tr>
        <tr>     
            <th class="col-lg-1">Name </th> <td> <?= $get_one["name"] ?></td>
        </tr>
        <tr>     
            <th class="col-lg-1">Surname </th> <td> <?=$get_one["surname"] ?></td>
        </tr>
        <tr>     
            <th class="col-lg-1">Date of birth </th><td> <?=$get_one["birth"] ?></td>
        </tr>
        <tr>    
             <th class="col-lg-1">About me </th>  <td>
        
                    
                    <?=nl2br(htmlspecialchars($get_one["text"])) ?>
                
              </td>
         </tr>
          <tr>
            <th class="col-lg-1">Posted in </th><td> <?= $get_one["created_at"] ?></td>
        </tr>
         <tr>
             <td> <a href="index.php" class="btn btn-info btn-sm">Back</a></td>
         </tr>     
    </table>
        </div>
    <!-- кнопка назад на главную страницу -->
   


</body>

</html>
