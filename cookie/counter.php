<?php

declare(strict_types=1);

if (!isset($_COOKIE["counter"])) {
  setcookie("counter", "1", time() + 60 * 5);
  echo '<p>Переменная сохранена</p>';
} else {
  $count = (int)$_COOKIE["counter"];
  ++$count;
  setcookie("counter", (string)$count, time() + 60 * 5);

  if ($count % 3 === 0) {
    $path = $_SERVER["HTTP_HOST"];
    header("Location: http://${path}/counter_results.php");
  }
}

echo "<p>Это страница №3 </p>";
echo "<p><a href='index.php' style='text-decoration: none'>&#8592 Назад</a></p>";