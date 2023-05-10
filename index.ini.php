<?php 
    $ip = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "php_przyklad";

    //Zad 1
    // $db = mysqli_connect($ip, $user, $pass, $dbName);
    // if (!$db) die("Nie pykło");

    // $sql = "SELECT * FROM uzytkownicy";
    // $result = mysqli_query($db, $sql);

    // while ($row = mysqli_fetch_row($result)) {
    //     echo "id: " . $row[0] . " nazwa: " . $row[1] . " email: " . $row[2];
    //     echo "<br>";
    // }

    //Zad 2
    // if (isset($_POST['id'])) {
    //     $id = $_POST['id'];

    //     $db = mysqli_connect($ip, $user, $pass, $dbName);
    //     if (!$db) die("Nie pykło") . mysqli_error($db);
    //     $sql = "SELECT id FROM uzytkownicy WHERE id = ?";
    //     $stmt = mysqli_prepare($db, $sql);
    //     mysqli_stmt_bind_param($stmt, "i", $id);
    //     mysqli_stmt_execute($stmt);
    //     mysqli_stmt_bind_result($stmt, $id);
    //     mysqli_stmt_fetch($stmt);

    //     echo "id: " . $id;
    // }

    //zad 3 i 5
    // $db = mysqli_connect($ip, $user, $pass, $dbName);
    // if (!$db) die("Nie pykło") . mysqli_error($db);

    // if (isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['name'])) {
    //     $email = $_POST['email'];
    //     $pass = $_POST['pass'];
    //     $name = $_POST['name'];

    //     $sql = "INSERT INTO uzytkownicy (email, haslo, nazwa) VALUES(?, ?, ?)";
    //     $stmt = mysqli_prepare($db, $sql);
    //     mysqli_stmt_bind_param($stmt, "sss", $email, $pass, $name);
    //     mysqli_stmt_execute($stmt);
    //     if (mysqli_insert_id($db)) echo "Działa";
    // }
    //zad 4
    // $db = mysqli_connect($ip, $user, $pass, $dbName);
    // if (!$db) die("Nie pykło") . mysqli_error($db);

    // if (isset($_POST['id']) && isset($_POST['name'])) {
    //     $name = $_POST['name'];
    //     $id = $_POST['id'];
    //     $sql = "UPDATE uzytkownicy SET nazwa = ? WHERE id = ?";

    //     $stmt = mysqli_prepare($db, $sql);
    //     mysqli_stmt_bind_param($stmt, "si", $name, $id);
    //     mysqli_stmt_execute($stmt);
    //     if (mysqli_affected_rows($db) > 0) {
    //         echo "Działa";
    //     } else echo "nie działa";
    // }
?>