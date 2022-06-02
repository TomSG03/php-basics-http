<html>
<head>
    <title>PHP Test</title>
    <style>
        a {
            text-decoration: none;
        }
        ul {
            list-style-type: none;
        }
    </style>
</head>
<body>
<ul>
    <li><a href='not_found.php'>Код ответа - 404</a></li>
    <li>
      <?php
      $str = "Строка текста для нового файла";
      echo "<a href='save_file.php?text=${str}'>Сохранение файла</a>";
      ?>
    </li>
    <li><a href='counter.php'>Счетчик открытия страницы</a></li>
</ul>
</body>
</html>