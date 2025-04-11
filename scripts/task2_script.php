<?php

session_start();

require_once("../database.php");

$user_query = strtolower($_POST["query"]);

if (empty($user_query)) {
    $_SESSION["message"] = "Wprowadź dane!";
    header("location: ../task2.php");
}
else {
    $conn = connect($servername, $username, $pwd, $db_name);

    try {
        $result = query($conn, $user_query . " LIMIT 5");
    }
    catch (mysqli_sql_exception) {
        $_SESSION["message"] = "Błąd składniowy!";

        header("location: ../task2.php");
        die();
    }

    if ($user_query == "select * from kierowcy where idosoby > 5" || $user_query == "select idosoby, imie, nazwisko, nrrejestracyjny from kierowcy where idosoby > 5") {
        $_SESSION["success"] = "Zadanie wykonane pomyślnie! Druga litera to: U";
    }
    else {
        $_SESSION["message"] = "Spróbuj ponownie!";
    }

    $_SESSION["result"] = $result->fetch_all(MYSQLI_ASSOC);

    header("location: ../task2.php");
}