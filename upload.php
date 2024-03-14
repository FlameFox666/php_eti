<?php

    // 1. Перевірити, чи була натиснута кнопка "submit" на формі
    if(!isset($_POST["submit"])){
        header("Location: index.php");
    }

    // 2. Отримаємо ім'я файлу, який користувач вибрав для завантаження
    $fileName = $_FILES["fileToUpload"]["name"];
    $fileSize = $_FILES["fileToUpload"]["size"];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $fileExtensions = ['txt', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx'];

    // 3. Перевірити, чи файл вже існує в папці "uploads"
    if(file_exists("uploads/" . $fileName)){
        echo "Файл з ім'ям $fileName вже існує.";
    }
    // 4. Перевірити чи це текстовий файл
    elseif(!in_array($fileExtension, $fileExtensions)){
        echo "Цей тип файлу не підтримується.";
    }
    // 5. Перевірити розмір файлу
    elseif($fileSize > 10000000){
        echo "Файл занадто великий. Максимальний розмір файлу - 10MB.";
    }
    // Все ОК, завантажуємо файл
    else{
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/" . $fileName);
        echo "Файл $fileName успішно завантажено.";
    }
?>
    <p>
        <a href="index.php">Go home</a>
    </p>

