<?php
// Данные для страницы
$sections = [
    'intro' => [
        'title' => 'Введение в Java',
        'content' => '<p class="lead">Java — это высокоуровневый объектно-ориентированный язык программирования, разработанный Sun Microsystems (теперь Oracle). Он создан для того, чтобы быть платформонезависимым и позволяет писать код, который можно выполнять на различных устройствах.</p>
        <p>Java предоставляет такие возможности, как:</p>
        <ul>
            <li><strong>Объектно-Ориентированное Программирование:</strong> Классы и объекты, инкапсуляция, наследование и полиморфизм.</li>
            <li><strong>Платформонезависимость:</strong> Код, написанный на Java, может выполняться на любой платформе, которая поддерживает JVM (Java Virtual Machine).</li>
            <li><strong>Богатая стандартная библиотека:</strong> Широкий набор встроенных классов и методов для выполнения различных задач.</li>
        </ul>'
    ],
    'syntax' => [
        'title' => 'Основной синтаксис Java',
        'content' => '<p>Программа на Java состоит из классов и методов. Основной метод <code>main()</code> является точкой входа в программу. Вот пример самой простой программы на Java:</p>
        <pre class="bg-light p-3 rounded">
<code>public class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Hello, World!");
    }
}
</code>
        </pre>
        <p>Разберем этот код:</p>
        <ul>
            <li><code>public class HelloWorld</code>: Определяет класс с именем <code>HelloWorld</code>.</li>
            <li><code>public static void main(String[] args)</code>: Основной метод, с которого начинается выполнение программы.</li>
            <li><code>System.out.println("Hello, World!");</code>: Выводит строку "Hello, World!" на экран.</li>
        </ul>'
    ],
    'examples' => [
        'title' => 'Примеры кода на Java',
        'content' => '<div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">Пример 1: Основные операции ввода и вывода</h3>
                <p>Этот пример показывает, как выполнять ввод и вывод данных в Java:</p>
                <pre class="bg-light p-3 rounded">
<code>import java.util.Scanner;

public class InputOutputExample {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Введите число: ");
        int number = scanner.nextInt();
        System.out.println("Вы ввели: " + number);
    }
}
</code>
                </pre>
                <p>Объяснение:</p>
                <ul>
                    <li><code>Scanner scanner = new Scanner(System.in);</code>: Создает объект <code>Scanner</code> для ввода данных с клавиатуры.</li>
                    <li><code>int number = scanner.nextInt();</code>: Читает целое число, введенное пользователем, и сохраняет его в переменную <code>number</code>.</li>
                    <li><code>System.out.println("Вы ввели: " + number);</code>: Выводит значение переменной <code>number</code> на экран.</li>
                </ul>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">Пример 2: Простое условие if-else</h3>
                <p>Этот пример демонстрирует использование условных операторов для выполнения различных блоков кода в зависимости от условия:</p>
                <pre class="bg-light p-3 rounded">
<code>public class IfElseExample {
    public static void main(String[] args) {
        int a = 5, b = 10;
        if (a < b) {
            System.out.println("a меньше, чем b");
        } else {
            System.out.println("a не меньше, чем b");
        }
    }
}
</code>
                </pre>
                <p>Объяснение:</p>
                <ul>
                    <li><code>if (a < b)</code>: Проверяет, меньше ли <code>a</code>, чем <code>b</code>.</li>
                    <li><code>System.out.println("a меньше, чем b");</code>: Выполняется, если условие <code>if</code> истинно.</li>
                    <li><code>else</code>: Выполняется, если условие <code>if</code> ложно.</li>
                </ul>
            </div>
        </div>'
    ],
    'resources' => [
        'title' => 'Дополнительные ресурсы',
        'content' => '<ul class="list-group">
            <li class="list-group-item">
                <a href="https://docs.oracle.com/javase/tutorial/" target="_blank">Документация по Java от Oracle</a>
            </li>
            <li class="list-group-item">
                <a href="https://www.w3schools.com/java/" target="_blank">W3Schools — Учебник по Java</a>
            </li>
            <li class="list-group-item">
                <a href="https://www.geeksforgeeks.org/java/" target="_blank">GeeksforGeeks — Java Tutorial</a>
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
    <title>Изучаем Java</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<header class="bg-primary text-white text-center py-4">
    <div class="container">
        <h1 class="display-4">Изучаем программирование Java</h1>
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
