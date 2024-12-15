<?php
// Данные для страницы
$sections = [
    'intro' => [
        'title' => 'Введение в Go',
        'content' => '<p class="lead">Go (или Golang) — это язык программирования, разработанный Google для создания эффективных и надежных приложений. Он сочетает простоту синтаксиса с мощными возможностями, что делает его популярным для создания серверных и сетевых приложений, а также микросервисов.</p>
        <p>Go предоставляет такие возможности, как:</p>
        <ul>
            <li><strong>Высокая производительность:</strong> Go компилируется в машинный код, обеспечивая скорость выполнения на уровне C и C++.</li>
            <li><strong>Простота и лаконичность:</strong> Легко читаемый и понятный синтаксис без излишних усложнений.</li>
            <li><strong>Параллелизм:</strong> Встроенная поддержка многопоточности с использованием горутин и каналов.</li>
            <li><strong>Сильная типизация:</strong> Помогает избежать ошибок на стадии компиляции.</li>
        </ul>'
    ],
    'syntax' => [
        'title' => 'Основной синтаксис Go',
        'content' => '<p>Программа на Go обычно начинается с объявления пакета и функции <code>main</code>. Вот пример самой простой программы на Go:</p>
        <pre class="bg-light p-3 rounded">
<code>package main

import "fmt"

func main() {
    fmt.Println("Hello, World!")
}
</code>
        </pre>
        <p>Разберем этот код:</p>
        <ul>
            <li><code>package main</code>: Определяет главный пакет, необходимый для выполнения программы.</li>
            <li><code>import "fmt"</code>: Подключает пакет <code>fmt</code> для работы с форматированным выводом.</li>
            <li><code>func main()</code>: Главная функция, с которой начинается выполнение программы.</li>
            <li><code>fmt.Println("Hello, World!")</code>: Выводит строку "Hello, World!" на экран.</li>
        </ul>'
    ],
    'examples' => [
        'title' => 'Примеры кода на Go',
        'content' => '<div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">Пример 1: Основные операции ввода и вывода</h3>
                <p>Этот пример показывает, как выполнять ввод и вывод данных в Go:</p>
                <pre class="bg-light p-3 rounded">
<code>package main

import "fmt"

func main() {
    var input string
    fmt.Print("Введите текст: ")
    fmt.Scanln(&input)
    fmt.Println("Вы ввели:", input)
}
</code>
                </pre>
                <p>Объяснение:</p>
                <ul>
                    <li><code>fmt.Print("Введите текст: ")</code>: Выводит приглашение для ввода текста.</li>
                    <li><code>fmt.Scanln(&input)</code>: Считывает введенную строку и сохраняет ее в переменной <code>input</code>.</li>
                    <li><code>fmt.Println("Вы ввели:", input)</code>: Выводит значение переменной <code>input</code> на экран.</li>
                </ul>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">Пример 2: Условные операторы if-else</h3>
                <p>Этот пример демонстрирует использование условных операторов для выполнения различных блоков кода в зависимости от условия:</p>
                <pre class="bg-light p-3 rounded">
<code>package main

import "fmt"

func main() {
    a := 5
    b := 10
    if a < b {
        fmt.Println("a меньше, чем b")
    } else {
        fmt.Println("a не меньше, чем b")
    }
}
</code>
                </pre>
                <p>Объяснение:</p>
                <ul>
                    <li><code>if a < b</code>: Проверяет, меньше ли <code>a</code>, чем <code>b</code>.</li>
                    <li><code>fmt.Println("a меньше, чем b")</code>: Выполняется, если условие <code>if</code> истинно.</li>
                    <li><code>else</code>: Выполняется, если условие <code>if</code> ложно.</li>
                </ul>
            </div>
        </div>'
    ],
    'resources' => [
        'title' => 'Дополнительные ресурсы',
        'content' => '<ul class="list-group">
            <li class="list-group-item">
                <a href="https://golang.org/doc/" target="_blank">Официальная документация по Go</a>
            </li>
            <li class="list-group-item">
                <a href="https://tour.golang.org/" target="_blank">Tour of Go — Введение в язык Go</a>
            </li>
            <li class="list-group-item">
                <a href="https://gobyexample.com/" target="_blank">Go by Example — Примеры кода на Go</a>
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
    <title>Изучаем Go</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="bg-primary text-white text-center py-4">
    <div class="container">
        <h1 class="display-4">Изучаем программирование на Go</h1>
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
