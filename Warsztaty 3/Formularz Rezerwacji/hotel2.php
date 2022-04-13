<?php
if(isset($_POST['submit'])) {
    $Zameldowanie = $_POST['Zameldowanie'];
    $Wymeldowanie = $_POST['Wymeldowanie'];
    $Imie = $_POST['Imie'];
    $Nazwisko = $_POST['Nazwisko'];
    $Email = $_POST['Email'];
    $Adres = $_POST['Adres'];
    $Telefon = $_POST['Telefon'];
    $Dorośli = $_POST['Dorośli'];
    $Dzieci = $_POST['Dzieci'];
    $Ilość_Pokoi = $_POST['Ilość_Pokoi'];
    $Rodzaj_Pokoi = $_POST['Rodzaj_Pokoi'];
    

    echo "Data Zameldowania : " . $Zameldowanie . "<br>";
    echo "Data Wymeldowania : " . $Wymeldowanie . "<br>";
    echo "Twoje imie : " . $Imie . "<br>";
    echo "Twoje Nazwisko : " . $Nazwisko . "<br>";
    echo "Twój Email : " . $Email . "<br>";
    echo "Twój Adres : " . $Adres . "<br>";
    echo "Twój numer Telefonu : " . $Telefon . "<br>";
    echo "Ilość osób dorosłych : " . $Dorośli . "<br>";
    echo "Ilość dzieci : " . $Dzieci . "<br>";
    echo "Ilość Pokoi : " . $Ilość_Pokoi . "<br>";
    echo "Rodzaj Pokoi : " . $Rodzaj_Pokoi . "<br>";


    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="database.csv"');

    $data = array(
        $_POST['Zameldowanie'],
        $_POST['Wymeldowanie'],
        $_POST['Imie'],
        $_POST['Nazwisko'],
        $_POST['Email'],
        $_POST['Adres'],
        $_POST['Telefon'],
        $_POST['Dorośli'],
        $_POST['Dzieci'],
        $_POST['Ilość_Pokoi'],
        $_POST['Rodzaj_Pokoi']

    );
    $fp = fopen('database.csv', 'a');
        fputcsv($fp, $data);
    fclose($fp);

}
?>
