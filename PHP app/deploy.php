<?php
// Настройки подключения
$ftp_server = "ftp.example.com"; // Замените на ваш FTP сервер
$ftp_user = "ftp_user"; // Имя пользователя FTP
$ftp_pass = "ftp_password"; // Пароль пользователя FTP

// Установка соединения
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");

// Вход на сервер
if (@ftp_login($ftp_conn, $ftp_user, $ftp_pass)) {
    echo "Connected to $ftp_server as $ftp_user\n";
} else {
    die("Could not log in to $ftp_server\n");
}

// Функция для загрузки файлов и папок рекурсивно
function uploadDirectory($ftp_conn, $local_dir, $remote_dir) {
    // Создаем удаленную директорию, если ее нет
    if (!@ftp_chdir($ftp_conn, $remote_dir)) {
        ftp_mkdir($ftp_conn, $remote_dir);
        ftp_chdir($ftp_conn, $remote_dir);
    }

    // Сканируем файлы в локальной директории
    $files = scandir($local_dir);

    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $local_path = "$local_dir/$file";
            $remote_path = "$remote_dir/$file";

            if (is_dir($local_path)) {
                // Рекурсивно загружаем папки
                uploadDirectory($ftp_conn, $local_path, $remote_path);
            } else {
                // Загружаем файлы
                if (ftp_put($ftp_conn, $remote_path, $local_path, FTP_BINARY)) {
                    echo "Uploaded $local_path to $remote_path\n";
                } else {
                    echo "Error uploading $local_path\n";
                }
            }
        }
    }
}

// Путь к локальной папке проекта и удаленной папке на сервере
$local_dir = __DIR__ . '/project'; // Замените на ваш локальный путь
$remote_dir = "/public_html"; // Замените на путь на сервере

// Запуск загрузки
uploadDirectory($ftp_conn, $local_dir, $remote_dir);

// Закрытие соединения
ftp_close($ftp_conn);
echo "Deployment completed.\n";
?>
