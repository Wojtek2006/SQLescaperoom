<?php

session_start();

require_once("../database.php");

$user_query = strtolower($_POST["query"]);

if (empty($user_query)) {
    $_SESSION["message"] = "Wprowadź dane!";
    header("location: ../task3.php");
}
else {
    $conn = connect($servername, $username, $pwd, $db_name);

    try {
        $result = query($conn, $user_query . " LIMIT 5");
    }
    catch (mysqli_sql_exception) {
        $_SESSION["message"] = "Błąd składniowy!";

        header("location: ../task3.php");
        die();
    }

    if ($user_query == "select * from kierowcy order by nazwisko asc" || $user_query == "select idosoby, imie, nazwisko, nrrejestracyjny from kierowcy order by nazwisko asc") {
        $_SESSION["success"] = "Zadanie wykonane pomyślnie! Trzecia litera to: E";
    }
    else {
        $_SESSION["message"] = "Spróbuj ponownie!";
    }

    $_SESSION["result"] = $result->fetch_all(MYSQLI_ASSOC);

    header("location: ../task3.php");
}