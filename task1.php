<?php

require_once("database.php");

session_start();

$conn = connect($servername, $username, $pwd, $db_name);

?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Escape Room</title>

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<body>

    <main class="container">
        <header>
            <h1><a href="index.php"><span class="sql">SQL</span> Escape Room <i class="fa-solid fa-person-running"></i></a></h1>
        </header>

        <aside class="sidebar">
            <ul class="sidebar_list">
                <li class="sidebar_link"><a href="help.php">Instrukcja</a></li>
                <li class="sidebar_link"><a href="password.php">Zagadka</a></li>
                <li class="sidebar_link"><a href="tables.php">Tabele</a></li>
                <li class="sidebar_link"><a href="task1.php">Zadanie 1</a></li>
                <li class="sidebar_link"><a href="task2.php">Zadanie 2</a></li>
                <li class="sidebar_link"><a href="task3.php">Zadanie 3</a></li>
                <li class="sidebar_link"><a href="task4.php">Zadanie 4</a></li>
                <li class="sidebar_link"><a href="task5.php">Zadanie 5</a></li>
            </ul>
        </aside>

        <section>
            <div class="home_content">
                <h2>Zadanie 1</h2>
                <p>Wprowadź zapytanie, którego wynikiem będą wszystkie kolumny z tabeli kierowcy.</p>
                <form action="scripts/task1_script.php" method="POST">
                    <input type="text" name="query" placeholder="<?php isset($_SESSION["message"]) ? printf($_SESSION["message"]) : printf("Zapytanie");?>">
                </form>

                <?php if (isset($_SESSION["result"])): ?>

                <?php 
                    $result = $_SESSION["result"];
                    $col_names = array_keys($result[0]); 
                ?>

                <table>
                    <thead>
                        <tr>
                <?php foreach($col_names as $col_name): ?>
                            <th><?= $col_name ?></th>
                <?php endforeach ?>
                        </tr>
                    </thead>

                    <tbody>
                <?php foreach($result as $row): ?>
                        <tr>
                <?php foreach($col_names as $col_name): ?>
                            <td><?= $row[$col_name] ?></td>
                <?php endforeach; ?>
                        </tr>
                <?php endforeach; ?>
                    </tbody>
                </table>

                <?php endif; ?>

                <?php if(isset($_SESSION["success"])): ?>
                <p><?= $_SESSION["success"]; ?></p>
                <?php endif; ?>
            </div>
        </section>

        <footer>
            <p>Stworzone przez: Wojtek Jackowiak i Maksymilian Jendraszczak</p>
        </footer>

    </main>



    <script src="https://kit.fontawesome.com/ccb166a5d5.js" crossorigin="anonymous"></script>
</body>

</html>

<?php session_destroy(); ?>