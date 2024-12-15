<?php
// Данные для страницы
$sections = [
    'intro' => [
        'title' => 'Введение в C#',
        'content' => '<p class="lead">C# — это язык программирования общего назначения, разработанный компанией Microsoft. Он используется для создания различных типов приложений, включая веб-приложения, мобильные приложения и игры. C# известен своей мощной типизацией, поддержкой объектно-ориентированного программирования и тесной интеграцией с платформой .NET.</p>
        <p>C# предоставляет такие возможности, как:</p>
        <ul>
            <li><strong>Сильная типизация:</strong> Помогает предотвратить ошибки на стадии компиляции.</li>
            <li><strong>Объектно-ориентированное программирование:</strong> Поддержка наследования, полиморфизма и инкапсуляции.</li>
            <li><strong>Мощные средства разработки:</strong> Интеграция с Visual Studio и платформой .NET для удобства разработки и отладки.</li>
        </ul>'
    ],
    'syntax' => [
        'title' => 'Основной синтаксис C#',
        'content' => '<p>Программа на C# может быть написана как консольное приложение или как часть более крупного проекта. Вот пример самой простой программы на C#:</p>
        <pre class="bg-light p-3 rounded">
<code>using System;

class Program {
    static void Main() {
        Console.WriteLine("Hello, World!");
    }
}
</code>
        </pre>
        <p>Разберем этот код:</p>
        <ul>
            <li><code>using System;</code>: Подключает пространство имен System, необходимое для работы с базовыми функциями.</li>
            <li><code>class Program</code>: Определяет класс с именем <code>Program</code>.</li>
            <li><code>static void Main()</code>: Главный метод, с которого начинается выполнение программы.</li>
            <li><code>Console.WriteLine("Hello, World!");</code>: Выводит строку "Hello, World!" на экран.</li>
        </ul>'
    ],
    'examples' => [
        'title' => 'Примеры кода на C#',
        'content' => '<div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">Пример 1: Основные операции ввода и вывода</h3>
                <p>Этот пример показывает, как выполнять ввод и вывод данных в C#:</p>
                <pre class="bg-light p-3 rounded">
<code>using System;

class Program {
    static void Main() {
        Console.Write("Введите число: ");
        string input = Console.ReadLine();
        Console.WriteLine("Вы ввели: " + input);
    }
}
</code>
                </pre>
                <p>Объяснение:</p>
                <ul>
                    <li><code>Console.Write("Введите число: ");</code>: Выводит приглашение для ввода числа.</li>
                    <li><code>string input = Console.ReadLine();</code>: Считывает введенную строку и сохраняет ее в переменной <code>input</code>.</li>
                    <li><code>Console.WriteLine("Вы ввели: " + input);</code>: Выводит значение переменной <code>input</code> на экран.</li>
                </ul>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">Пример 2: Простое условие if-else</h3>
                <p>Этот пример демонстрирует использование условных операторов для выполнения различных блоков кода в зависимости от условия:</p>
                <pre class="bg-light p-3 rounded">
<code>using System;

class Program {
    static void Main() {
        int a = 5;
        int b = 10;
        if (a < b) {
            Console.WriteLine("a меньше, чем b");
        } else {
            Console.WriteLine("a не меньше, чем b");
        }
    }
}
</code>
                </pre>
                <p>Объяснение:</p>
                <ul>
                    <li><code>if (a < b)</code>: Проверяет, меньше ли <code>a</code>, чем <code>b</code>.</li>
                    <li><code>Console.WriteLine("a меньше, чем b");</code>: Выполняется, если условие <code>if</code> истинно.</li>
                    <li><code>else</code>: Выполняется, если условие <code>if</code> ложно.</li>
                </ul>
            </div>
        </div>'
    ],
    'resources' => [
        'title' => 'Дополнительные ресурсы',
        'content' => '<ul class="list-group">
            <li class="list-group-item">
                <a href="https://docs.microsoft.com/en-us/dotnet/csharp/" target="_blank">Официальная документация по C#</a>
            </li>
            <li class="list-group-item">
                <a href="https://learn.microsoft.com/en-us/dotnet/csharp/tour-of-csharp/" target="_blank">Microsoft Learn — Введение в C#</a>
            </li>
            <li class="list-group-item">
                <a href="https://www.w3schools.com/cs/" target="_blank">W3Schools — Учебник по C#</a>
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
    <title>Изучаем C#</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<header class="bg-primary text-white text-center py-4">
    <div class="container">
        <h1 class="display-4">Изучаем программирование C#</h1>
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
