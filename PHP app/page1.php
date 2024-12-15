<?php
// Данные для страницы
$sections = [
    'intro' => [
        'title' => 'Введение в C++',
        'content' => '<p class="lead">C++ — это мощный язык программирования, который часто используется в системном программировании, разработке игр и реальных симуляциях. Язык был разработан Бьёрном Страуструпом как расширение языка C и добавляет объектно-ориентированное программирование к уже известному синтаксису C.</p>
        <p>C++ предоставляет такие возможности, как:</p>
        <ul>
            <li><strong>Объектно-Ориентированное Программирование:</strong> Классы и объекты, инкапсуляция, наследование и полиморфизм.</li>
            <li><strong>Управление памятью:</strong> Указатели, динамическое выделение и освобождение памяти.</li>
            <li><strong>Шаблоны:</strong> Генерики для создания обобщенного кода.</li>
        </ul>'
    ],
    'syntax' => [
        'title' => 'Основной синтаксис C++',
        'content' => '<p>Программа на C++ состоит из функций и переменных. Основная функция <code>main()</code> является точкой входа в программу. Вот пример самой простой программы на C++:</p>
        <pre class="bg-light p-3 rounded">
<code>#include &lt;iostream&gt;

int main() {
    std::cout &lt;&lt; "Hello, World!" &lt;&lt; std::endl;
    return 0;
}
</code>
        </pre>
        <p>Разберем этот код:</p>
        <ul>
            <li><code>#include &lt;iostream&gt;</code>: Включает библиотеку потоков ввода/вывода, которая необходима для использования <code>std::cout</code>.</li>
            <li><code>int main()</code>: Основная функция программы. С нее начинается выполнение.</li>
            <li><code>std::cout &lt;&lt; "Hello, World!" &lt;&lt; std::endl;</code>: Выводит строку "Hello, World!" в стандартный поток вывода (обычно это экран). <code>std::endl</code> используется для перевода строки.</li>
            <li><code>return 0;</code>: Возвращает 0 из функции <code>main()</code>, что означает успешное завершение программы.</li>
        </ul>'
    ],
    'examples' => [
        'title' => 'Примеры кода на C++',
        'content' => '<div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">Пример 1: Основные операции ввода и вывода</h3>
                <p>Этот пример показывает, как выполнять ввод и вывод данных в C++:</p>
                <pre class="bg-light p-3 rounded">
<code>#include &lt;iostream&gt;

int main() {
    int number;
    std::cout &lt;&lt; "Введите число: ";
    std::cin &gt;&gt; number;
    std::cout &lt;&lt; "Вы ввели: " &lt;&lt; number &lt;&lt; std::endl;
    return 0;
}
</code>
                </pre>
                <p>Объяснение:</p>
                <ul>
                    <li><code>std::cin &gt;&gt; number;</code>: Ожидает ввода от пользователя и сохраняет его в переменную <code>number</code>.</li>
                    <li><code>std::cout &lt;&lt; "Вы ввели: " &lt;&lt; number;</code>: Выводит значение переменной <code>number</code> на экран.</li>
                </ul>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">Пример 2: Простое условие if-else</h3>
                <p>Этот пример демонстрирует использование условных операторов для выполнения различных блоков кода в зависимости от условия:</p>
                <pre class="bg-light p-3 rounded">
<code>#include &lt;iostream&gt;

int main() {
    int a = 5, b = 10;
    if (a &lt; b) {
        std::cout &lt;&lt; "a меньше, чем b" &lt;&lt; std::endl;
    } else {
        std::cout &lt;&lt; "a не меньше, чем b" &lt;&lt; std::endl;
    }
    return 0;
}
</code>
                </pre>
                <p>Объяснение:</p>
                <ul>
                    <li><code>if (a &lt; b)</code>: Проверяет, меньше ли <code>a</code>, чем <code>b</code>.</li>
                    <li><code>std::cout &lt;&lt; "a меньше, чем b";</code>: Выполняется, если условие <code>if</code> истинно.</li>
                    <li><code>else</code>: Выполняется, если условие <code>if</code> ложно.</li>
                </ul>
            </div>
        </div>'
    ],
    'resources' => [
        'title' => 'Дополнительные ресурсы',
        'content' => '<ul class="list-group">
            <li class="list-group-item">
                <a href="https://www.cplusplus.com/doc/tutorial/" target="_blank">Документация C++ на cplusplus.com</a>
            </li>
            <li class="list-group-item">
                <a href="https://www.learncpp.com/" target="_blank">Learn C++ — Полное руководство</a>
            </li>
            <li class="list-group-item">
                <a href="https://www.cppreference.com/" target="_blank">Справочник C++</a>
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
    <title>Изучаем C++</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<header class="bg-primary text-white text-center py-4">
    <div class="container">
        <h1 class="display-4">Изучаем программирование C++</h1>
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
