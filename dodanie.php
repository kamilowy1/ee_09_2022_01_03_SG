<?php
//utworzenie zmiennych 
$server = "localhost";
$user = "root";
$password = "";
$dbname = "ee09";


//stworzenie połączenia 
$conn = mysqli_connect($server,$user,$password,$dbname);

//sprawdzenie połączenia 
if (!$conn) {
die ("Brak połączenia:" .mysqli_error($conn));
}
echo "Połączono z bazą danych <br>";	

//pobranie wartości z formularza 
$numer = $_POST ['numer'];
echo $numer;
$pierwszy = $_POST ['pierwszy'];
echo $pierwszy;
$drugi = $_POST ['drugi'];
echo $drugi;
$trzeci = $_POST ['trzeci'];
echo $trzeci;

//wprowadzenie wartości do bazy danych 
$conn = mysqli_connect($server,$user,$password,$dbname);
$sql = "INSERT INTO ratownicy (id, nrKaretki, ratownik1, ratownik2, ratownik3) VALUES ('[value-1]','$numer','$pierwszy','$drugi','$trzeci')";

//sprawdzenie dołączenia wartości do bazy danych 
if (mysqli_query($conn, $sql)) {
	echo "Poprawnie dodano rekord do bazy";
} else {
 echo "Błąd" .mysqli_error($conn);
}
mysqli_close($conn);




?>