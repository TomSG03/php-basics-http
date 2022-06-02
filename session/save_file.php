<?php

declare(strict_types=1);

header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="downloaded.txt"');

if (isset($_GET["text"])) {
  if ($_GET["text"] !== '') {
    echo $_GET["text"];
  }
  else {
    echo 'Строка пареметров пуста';
  }
} else {
  echo 'Параметра "text" нет в запросе';
}