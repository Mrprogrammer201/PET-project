<?php
// Данные для страницы
$sections = [
    'intro' => [
        'title' => 'Введение в Python',
        'content' => '<p class="lead">Python — это высокоуровневый язык программирования, известный своей простотой и читаемостью кода. Он активно используется в веб-разработке, анализе данных, искусственном интеллекте, автоматизации и многих других областях.</p>
        <p>Python предоставляет такие возможности, как:</p>
        <ul>
            <li><strong>Простота и читаемость кода:</strong> Синтаксис Python интуитивно понятен и легко читается.</li>
            <li><strong>Большая стандартная библиотека:</strong> Широкий набор модулей и пакетов для выполнения различных задач.</li>
            <li><strong>Поддержка различных парадигм:</strong> Поддерживает объектно-ориентированное, процедурное и функциональное программирование.</li>
        </ul>'
    ],
    'syntax' => [
        'title' => 'Основной синтаксис Python',
        'content' => '<p>Программа на Python может быть записана в виде скрипта или модуля. Вот пример самой простой программы на Python:</p>
        <pre class="bg-light p-3 rounded">
<code>print("Hello, World!")
</code>
        </pre>
        <p>Разберем этот код:</p>
        <ul>
            <li><code>print("Hello, World!")</code>: Выводит строку "Hello, World!" на экран.</li>
        </ul>'
    ],
    'examples' => [
        'title' => 'Примеры кода на Python',
        'content' => '<div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">Пример 1: Основные операции ввода и вывода</h3>
                <p>Этот пример показывает, как выполнять ввод и вывод данных в Python:</p>
                <pre class="bg-light p-3 rounded">
<code>number = input("Введите число: ")
print("Вы ввели:", number)
</code>
                </pre>
                <p>Объяснение:</p>
                <ul>
                    <li><code>number = input("Введите число: ")</code>: Открывает диалоговое окно для ввода данных пользователем и сохраняет введенное значение в переменную <code>number</code>.</li>
                    <li><code>print("Вы ввели:", number)</code>: Выводит значение переменной <code>number</code> на экран.</li>
                </ul>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">Пример 2: Простое условие if-else</h3>
                <p>Этот пример демонстрирует использование условных операторов для выполнения различных блоков кода в зависимости от условия:</p>
                <pre class="bg-light p-3 rounded">
<code>a = 5
b = 10
if a < b:
    print("a меньше, чем b")
else:
    print("a не меньше, чем b")
</code>
                </pre>
                <p>Объяснение:</p>
                <ul>
                    <li><code>if a < b:</code>: Проверяет, меньше ли <code>a</code>, чем <code>b</code>.</li>
                    <li><code>print("a меньше, чем b")</code>: Выполняется, если условие <code>if</code> истинно.</li>
                    <li><code>else:</code>: Выполняется, если условие <code>if</code> ложно.</li>
                </ul>
            </div>
        </div>'
    ],
    'resources' => [
        'title' => 'Дополнительные ресурсы',
        'content' => '<ul class="list-group">
            <li class="list-group-item">
                <a href="https://docs.python.org/3/tutorial/" target="_blank">Официальная документация по Python</a>
            </li>
            <li class="list-group-item">
                <a href="https://www.learnpython.org/" target="_blank">LearnPython.org — Учебник по Python</a>
            </li>
            <li class="list-group-item">
                <a href="https://www.w3schools.com/python/" target="_blank">W3Schools — Учебник по Python</a>
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
    <title>Изучаем Python</title>
    <!-- Подключение Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<header class="bg-primary text-white text-center py-4">
    <div class="container">
        <h1 class="display-4">Изучаем программирование Python</h1>
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
