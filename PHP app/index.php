<?php
// Массив данных для отображения, можно заменить на запрос к базе данных
$items = [
    ['title' => 'Здравствуйте, приветствуем вас на нашем сайте!', 'description' => 'Этот сайт предназначен для тех, кто хочет изучать IT технологии! Приятного изучения!'],
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Учебник по технологиям</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <header class="bg-primary text-white text-center py-4">
        <div class="container">
            <h1 class="display-4">Учебник по технологиям</h1>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page1.php">C++</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page2.php">Java</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page3.php">JavaScript</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page4.php">Python</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page5.php">C</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page6.php">C#</a>
                        <li class="nav-item">
                            <a class="nav-link" href="page7.php">Golang</a>
                        </li>   
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main class="container mt-4">
        <section class="articles">
            <?php foreach ($items as $item): ?>
                <article class="mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2 class="card-title"><?php echo htmlspecialchars($item['title']); ?></h2>
                            <p class="card-text"><?php echo htmlspecialchars($item['description']); ?></p>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </section>
    </main>
</body>
</html>
