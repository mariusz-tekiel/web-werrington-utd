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
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-112771295-1');
  </script>

</head>

<body>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser.
        Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your
        experience.</p>
    <![endif]-->

  <!-- Navbar section -->
  <nav class="navBar" id="navbar">
    <div class="navbar navbar-expand-md">
      <a href="http://www.sporthouse.md/">
        <img alt="sporthouse" class="logo" src="img/logo.png">
      </a>

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#header">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">Club</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#news">League Table</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#schedule">Matches</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
      
        </ul>
      </div>
    </div>
  </nav>
<<<<<<< HEAD

=======
>>>>>>> FixSlides
  <!-- Header section -->
    <header id="header">
      <div class="mySlides">
        <img alt="Hand-volleyball" class="star" src="img/header-bg/bg_1.jpg">
        <div class="header-text">
          <h1>
            <span class="sp">Werrington United!</span>
          </h1>
          <h3>Volleyball Club</h3>
        </div>
      </div>
      <div class="mySlides">
        <img alt="Hands up" class="star" src="img/header-bg/bg_2.jpg">
        <div class="header-text">
          <h1>
            <span class="sp">Werrington United!</span>
          </h1>
          <h3>Volleyball Club</h3>
    
        </div>
      </div>
      <div class="mySlides">
        <img alt="Volleyball Team" class="star" src="img/header-bg/bg_3.jpg">
        <div class="header-text">
          <h1>
            <span class="sp">Werrington United!</span>
          </h1>
          <h3>Volleyball Club</h3>
        </div>
      </div>
      <div class="mySlides">
        <img alt="legs" class="star" src="img/header-bg/bg_4.jpg">
        <div class="header-text">
          <h1>
            <span class="sp">Werrington United!</span>
          </h1>
          <h3>Volleyball Club</h3>
    
        </div>
      </div>
    </header>
  <!-- About Club -->
  <section class="about" id="about">
      <div class="container">
        <div class="row"> 
          <div class="col-sm-12 col-md-10 col-xl-9 mx-auto d-block">
              <h1>CLUB</h1>
          <?php 
            /* 
              połączenie z bazą sobie darujemy 
              opisane jest ono w tej poradzie 
              http://www.kess.com.pl/?sid=10&pid=32 
            */ 
            $servername = "localhost";
            $username = "";
            $password = "";
            $dbname = "werrington";
//  create connection
              $conn = new mysqli($servername,$username,$password,$dbname);
              //check connection
              if ($conn->connect_error){
                die("Connection failed: ". $conn->connect_error);
              } 

            /* zapytanie do konkretnej tabeli */ 
            $wynik = mysql_query("SELECT * FROM matches") 
            or die('Błąd zapytania'); 

            /* 
            wyświetlamy wyniki, sprawdzamy, 
            czy zapytanie zwróciło wartość większą od 0 
            */ 
            if(mysql_num_rows($wynik) > 0) { 
                /* jeżeli wynik jest pozytywny, to wyświetlamy dane */ 
                echo "<table cellpadding=\"2\" border=1>"; 
                while($r = mysql_fetch_assoc($wynik)) { 
                    echo "<tr>"; 
                    echo "<td>".$r['match_id']."</td>"; 
                    echo "<td>".$r['date']."</td>"; 
                    echo "<td> 
                  <a href=\"index.php?a=del&amp;id={$r['id']}\">DEL</a> 
                  <a href=\"index.php?a=edit&amp;id={$r['id']}\">EDIT</a> 
                  </td>"; 
                    echo "</tr>"; 
                } 
                echo "</table>"; 
            } 

            ?>  

              <p>The Werrington United Team was founded in 2012 by a group of friends in Peterborough. Initially, it was
                  just a pleasant
                  form of spending free time. In 2014, Werrington Utd team played for the first time in the Cambridgeshire
                  League game.</p>
                  <figcaption>
                    <img src="/img/club-sec/werrington-centre.jpg" class="img-fluid" alt="Responsive-image">
                    <figcaption>The first team training room was located in Werrington - zone of Peterborough. That's where the name of team comes from.</figcaption>
<<<<<<< HEAD
                  </figcaption>
                
    
          </div>
        </div>
      </div>
        
      
    
  </section>
  <!-- Coach section -->
  <section class="coach" id="coach">
    <div class="row">
      <div class="col-12 col-md-6 p-0">
        <img alt="..." class="coachImg" src="img/coach1.jpg">
      </div>

      <div class="col-12 col-md-6 p-0">
        <h1>Сюмбели Wiktor
          <span class="hashtag">/</span>
        </h1>
        <div class="coachInfo">
          <ul>
            <li>trener to jest zmiana</li>
            
            
            <li>Bede zmienial materialy
              <span class="hashtag"> / </span>MMA</li>
            <li>~Co nowego Мира в версии Submission Kempo
              <span class="hashtag"> / </span>MMA</li>
            <li>Многократный чемпион и призёр Молдовы по Jiu Jitsu</li>
            <li>Многократный призёр стран СНГ по Jiu Jitsu</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row" style="flex-wrap: wrap-reverse;">
      <div class="col-12 col-md-6 p-0">
        <h1>Китаев Артём
          <span class="hashtag">/</span>
        </h1>
        <div class="coachInfo">
          <ul>
            <li>Тренер клуба SportHouse и Bushin Dojo</li>
            <li>Чёрный пояс (2 дан) по японскому Jiu Jitsu</li>
            <li>Чёрный пояс (1 дан) Kempo
              <span class="hashtag"> / </span>MMA</li>
            <li>Синий пояс по бразильскому Jiu Jitsu</li>
            <li>Многократный чемпион и призёр Молдовы по Jiu Jitsu</li>
            <li>Многократный призёр стран СНГ по Jiu Jitsu</li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-6 p-0">
        <img alt="Китаев Артём" class="coachImg" src="img/coach2.jpg">
      </div>
    </div>
  </section>

  <!-- Citation section -->
  <section class="citation">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-10 col-md-8 col-lg-7 text-left">
          <h1>ПРЕОДОЛЕЙ СВОЙ ПРЕДЕЛ
            <span class="hashtag">/</span>
          </h1>
          <p>Невозможно — это всего лишь громкое слово, за которым прячутся слабые люди.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Galery -->
  <section class="news" id="news">
    <div class="container">
      <h1 class="text-center mb-3">Gallery
        <span class="hashtag">/</span>
      </h1>
      <div id="myCarousel" class="carousel slide" data-interval="false">
        <div class="carousel-inner row mx-auto">
          <div class="carousel-item col-md-4 active">
            <div class="card">
              <img class="card-img-top img-fluid" src="img/news/news8.jpg" alt="Jiu jitsu Children's Day 2018">
              <div class="card-body">
                <h4 class="card-title">Международный день детей!</h4>
                <p class="card-text">В честь праздника спорт клуб Sport House и Bushin Dojo организует прадзник для деток от 4 до 12 лет!</p>
                <p class="card-text">
                  <small class="text-muted">25 мая 2018</small>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item col-md-4">
            <div class="card">
              <img class="card-img-top img-fluid" src="img/news/news7.png" alt="Jiu jitsu championship league 2018">
              <div class="card-body">
                <h4 class="card-title">Запускаем новый проект!</h4>
                <p class="card-text">Будет жарко! Следим за новостями проекта...</p>
                <p class="card-text">
                  <small class="text-muted">7 мая 2018</small>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item col-md-4">
            <div class="card">
              <img class="card-img-top img-fluid" src="img/news/news6.png" alt="Jiu jitsu Kids championship 2018">
              <div class="card-body">
                <h4 class="card-title">Внимание!</h4>
                <p class="card-text">Семинар со звездой спорта, MMA-BJJ-GRAPPLING, Роман Долидзе, 5 дней горячих тренировок. Не упусти свой шанс!</p>
                <p class="card-text">
                  <small class="text-muted">25 марта 2018</small>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item col-md-4">
            <div class="card">
              <img class="card-img-top img-fluid" src="img/news/news5.png" alt="Jiu jitsu Kids championship 2018">
              <div class="card-body">
                <h4 class="card-title">Набор!</h4>
                <p class="card-text">Набор детей от 5 - 10 лет, в детскую группу по Jiu Jitsu!</p>
                <p class="card-text">
                  <small class="text-muted">26 февраля 2018</small>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item col-md-4">
            <div class="card">
              <img class="card-img-top img-fluid" src="img/news/news4.png" alt="Jiu jitsu Kids championship 2018">
              <div class="card-body">
                <h4 class="card-title">Jiu Jitsu Kids Championship</h4>
                <p class="card-text">10 марта 2018 года состоится первый детский турнир по правилам BJJ! Возрастная категория: 5-10 лет.</p>
                <p class="card-text">
                  <small class="text-muted">14 февраля 2018</small>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item col-md-4">
            <div class="card">
              <img class="card-img-top img-fluid" src="img/news/news1.jpg" alt="Monkey Kids Team">
              <div class="card-body">
                <h4 class="card-title">Jiu Jitsu для детей</h4>
                <p class="card-text">Продолжается набор в детскую группу по Jiu jitsu! Набор с 5 лет.</p>
                <p class="card-text">
                  <small class="text-muted">19 января 2018</small>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item col-md-4">
            <div class="card">
              <img class="card-img-top img-fluid" src="img/news/news2.jpeg" alt="Тариф Семейный">
              <div class="card-body">
                <h4 class="card-title">Семейный Тариф</h4>
                <p class="card-text">При покупки более трех абонементов, скидка 25% на каждый абонемент.</p>
                <p class="card-text">
                  <small class="text-muted">13 января 2018</small>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item col-md-4">
            <div class="card">
              <img class="card-img-top img-fluid" src="img/news/news3.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Open Mat!</h4>
                <p class="card-text">10 Февряля, в 14:00 в клубе состоиться открытый ковер для всех желающих.</p>
                <p class="card-text">
                  <small class="text-muted">10 января 2018</small>
                </p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
=======
                  </figcaption>            
              </div>
        </div>
      </div>
  </section>
  
  <!-- League Table-->
  <section class="news" id="news">
    <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-10 col-xl-9 mx-auto d-block">
           <br><br><br>
            <div></div>
        
          </div>
        </div>
      <h1 class="text-center mb-3">LEAGUE TABLE       
      </h1>
       <div>
           <?php
            $con = mysql_connect("localhost","root","","werrington");
            if (!$con)
            {
            die('Could not connect: ' . mysql_error());
            }
            
            mysql_select_db("werrington", $con);
            
            $result = mysql_query("SELECT match_id,date,team_id FROM matches");
            echo $result;
            
            echo "<tr><td>$row['match_id']</td><td>$row['date']</td><td>$row['team_id']</td></tr>";
            while($row = mysql_fetch_array($result)) {
                echo "<tr><td>$row['match_id']</td><td>$row['date']</td><td>$row['team_id']</td></tr>";
            }
            echo '</table>';
            
            mysql_close($con);
          ?>

        </div> 

      <div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
>>>>>>> FixSlides
      </div>
    </div>
  </section>

<<<<<<< HEAD
  <!-- Class Schedule section -->
  <section class="schedule" id="schedule">
    <h1>Расписание Занятий
      <span class="hashtag">/</span>
=======
  <!-- Matches section -->
  <section class="schedule" id="schedule">
    <h1>MATCHES      
>>>>>>> FixSlides
    </h1>

    <div class="rt-routine">
      <table class="tab-content">
        <tbody>
          <tr>
            <th></th>
            <th class="rt-col-title">
<<<<<<< HEAD
              <div>Понедельник</div>
            </th>
            <th class="rt-col-title">
              <div>Вторник</div>
            </th>
            <th class="rt-col-title">
              <div>Среда</div>
            </th>
            <th class="rt-col-title">
              <div>Четверг</div>
            </th>
            <th class="rt-col-title">
              <div>Пятница</div>
            </th>
            <th class="rt-col-title">
              <div>Суббота</div>
=======
              <div>Monday</div>
            </th>
            <th class="rt-col-title">
              <div>Tuesday</div>
            </th>
            <th class="rt-col-title">
              <div>Wednesday</div>
            </th>
            <th class="rt-col-title">
              <div>Thursday</div>
            </th>
            <th class="rt-col-title">
              <div>Friday</div>
            </th>
            <th class="rt-col-title">
              <div>Saturday</div>
>>>>>>> FixSlides
            </th>
          </tr>

          <tr>
            <th class="rt-row-title">09:00</th>
            <td>
              <a class="rt-item rt-item">
<<<<<<< HEAD
                <div class="rt-item-title">Jiu Jitsu Самооборона</div>
=======
                <div class="rt-item-title">Volleyball</div>
>>>>>>> FixSlides
                <div class="rt-item-time">
                  <span>09:00</span>
                  <span>- 11:00</span>
                </div>
              </a>
            </td>
            <td>
              <a class="rt-item rt-item">
<<<<<<< HEAD
                <div class="rt-item-title">Jiu Jitsu Самооборона</div>
=======
                <div class="rt-item-title">Volleyball</div>
>>>>>>> FixSlides
                <div class="rt-item-time">
                  <span>09:00</span>
                  <span>- 11:00</span>
                </div>
              </a>
            </td>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Jiu Jitsu Самооборона</div>
                <div class="rt-item-time">
                  <span>09:00</span>
                  <span>- 11:00</span>
                </div>
              </a>
            </td>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Jiu Jitsu Самооборона</div>
                <div class="rt-item-time">
                  <span>09:00</span>
                  <span>- 11:00</span>
                </div>
              </a>
            </td>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Jiu Jitsu Самооборона</div>
                <div class="rt-item-time">
                  <span>09:00</span>
                  <span>- 11:00</span>
                </div>
              </a>
            </td>
            <td></td>
          </tr>

          <tr>
            <th class="rt-row-title">09:30</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Jiu Jitsu для детей</div>
                <div class="rt-item-time">
                  <span>09:30</span>
                  <span>- 10:30</span>
                </div>
              </a>
            </td>
          </tr>

          <tr>
            <th class="rt-row-title">11:00</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Jiu Jitsu для взрослых</div>
                <div class="rt-item-time">
                  <span>11:00</span>
                  <span>- 12:30</span>
                </div>
              </a>
            </td>
          </tr>

          <tr>
            <th class="rt-row-title">14:00</th>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Айкидо</div>
                <div class="rt-item-time">
                  <span>14:00</span>
                  <span>- 15:30</span>
                </div>
              </a>
            </td>
            <td></td>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Айкидо</div>
                <div class="rt-item-time">
                  <span>14:00</span>
                  <span>- 15:30</span>
                </div>
              </a>
            </td>
            <td></td>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Айкидо</div>
                <div class="rt-item-time">
                  <span>14:00</span>
                  <span>- 15:30</span>
                </div>
              </a>
            </td>
            <td></td>
          </tr>

          <tr>
            <th class="rt-row-title">15:00</th>
            <td></td>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Бокс</div>
                <div class="rt-item-time">
                  <span>15:00</span>
                  <span>- 17:00</span>
                </div>
              </a>
            </td>
            <td></td>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Бокс</div>
                <div class="rt-item-time">
                  <span>15:00</span>
                  <span>- 17:00</span>
                </div>
              </a>
            </td>
            <td></td>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Бокс</div>
                <div class="rt-item-time">
                  <span>15:00</span>
                  <span>- 17:00</span>
                </div>
              </a>
            </td>
          </tr>

          <tr>
            <th class="rt-row-title">17:30</th>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Jiu Jitsu для детей</div>
                <div class="rt-item-time">
                  <span>17:30</span>
                  <span>- 18:30</span>
                </div>
              </a>
            </td>
            <td></td>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Jiu Jitsu для детей</div>
                <div class="rt-item-time">
                  <span>17:30</span>
                  <span>- 18:30</span>
                </div>
              </a>
            </td>
            <td></td>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Jiu Jitsu для детей</div>
                <div class="rt-item-time">
                  <span>17:30</span>
                  <span>- 18:30</span>
                </div>
              </a>
            </td>
            <td></td>
          </tr>

          <tr>
            <th class="rt-row-title">18:00</th>
            <td></td>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Jiu Jitsu для детей</div>
                <div class="rt-item-time">
                  <span>18:00</span>
                  <span>- 19:00</span>
                </div>
              </a>
            </td>
            <td></td>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Jiu Jitsu для детей</div>
                <div class="rt-item-time">
                  <span>18:00</span>
                  <span>- 19:00</span>
                </div>
              </a>
            </td>
            <td></td>
            <td></td>
          </tr>

          <tr>
            <th class="rt-row-title">18:45</th>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Jiu Jitsu для взрослых</div>
                <div class="rt-item-time">
                  <span>18:45</span>
                  <span>- 20:30</span>
                </div>
              </a>
            </td>
            <td></td>
            <td>
              <a class="rt-item rt-item">
<<<<<<< HEAD
                <div class="rt-item-title">Jiu Jitsu для взрослых</div>
=======
                <div class="rt-item-title">Jiu Jitsu dla ludzi</div>
>>>>>>> FixSlides
                <div class="rt-item-time">
                  <span>18:45</span>
                  <span>- 20:30</span>
                </div>
              </a>
            </td>
            <td></td>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Jiu Jitsu для взрослых</div>
                <div class="rt-item-time">
                  <span>18:45</span>
                  <span>- 20:30</span>
                </div>
              </a>
            </td>
            <td></td>
          </tr>

          <tr>
            <th class="rt-row-title">19:00</th>
            <td></td>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Jiu Jitsu для взрослых</div>
                <div class="rt-item-time">
                  <span>19:00</span>
                  <span>- 20:30</span>
                </div>
              </a>
            </td>
            <td></td>
            <td>
              <a class="rt-item rt-item">
                <div class="rt-item-title">Jiu Jitsu для взрослых</div>
                <div class="rt-item-time">
                  <span>19:00</span>
                  <span>- 20:30</span>
                </div>
              </a>
            </td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

<<<<<<< HEAD
  <!-- Pricing section -->
  <section class="pricing" id="pricing">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Абонементы
            <span class="hashtag">/</span>
          </h1>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-11 col-sm-8 col-md-4 m-auto col-lg-4">
          <div class="br text-center">
            <div class="bg-gra">
              <h2 class="font-weight-light">Утренний</h2>
              <p>
                <strong>300 лей/месяц</strong>
              </p>
            </div>

            <div class="bg-gray">
              <p>
                <img alt="sporthouse" height="40" src="img/icons/icon1.png">
              </p>
              <p class="text-bold">
                <strong>Для любителей утренних тренировок</strong>
              </p>
              <p>
                <br>
              </p>
              <p>Посещение спортзала</p>
              <p>с 07:00 до 16:00</p>
            </div>
          </div>
        </div>

        <div class="col-11 col-sm-8  col-md-4 m-auto col-lg-4">
          <div class="br text-center">
            <div class="bg-red">
              <h2 class="font-weight-light">Максимум</h2>
              <p class="text-h2">
                <strong>500 лей/месяц</strong>
              </p>
            </div>

            <div class="bg-gray middle-price">
              <p>
                <img alt="sporthouse" height="40" src="img/icons/icon2.png">
              </p>
              <p class="text-bold">
                <strong>Для настоящих спортсменов</strong>
              </p>
              <p>
                <br>
              </p>
              <p>Занятия Jiu Jitsu</p>
              <p>
                <span class="hashtag">/</span>
              </p>
              <p>Посещение спортзала</p>
              <p>с 07:00 до 23:00</p>
            </div>
          </div>
        </div>

        <div class="col-11 col-sm-8  col-md-4 m-auto col-lg-4">
          <div class="br text-center">
            <div class="bg-gra">
              <h2 class="font-weight-light">Вечерний</h2>
              <p class="text-h2">
                <strong>400 лей/месяц</strong>
              </p>
            </div>

            <div class="bg-gray">
              <p>
                <img alt="sporthouse" height="40" src="img/icons/icon3.png">
              </p>
              <p class="text-bold">
                <strong>Для любителей вечерних тренировок</strong>
              </p>
              <p>
                <br>
              </p>
              <p>Посещение спортзала</p>
              <p>с 16:00 до 23:00</p>
            </div>
          </div>
        </div>

        <div class="action-price">
          <p>
            <span>*</span> Cкидка 50% в спортзал родителям чьи дети занимаются Jiu Jitsu!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery section -->
  <section class="gallery" id="gallery">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Галерея
            <span class="hashtag">/</span>
          </h1>
        </div>
      </div>

      <div class="row justify-content-center mt-4">
        <div class="col-5 col-sm-4 img-container column">
          <img alt="Татами зал" src="img/gallery/g1.jpg" style="width:100%" onclick="openModal();currentSlide(1)">
        </div>

        <div class="col-5 col-sm-4 img-container column">
          <img alt="Тренажерный Зал" src="img/gallery/g2.jpg" style="width:100%" onclick="openModal();currentSlide(2)">
        </div>

        <div class="col-5 col-sm-4 img-container column">
          <img alt="Ученикии Jiu Jitsu" src="img/gallery/g3.jpg" style="width:100%" onclick="openModal();currentSlide(3)">
        </div>

        <div class="col-5 col-sm-4 img-container column">
          <img alt="Ученикии Jiu Jitsu" src="img/gallery/g4.jpg" style="width:100%" onclick="openModal();currentSlide(4)">
        </div>

        <div class="col-5 col-sm-4 img-container column">
          <img alt="Тренажерный Зал" src="img/gallery/g5.jpg" style="width:100%" onclick="openModal();currentSlide(5)">
        </div>

        <div class="col-5 col-sm-4 img-container column">
          <img alt="Тренажерный Зал" src="img/gallery/g6.jpg" style="width:100%" onclick="openModal();currentSlide(6)">
        </div>
      </div>

      <div class="seeMore">
        <a target="_blank" href="https://www.facebook.com/pg/sporthousebest/photos">Смотри больше...</a>
      </div>

      <div id="myModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <div class="modal-content">

          <div class="myGallery">
            <div class="numbertext">1 / 6</div>
            <img alt="Татами Зал" src="img/gallery/g1.jpg" style="width:100%">
          </div>

          <div class="myGallery">
            <div class="numbertext">2 / 6</div>
            <img alt="Тренажерный Зал" src="img/gallery/g2.jpg" style="width:100%">
          </div>

          <div class="myGallery">
            <div class="numbertext">3 / 6</div>
            <img alt="Ученикии Jiu Jitsu" src="img/gallery/g3.jpg" style="width:100%">
          </div>

          <div class="myGallery">
            <div class="numbertext">4 / 6</div>
            <img alt="Ученикии Jiu Jitsu" src="img/gallery/g4.jpg" style="width:100%">
          </div>

          <div class="myGallery">
            <div class="numbertext">5 / 6</div>
            <img alt="Тренажерный Зал" src="img/gallery/g5.jpg" style="width:100%">
          </div>

          <div class="myGallery">
            <div class="numbertext">6 / 6</div>
            <img alt="Тренажерный Зал" src="img/gallery/g6.jpg" style="width:100%">
          </div>

          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
      </div>
    </div>
  </section>

=======
>>>>>>> FixSlides
  <!-- Footer section -->
  <footer id="contact">
    <div class="container">
      <div class="row pt-4">

        <div class="col-12 col-sm-6 col-md-4">
          <div class="cont">
            <h4>Contacts:</h4>

            <div class="contacts">
              <span class="fa fa-phone-square iconSocial"></span>
              <p>+(0044) 11111111</p>
              <p>+(0044) 22222222</p>

              <span class="fa fa-map-marker iconSocial"></span>
              <p>Peterborough, ...</p>

              <span class="fa fa-envelope-o iconSocial"></span>
              <p>
                <a target="_blank" href="mailto:damian.glab@gmail.com">damian.glab@gmail.com</a>
              </p>

              <a target="_blank" href="https://www.facebook.com/werrington_united_volleyball_club_peterborough">
                <span class="fa fa-facebook iconSocial"></span>
              </a>
              <a target="_blank" href="https://www.instagram.com/sport_house_club/">
                <span class="fa fa-instagram iconSocial"></span>
              </a>
            </div>

          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4">
          <div class="oppen-hours">
            <h4>Meetings hours, advertisement</h4>
            ...
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-4">
          <div class="maps" id="googleMap" style="width:100%;height:300px;"></div>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright section -->
  <div class="copyright">
    <p>&#169; Copyright Werrington Utd web administrator
    </p>
  </div>

  <!-- Scripts -->
  <script>
    function myMap() {
      var myCenter = new google.maps.LatLng(47.042466, 28.760946);
      var mapCanvas = document.getElementById("googleMap");
      var mapOptions = {
        center: myCenter,
        zoom: 16,
        streetViewControl: false,
        styles: [{
            "elementType": "geometry",
            "stylers": [{
              "color": "#1d2c4d"
            }]
          },
          {
            "elementType": "labels.text.fill",
            "stylers": [{
              "color": "#8ec3b9"
            }]
          },
          {
            "elementType": "labels.text.stroke",
            "stylers": [{
              "color": "#1a3646"
            }]
          },
          {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [{
              "color": "#304a7d"
            }]
          },
          {
            "featureType": "road",
            "elementType": "labels.text.fill",
            "stylers": [{
              "color": "#98a5be"
            }]
          },
          {
            "featureType": "road",
            "elementType": "labels.text.stroke",
            "stylers": [{
              "color": "#1d2c4d"
            }]
          }
        ]
      };
      var map = new google.maps.Map(mapCanvas, mapOptions);
      var marker = new google.maps.Marker({
        position: myCenter
      });
      marker.setMap(map);
    }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDp5-_DaBgWKUbg34oVgi4QSIKXJ5YC_aI&callback=myMap"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/galleryJS.js"></script>
</body>

</html>
