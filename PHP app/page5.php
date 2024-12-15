<?php
// Данные для страницы
$sections = [
    'intro' => [
        'title' => 'Введение в C',
        'content' => '<p class="lead">C — это мощный язык программирования, который широко используется для системного программирования, создания операционных систем, а также для разработки программного обеспечения в реальном времени. Он известен своей эффективностью и низкоуровневым управлением памятью.</p>
        <p>Язык C предоставляет такие возможности, как:</p>
        <ul>
            <li><strong>Эффективное управление памятью:</strong> Язык позволяет напрямую работать с памятью, что обеспечивает высокую производительность.</li>
            <li><strong>Низкоуровневое программирование:</strong> C позволяет работать с аппаратными средствами на низком уровне.</li>
            <li><strong>Модульность и повторное использование кода:</strong> Поддержка функций и библиотек для организации кода.</li>
        </ul>'
    ],
    'syntax' => [
        'title' => 'Основной синтаксис C',
        'content' => '<p>Программа на C может быть записана в виде скрипта или модуля. Вот пример самой простой программы на C:</p>
        <pre class="bg-light p-3 rounded">
<code>#include <stdio.h>

int main() {
    printf("Hello, World!\\n");
    return 0;
}
</code>
        </pre>
        <p>Разберем этот код:</p>
        <ul>
            <li><code>#include &lt;stdio.h&gt;</code>: Подключает стандартную библиотеку для ввода и вывода.</li>
            <li><code>int main() { ... }</code>: Главная функция, с которой начинается выполнение программы.</li>
            <li><code>printf("Hello, World!\\n");</code>: Выводит строку "Hello, World!" на экран.</li>
            <li><code>return 0;</code>: Завершает выполнение программы и возвращает ноль.</li>
        </ul>'
    ],
    'examples' => [
        'title' => 'Примеры кода на C',
        'content' => '<div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">Пример 1: Основные операции ввода и вывода</h3>
                <p>Этот пример показывает, как выполнять ввод и вывод данных в C:</p>
                <pre class="bg-light p-3 rounded">
<code>#include <stdio.h>

int main() {
    int number;
    printf("Введите число: ");
    scanf("%d", &number);
    printf("Вы ввели: %d\\n", number);
    return 0;
}
</code>
                </pre>
                <p>Объяснение:</p>
                <ul>
                    <li><code>int number;</code>: Объявляет переменную <code>number</code> для хранения целого числа.</li>
                    <li><code>printf("Введите число: ");</code>: Выводит приглашение для ввода числа.</li>
                    <li><code>scanf("%d", &number);</code>: Считывает введенное число и сохраняет его в переменной <code>number</code>.</li>
                    <li><code>printf("Вы ввели: %d\\n", number);</code>: Выводит значение переменной <code>number</code> на экран.</li>
                </ul>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">Пример 2: Простое условие if-else</h3>
                <p>Этот пример демонстрирует использование условных операторов для выполнения различных блоков кода в зависимости от условия:</p>
                <pre class="bg-light p-3 rounded">
<code>#include <stdio.h>

int main() {
    int a = 5, b = 10;
    if (a < b) {
        printf("a меньше, чем b\\n");
    } else {
        printf("a не меньше, чем b\\n");
    }
    return 0;
}
</code>
                </pre>
                <p>Объяснение:</p>
                <ul>
                    <li><code>if (a < b)</code>: Проверяет, меньше ли <code>a</code>, чем <code>b</code>.</li>
                    <li><code>printf("a меньше, чем b\\n");</code>: Выполняется, если условие <code>if</code> истинно.</li>
                    <li><code>else</code>: Выполняется, если условие <code>if</code> ложно.</li>
                </ul>
            </div>
        </div>'
    ],
    'resources' => [
        'title' => 'Дополнительные ресурсы',
        'content' => '<ul class="list-group">
            <li class="list-group-item">
                <a href="https://en.cppreference.com/w/" target="_blank">CPP Reference — Документация по C</a>
            </li>
            <li class="list-group-item">
                <a href="https://www.learn-c.org/" target="_blank">Learn-C.org — Учебник по C</a>
            </li>
            <li class="list-group-item">
                <a href="https://www.cplusplus.com/doc/tutorial/" target="_blank">CPlusPlus.com — Учебник по C</a>
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
    <title>Изучаем C</title>
    <!-- Подключение Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<header class="bg-primary text-white text-center py-4">
    <div class="container">
        <h1 class="display-4">Изучаем программирование C</h1>
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
