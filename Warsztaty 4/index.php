<?php
if($_COOKIE['login'] == 'zalogowany')
{
    echo 'Twój login: '.$_COOKIE['user'].'';
    echo '<br/>';
    echo 'Twoje hasło: '.$_COOKIE['haslo'].'';
    echo '<br/>';
    echo 'Akcja: '.$_COOKIE['login'].'';
    echo '<br/>';
    echo '<a href="logout.php">Wyloguj</a>';
}
else{
    echo 'Niezalogowany!!  <a href="login.php">zaloguj</a>';
}
?>