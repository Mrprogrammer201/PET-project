<?php
// Данные для страницы
$sections = [
    'intro' => [
        'title' => 'Введение в JavaScript',
        'content' => '<p class="lead">JavaScript — это язык программирования, который широко используется для создания интерактивных веб-страниц. Он является неотъемлемой частью веб-разработки и используется как на клиентской, так и на серверной стороне.</p>
        <p>JavaScript предоставляет такие возможности, как:</p>
        <ul>
            <li><strong>Манипуляция DOM:</strong> Изменение содержимого и структуры веб-страниц в реальном времени.</li>
            <li><strong>Асинхронное программирование:</strong> Обработка асинхронных операций с использованием Promise и async/await.</li>
            <li><strong>Модульность:</strong> Использование модулей для организации кода и повторного использования.</li>
        </ul>'
    ],
    'syntax' => [
        'title' => 'Основной синтаксис JavaScript',
        'content' => '<p>Программа на JavaScript может быть включена прямо в HTML-документ или быть внешним файлом. Вот пример самой простой программы на JavaScript:</p>
        <pre class="bg-light p-3 rounded">
<code>console.log("Hello, World!");
</code>
        </pre>
        <p>Разберем этот код:</p>
        <ul>
            <li><code>console.log("Hello, World!");</code>: Выводит строку "Hello, World!" в консоль браузера.</li>
        </ul>'
    ],
    'examples' => [
        'title' => 'Примеры кода на JavaScript',
        'content' => '<div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">Пример 1: Основные операции ввода и вывода</h3>
                <p>Этот пример показывает, как выполнять ввод и вывод данных в JavaScript:</p>
                <pre class="bg-light p-3 rounded">
<code>let number = prompt("Введите число:");
console.log("Вы ввели: " + number);
</code>
                </pre>
                <p>Объяснение:</p>
                <ul>
                    <li><code>let number = prompt("Введите число:");</code>: Открывает диалоговое окно для ввода данных пользователем и сохраняет введенное значение в переменную <code>number</code>.</li>
                    <li><code>console.log("Вы ввели: " + number);</code>: Выводит значение переменной <code>number</code> в консоль.</li>
                </ul>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">Пример 2: Простое условие if-else</h3>
                <p>Этот пример демонстрирует использование условных операторов для выполнения различных блоков кода в зависимости от условия:</p>
                <pre class="bg-light p-3 rounded">
<code>let a = 5, b = 10;
if (a < b) {
    console.log("a меньше, чем b");
} else {
    console.log("a не меньше, чем b");
}
</code>
                </pre>
                <p>Объяснение:</p>
                <ul>
                    <li><code>if (a < b)</code>: Проверяет, меньше ли <code>a</code>, чем <code>b</code>.</li>
                    <li><code>console.log("a меньше, чем b");</code>: Выполняется, если условие <code>if</code> истинно.</li>
                    <li><code>else</code>: Выполняется, если условие <code>if</code> ложно.</li>
                </ul>
            </div>
        </div>'
    ],
    'resources' => [
        'title' => 'Дополнительные ресурсы',
        'content' => '<ul class="list-group">
            <li class="list-group-item">
                <a href="https://developer.mozilla.org/ru/docs/Web/JavaScript/Guide" target="_blank">Документация по JavaScript на MDN</a>
            </li>
            <li class="list-group-item">
                <a href="https://www.w3schools.com/js/" target="_blank">W3Schools — Учебник по JavaScript</a>
            </li>
            <li class="list-group-item">
                <a href="https://www.javascript.info/" target="_blank">JavaScript.info — Учебник по JavaScript</a>
            </li>
        </ul>'
    ]
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изучаем JavaScript</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<header class="bg-primary text-white text-center py-4">
    <div class="container">
        <h1 class="display-4">Изучаем программирование JavaScript</h1>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#intro">Введение</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#syntax">Основной синтаксис</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#examples">Примеры</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#resources">Ресурсы</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<main class="container mt-4">
    <?php foreach ($sections as $id => $section): ?>
        <section id="<?php echo htmlspecialchars($id); ?>" class="mb-5">
            <h2 class="text-primary"><?php echo htmlspecialchars($section['title']); ?></h2>
            <?php echo $section['content']; ?>
        </section>
    <?php endforeach; ?>
</main>
</body>
</html>
