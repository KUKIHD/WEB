<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа № 3 Паттерны проектирования</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background: #35424a;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        .content {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #35424a;
            margin-top: 20px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            margin: 10px 0;
        }
        ul li a {
            text-decoration: none;
            color: #35424a;
            font-weight: bold;
        }
        ul li a:hover {
            color: #e8491d;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background: #35424a;
            color: #ffffff;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Лабораторная работа № 3 Паттерны проектирования</h1>
    </header>
    <div class="content">
        <h1>Одиночка (Singleton)</h1>
        <ul>
            <li><a href="lab3/settings_use.php">Одиночка</a></li>
        </ul>
        
        <h1>Фабричный метод (Factory Method)</h1>
        <ul>
            <li><a href="lab3/factory_use.php">Фабричный метод</a></li>
            <li><a href="lab3/diagramma_FactoryMethod.php">Диаграмма Фабричного метода</a></li>
        </ul>
        
        <h1>Модель-Представление-Контроллер</h1>
        <ul>
            <li><a href="lab3/mvc_use.php">MVC</a></li>
            <li><a href="lab3/diagramma_MVC.php">Диаграмма MVC</a></li>
        </ul>
        
        <h2><a href="index.php">Назад в главное меню</a></h2>
    </div>
    <footer>
        <p>&copy; 2025 Лабораторная работа № 3</p>
    </footer>
</body>
</html>