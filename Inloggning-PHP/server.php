<?php 
 // skriver ut alla variabler som sänts via formulär
 header('Content-type: text/plain');
 
 if ($_POST["username"] === "Valet2022") {
    if ($_POST["password"] === "Moderaterna") {
        echo "Inloggning avklarad";
    }
    else {
        echo "Fel Lösenord";
    }
 }
 else {
    echo "Inloggning misslyckades";
 }