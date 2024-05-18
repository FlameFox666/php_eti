<?php

function listFiles($loc) {
    // Отримання списку елементів у папці
    $files = scandir($loc);
    
    // Прохід через кожен елемент
    foreach ($files as $file) {
        // Пропускаємо . та .. 
        if ($file != '.' && $file != '..') {
            $path = $loc . "/". $file;
            
            if (is_dir($path)) {
                listFiles($path);
            } else {
                // Виводимо шлях до файлу, якщо це файл
                echo $path . "<br>";
            }
        }
    }
}