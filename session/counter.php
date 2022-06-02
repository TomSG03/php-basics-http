<?php

declare(strict_types=1);

session_start();

if (!isset($_SESSION["counter"])) {
  $_SESSION["counter"] = 1;
  echo '<p>Переменная сохранена</p>';
} else {
  $_SESSION["counter"] = ++$_SESSION["counter"];
  if ($_SESSION["counter"] % 3 === 0) {
    $path = $_SERVER["HTTP_HOST"];
    header("Location: http://${path}/counter_results.php");
  }
}

echo "<p>Это страница №3 </p>";
echo "<p><a href='index.php' style='text-decoration: none'>&#8592 Назад</a></p>";