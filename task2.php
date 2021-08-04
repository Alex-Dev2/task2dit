<?php
$name = "Kuznetsov Alexandr";
$age = 26;
$skills = array('PHP,JS,html/CSS', 'python', 'figma', 'Wordpress', 'SQL');
echo "<p>Имя кандидата  - ".$name."</p><br>
      <p>Ему ".$age." лет!</p><br>
      <p> Основы ".$skills[0]."</p><br>
      <p> Основы ".$skills[1]."</p><br>
      <p> Немного знаком с ".$skills[2]."</p><br>
      <p> На курсах немного копал CMS - ".$skills[3]." - редактирование темы, небольшие изменения кода в верстке</p><br>
      <p> Основы ".$skills[4]."</p>"
?>