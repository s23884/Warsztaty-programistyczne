<?php

if ($_COOKIE['login'] == 'zalogowany') ;
else {
    if (isset($_POST['ok'])) {
        $nick = $_POST['nick'];
        $pass = $_POST['pass'];
        if (empty($nick) || empty($pass)) ;
        else {
            if ($nick == LOGIN && $pass == HASLO) {
                $czas = time();
                setcookie("user", "$nick", $czas + 3600);
                setcookie("haslo", "$pass ", $czas + 3600);
                setcookie("login", "zalogowany", $czas + 3600);


        }
    } else {
        echo '<form action="login.php" method="POST">
        Nick: <br />
        <input type="text" name="nick"><br />
        Hasło: <br />
        <input type="password" name="pass"><br />
        <input type="submit" name="ok" value="Zaloguj">
        </form><br/>';
    }
}
?>