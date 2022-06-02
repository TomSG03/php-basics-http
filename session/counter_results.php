<?php

declare(strict_types=1);

session_start();

$count = $_SESSION["counter"];
echo "<p>Это страница №4 </p>";
echo "<p>Количество посещений страницы №3 = $count</p>";

echo "<p><a href='index.php' style='text-decoration: none'>&#8592 Назад</a></p>";