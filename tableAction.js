$(document).ready(function() {
  //funkcja odczytująca kliknięcie w element o id: dodajWiersz
  //i wykonująca akcję dodawania nowego wiersza do tabeli
  $("#dodajWiersz").click(function() {
    //policz ile jest wierszy w tabeli
    var liczba = $("#tabela tr").length;

    //pierwsza komórka
    var f1 = '<td><input type="text" class="medium" name="pozycja[]"/></td>';

    //druga komórka
    var f2 = '<td><input type="text" class="medium" name="typ[]"/></td>';

    //trzecia komórka
    var f3 = '<td><a class="button delete" href="#">Usuń wiersz</a></td>';

    //w tej zmiennej definiujemy nowy wiersz w tabeli
    var row =
      '<tr class="none" id="wiersz-' +
      liczba +
      '"><td>' +
      liczba +
      "</td>" +
      f1 +
      f2 +
      f3 +
      "</tr>";

    //dołącz nowy wiersz na końcu tabeli
    $("#tabela")
      .find("tbody")
      .append(row);

    //usuwamy klasę: none z wiersza oraz animujemy efekt dodawania wiersza
    $("tr.none")
      .removeClass("none")
      .animate({ backgroundColor: "#66B04D", color: "#fff" }, 300, function() {
        $(this).animate({ backgroundColor: "#fff", color: "#000" }, 300);
      });
  });

  //funkcja odczytująca kliknięcie w element o klasie: delete
  //i wykonująca akcję usuwania danego wiersza z tabeli
  //oraz dokonuje przeliczenia numerów wierszy w tabeli
  $(".delete").live("click", function() {
    //znajdź najbliższy wiersz będący elementem nadrzędnym dla linka usuwającego ten wiersz
    //i wykonaj animację
    $(this)
      .closest("tr")
      .animate({ backgroundColor: "#EF3E23", color: "#fff" }, 300, function() {
        //usuń dany wiersz
        $(this).remove();

        //aktualizuj numery pozostałych wierszy
        //dzięki temu gdy usuniemy wiersz w środku tabeli
        //to nie będzie istniała dziura w numeracji wierszy
        $("#tabela > tbody > tr").each(function(i) {
          //wpisz nowy numer wewnątrz pierwszej komórki danego wiersza
          $(this)
            .find("td:first-child")
            .text(i + 1);
        });
      });
  });
});
