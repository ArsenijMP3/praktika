<?php
// Путь к вашему файлу .accdb
$database_file = "base.accdb";

// Строка подключения (DSN) для драйвера Access
$dsn = "odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=$database_file;";

try {
    // Создаем PDO объект
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Подключение успешно!<br>";

    // Пример запроса
    $stmt = $pdo->query("SELECT * FROM YourTableName");
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        print_r($row);
    }

} catch (PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
}
?>