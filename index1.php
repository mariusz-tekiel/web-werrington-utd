<!DOCTYPE html>
<html class="no-js" lang="en" prefix="og: http://ogp.me/ns#">

<head>
  <meta charset="utf-8">
  <title>Werrington United</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta http-equiv="Content-language" content="en">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="google" content="notranslate">
  <meta name="description"
    content="Voleyball sport club located in Peterborough. It is gethering half-professional players and fans of this disciplines. ">
  <meta name="keywords" content="volleyball, ball, Peterborugh, Werrington, Utd, sport, volleyball peach, club, league">
  <meta name="theme-color" content="#fff">

  <!-- Open Graph data -->
  <meta property="og:title" content="Volleyball Club" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://www.sporthouse.md/" />
  <meta property="og:image" content="http://www.sporthouse.md/og/example-og.png" />
  <meta property="og:description" content="Volleyball Team" />
  <meta property="og:site_name" content="Werrington Utd" />

  
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="icon" href="img/favicon/favicon-16.png" sizes="16x16" type="image/png">
  <link rel="icon" href="img/favicon/favicon-32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="img/favicon/favicon-48.png" sizes="48x48" type="image/png">
  <link rel="icon" href="img/favicon/favicon-62.png" sizes="62x62" type="image/png">
  <link rel="icon" href="img/favicon/favicon-192.png" sizes="192x192" type="image/png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/scheduleStyle.css">
  <link rel="stylesheet" href="css/galleryStyle.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112771295-1"></script>
  

</head>

<body>
    <h1>OTO DANE:</h1>
    <div>
      <?php 
 
 ////////////////////////////////////////////////////////////
 //Przykład kodu wyświetlającego dane z bazy mysql (tabeli newsletter z
 //osobami zapisanymi na listę dystrybucyjną)
 //Wymagania
 //  1. Zalozona baza mysql na serwerze
 //  2. Tabela newsletter w bazie mysql z polami imie, nazwisko, mail
 ////////////////////////////////////////////////////////////
 
 ////////////////////////////////////////////////////////////
 //Definicje zmiennych
 
 //adres ip serwera mysql który zawiera bazę danych i tabele z osobami 
 //zapisanymi na listę dystrybucyjna newslettera
 $adres_ip_serwera_mysql_z_baza_danych = '127.0.0.1';
 
 //nazwa bazy danych z tabelą newsletter zawierającą osoby zapisane na 
 //listę dystrybucyjna newslettera
 $nazwa_bazy_danych = 'werrington';
 
 //nazwa uzytkownika bazy danych $nazwa_bazy_danych
 $login_bazy_danych = 'root';
 
 //haslo uzytkownika bazy danych $nazwa_bazy_danych
 $haslo_bazy_danych = '';
 
 ////////////////////////////////////////////////////////////
 //Kod programu
 
 //Ustanawiamy połączenie z serwerem mysql
 if ( !mysql_connect($adres_ip_serwera_mysql_z_baza_danych,
 
              $login_bazy_danych,$haslo_bazy_danych) ) {
    echo 'Nie moge polaczyc sie z baza danych';
 	 exit (0);
 }
 //Wybieramy baze danych na serwerze mysql ktora zawiera tabele
 //newsletter gdzie sa dane osob z listy dystrybucyjnej
 if ( !mysql_select_db($nazwa_bazy_danych) ) {
    echo 'Blad otwarcia bazy danych';
 	 exit (0);
 }
 
 //Definiujemy zapytanie pobierające wszystkie wiersze z wszystkimi
 //polami z tabeli newsletter
 $zapytanie = "SELECT * FROM `matches`";
 //wykonujemy zdefiniowane zapytanie na bazie mysql
 $wynik = mysql_query($zapytanie);
 
 //Wyświetlamy w tabeli html dane pobrane 
 //z tabeli newsletter bazy mysql
 //Najpierw definiujemy nagłówek tabeli html
 echo "<p>";
 echo "<table boder=\"1\"><tr>";
 echo "<td bgcolor=\"ffff00\"><strong>UID</strong></td>";
 echo "<td bgcolor=\"ffff99\"><strong>Imie</strong></td>";
 echo "<td bgcolor=\"ffff00\"><strong>Nazwisko</strong></td>";
 echo "<td bgcolor=\"ffff99\"><strong>Mail</strong></td>";
 echo "</tr>";
 //Teraz wyświetlamy kolejne wiersze z tabeli newsletter
 //Pola tabeli newsletter pobieramy odwołując się do ich 
 //numerów jak poniżej:
 //   0 (UID)
 //   1 (Imie)
 //   2 (Nazwisko)
 //   3 (Mail)
 while ( $row = mysql_fetch_row($wynik) ) {
    echo "</tr>";
    echo "<td bgcolor=\"ffff00\">" . $row[0] . "</td>";
    echo "<td bgcolor=\"ffff99\">" . $row[1] . "</td>";
    echo "<td bgcolor=\"ffff00\">" . $row[2] . "</td>";
    echo "<td bgcolor=\"ffff99\">" . $row[3] . "</td>";
    echo "</tr>";
 }
 echo "</table>";
 
 
 //Zamykamy połączenie z bazą danych
 if ( !mysql_close() ) {
    echo 'Nie moge zakonczyc polaczenia z baza danych';
    exit (0);
 }
 
 ?>
    </div>






  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDp5-_DaBgWKUbg34oVgi4QSIKXJ5YC_aI&callback=myMap"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/galleryJS.js"></script>
</body>

</html>
