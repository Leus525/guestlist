<?php
// подключение к локальному серверу
$connect = @mysqli_connect('localhost', 'root', '', 'GuestList') or die ('Not conected:(((');
mysqli_set_charset($connect, "utf8") or die('Not set charset');
