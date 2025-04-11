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
                <h2>Instrukcja</h2>
                <p class="help_content">Kwerenda, czyli inaczej zapytanie to ciąg znaków, który przesyłamy do bazy danych, aby uzyskać z niej konkretne dane</p>
                <p class="help_content"><b>SELECT</b> - funkcja służąca do wybierania rekordów z bazy, umożliwia wyświetlenie danych, które napiszemy w zaytaniu; podstawowa funckja SQL</p>
                <p class="help_content"><b>WHERE</b> - funkcja, dzięki której możemy sprecyzować wyszukiwane rekordy np. zamiast wyszukiwać wszystkie biblioteki zamieszczone w bazie możemy dzięki funkcji WHERE wyszukać wszystkie biblioteki, w których jest więcej niż 100 czytelników</p>
                <p class="help_content"><b>ORDER</b> BY - funkcja służąca do sortowania wyświetlonych rekordów; można sortować rosnąco (asc), lub malejąco (desc)</p>
                <p class="help_content"><b>LIKE</b> = funkcja LIKE pozwala jeszcze bardziej doprecyzować szukane rekordy np. możemy wyszukać wszystkie nazwiska zaczynające się na literę K; w funkcji LIKE znak "%" oznacza dowolny znak lub wiele znaków.</p>
                <br>
                <p class="help_content">Poprawna składnia zapytania:</p>
                <p class="help_content">SELECT [kolumna] FROM [baza danych] WHERE [kolumna] LIKE [warunek] ORDER BY [kolumna] [asc/desc] <br>np. </p>
                <p class="help_content">SELECT imie, wyplata FROM biuro WHERE wyplata > 4600 ORDER BY wyplata desc</p>
                <p class="help_content">Powyższe zapytanie pokaże nam imię i wypłatę osób z bazy danych biuro, gdzie wypłata jest większa niż 4600 sortując od najwyższej wypłaty</p>
                <p class="help_content">SELECT imie, nazwisko FROM biuro WHERE imie LIKE = 'Z%'</p>
                <p class="help_content">Powyższe zapytanie pokaże nam imię i nazwisko osób z bazy danych biuro, które mają imię na literę Z.</p>
            </div>
        </section>

        <footer>
            <p>Stworzone przez: Wojtek Jackowiak i Maksymilian Jendraszczak</p>
        </footer>

    </main>



    <script src="https://kit.fontawesome.com/ccb166a5d5.js" crossorigin="anonymous"></script>
</body>

</html>