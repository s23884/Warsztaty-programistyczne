<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Hotel</title>
</head>
<body>
<form class="Rezerwacja Hotelu" method="post" action="hotel2.php">
    <h1><i class="far fa-calendar-alt"></i>Formularz Rezerwacji Hotelu</h1>
    <div class="fields">

        <label for="Zameldowanie">Zameldowanie</label>
        <div class="field">
            <input id="Zameldowanie" type="date" name="Zameldowanie" required>
        </div>
        <div class="gap"></div>
        <div>
            <label for="Wymeldowanie">Wymeldowanie</label>
            <div class="field">
                <input id="Wymeldowanie" type="date" name="Wymeldowanie" required>
            </div>
        </div>
    </div>
    <div>
        <label for="Imie">Imie</label>
        <div class="field">
            <input id="Imie" type="text" name="Imie" placeholder="Imie" required>
        </div>
    </div>
    <div class="gap"></div>
    <div>
        <label for="Nazwisko">Nazwisko</label>
        <div class="field">
            <i class="fas fa-user"></i>
            <input id="Nazwisko" type="text" name="Nazwisko" placeholder="Nazwisko" required>
        </div>
    </div>
</div>
    <label for="Email">Email</label>
    <div class="field">
        <input id="Email" type="Email" name="Email" placeholder="Twój Email" required>
    </div>
    <label for="Adres">Adres</label>
    <div class="field">
        <input id="email" type="Adres" name="Adres" placeholder="Adres" required>
    </div>
    <label for="Telefon">Telefon</label>
    <div class="field">
        <input id="Telefon" type="tel" name="Telefon" placeholder="Telefon" required>
    </div>
    <div>
        <label for="Dorośli">Dorośli</label>
        <div class="field">
            <select id="Dorośli" name="Dorośli" required>
                <option disabled selected value="">--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select>
        </div>
    </div>
    <div class="gap"></div>
    <div>
        <label for="Dzieci">Dzieci</label>
        <div class="field">
            <select id="Dzieci" name="Dzieci" required>
                <option disabled selected value="">--</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>
    </div>
    </div>
    <label for="Ilość_Pokoi">Ilość Pokoi</label>
    <div class="field">
        <select id="Ilość_Pokoi" name="Ilość_Pokoi" required>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
    </div>
    <label for="Rodzaj_Pokoi">Rodzaj Pokoi</label>
    <div class="field">
        <select id="Rodzaj_Pokoi" name="Rodzaj_Pokoi" required>
            <option disabled selected value="">--</option>
            <option value="Standardowy">Standardowy</option>
            <option value="Pokój Deluxe">Pokój Deluxe</option>
            <option value="Zestaw">Zestaw</option>
        </select>
    </div>
    <input type="submit" name="submit" value="Rezerwuje">
    </div>
</form>
</body>