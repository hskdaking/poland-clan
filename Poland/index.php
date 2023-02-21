<?php include("db.php");

function truncateString($str, $chars, $to_space, $replacement = "...")
{
  if ($chars > strlen($str)) return $str;

  $str = substr($str, 0, $chars);
  $space_pos = strrpos($str, " ");
  if ($to_space && $space_pos >= 0)
    $str = substr($str, 0, strrpos($str, " "));

  return ($str . $replacement);
}

$monthNames = array(
  "Jan" => "ST",
  "Feb" => "LUT",
  "Mar" => "MRZ",
  "Apr" => "KW",
  "May" => "MAJ",
  "Jun" => "CZ",
  "Jul" => "LIP",
  "Aug" => "SIER",
  "Sep" => "WRZ",
  "Oct" => "PAŹ",
  "Nov" => "LIS",
  "Dec" => "GR",
)

?>
<?php
$getNews = $conn->prepare("SELECT * FROM news ORDER BY id DESC LIMIT 3");
$getNews->execute();
$news = $getNews->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>!!!POLAND!!! Clash Royale</title>
  <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
  <meta name="description" content="Najlepszy klan Clash Royale w Polsce, Top10 Global, topowi gracze, nagrody finansowe oraz miła atmosfera. Wejdź i zasil nasze szeregi już dziś!">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

  <!-- bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />

  <!-- animate on scroll -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script type="text/javascript" src="//translate.google.com/#en/hi/Hello"></script> -->

  <!-- style -->
  <link rel="stylesheet" href="style.css" />

  <style>
    .skiptranslate {
      display: none !important;
    }

    /* Убираем подсветку ссылок */

    .goog-text-highlight {
      background-color: inherit;
      box-shadow: none;
      box-sizing: inherit;
    }

    /* language */

    .language {
      position: fixed;
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
      z-index: 999;
      display: flex;
      flex-direction: column;
    }

    .language__img {
      margin: 2px;
      cursor: pointer;
      opacity: .5;
    }

    .language__img:hover,
    .language__img_active {
      opacity: 1;
    }
  </style>

</head>

<body data-bs-spy="scroll" data-bs-target="#navbarSupportedContent" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true">

  <div class="language">

  </div>

  <!-- ======= Navbar Section ======= -->
  <header>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid text-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item mx-3">
              <a class="nav-link" aria-current="page" href="#hero">Strona główna</a>
            </li>

            <li class="nav-item mx-3">
              <a class="nav-link" href="#about">O nas</a>
            </li>

            <li class="nav-item mx-3">
              <a class="nav-link" href="#news">Aktualności</a>
            </li>

            <li class="nav-item mx-3">
              <a class="nav-link" href="#services">Oferta</a>
            </li>

            <li class="nav-item mx-3">
              <a class="nav-link" href="#history">Historia</a>
            </li>

            <li class="nav-item mx-3">
              <a class="nav-link" href="#leader">Lider</a>
            </li>
          </ul>
          <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></div>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Wybierz Język
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" data-google-lang="pl"><img src="./images/PL.png" alt="PL"> Polski</a></li>
                <li><a class="dropdown-item" data-google-lang="en"><img src="./images/GB.png" alt="EN"> Angielski</a></li>
                <li><a class="dropdown-item" data-google-lang="de"><img src="./images/DE.png" alt="DE"> Niemiecki</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- ======= END Navbar Section ======= -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in">
      <h1>Zasil nasze szeregi już dziś!</h1>
      <p>Dołącz do najlepszego klanu w Polsce!</p>
      <div class="social-links">
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= END Hero Section ======= -->

  <main>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title" data-aos="fade-down" data-aos-delay="100">
          <h2>O Nas</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5" data-aos="fade-right" data-aos-delay="250">
            <picture>
              <img src="./images/king.png" class="img-fluid" alt="Rycerzyk" />
            </picture>
          </div>
          <div class="col-md-6" data-aos="fade-left" data-aos-delay="500">
            <p>
              Dzięki wspólnej grze przez wiele lat stworzyliśmy między sobą
              przyjacielskie relacje. Przez ten czas udało nam się wypracować
              najwyższą pozycję wśród klanów. Jeżeli chcesz mieć stałą ekipę w
              której poczujesz się potrzebny i zrozumiały - serdecznie Cię
              zapraszamy!
            </p>
            <div class="card">
              <div class="card-body">
                <h4>Dlaczego my?</h4>
                <ul class="list-group list-group-flush" width="10rem">
                  <li class="list-group-item">- TOP 1 w Polsce</li>
                  <li class="list-group-item">- TOP 10 Global</li>
                  <li class="list-group-item">- Topowi gracze</li>
                  <li class="list-group-item">- Doświadczona kadra</li>
                  <li class="list-group-item">- Miła atmosfera</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= END About Section ======= -->

    <!-- ======= News Section ======= -->
    <section id="news" class="news">
      <div class="container">
        <div class="section-title" data-aos="zoom-in">
          <h2>Aktualności</h2>
        </div>
        <div class="row">
          <div class="container" id="hanging-icons">
            <div class="row justify-content-center g-4 py-5 row-cols-1 row-cols-lg-3">
              <?php foreach ($news as $key => $data) : ?>
                <?php $data_key = $key + 1; ?>
                <div class="news-container" data-aos="fade-up" data-aos-delay="<?php if ($data_key == 1) : echo "200";
                                                                                elseif ($data_key == 2) : echo "400";
                                                                                elseif ($data_key == 3) : echo "600";
                                                                                endif; ?>">
                  <div class="col d-flex align-items-start news-field <?php if ($data_key == 1 or $data_key == 2) : echo 'br';
                                                                      endif; ?>">
                    <div class="icon border border-warning d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3 text-center align-middle">
                      <span><?= date('d', $data['date']); ?><br><strong><?= $monthNames[date('M', $data['date'])]; ?></strong></span>
                    </div>
                    <div>
                      <h3 class="fs-2"><?= $data['title']; ?></h3>
                      <p><?= truncateString($data['content'], 150, true) . "\n"; ?></p>
                      <?php if (strlen($data['content']) > 150) : ?>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#news<?= $data['id']; ?>">
                          Czytaj Więcej
                        </button>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>

                <div class="modal fade" id="news<?= $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content text-bg-dark">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $data['title']; ?></h1>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <?= $data['content']; ?>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Zamknij</button>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= END News Section ======= -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title" data-aos="zoom-out" data-aos-delay="100">
          <h2>Co oferujemy?</h2>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-4" data-aos="zoom-out-right" data-aos-delay="250">
            <div class="card">
              <div class="card-body">
                <ul class="sci">
                  <li>
                    <a href="#"><i class="bi bi-dpad-fill"></i></a>
                  </li>
                </ul>
                <h4>Turnieje</h4>
                <p>
                  Turnieje w naszym klanie odbywają się w każdy piętnasty
                  dzień miesiąca. Aby wziąć w nim udział każdy uczestnik musi:
                  <span>- być członkiem naszego klanu</span>
                  <span>- spędzić minimum jeden sezon w naszych barwach</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="zoom-in-up" data-aos-delay="500">
            <div class="card">
              <div class="card-body">
                <ul class="sci">
                  <li>
                    <a href="#"><i class="bi bi-trophy-fill"></i></a>
                  </li>
                </ul>
                <h4>Nagrody</h4>
                <p>
                  Jesteśmy jednym z niewielu klanów, który oferuje naszym członkom nagrody pieniężne za zaangażowanie oraz udział w
                  turniejach.
                </p>
                <details class="text-start">
                  <summary>Drabinka klanowa + Ścieżka Legend</summary>
                  <span>Top 1 = 25€</span>
                  <span>Top 2 = 20€</span>
                  <span>Top 3 = 15€</span>
                  <span>Top 4 = 10€</span>
                  <span>Top 5 = 7€</span>
                  <span>Top 6 = 7€</span>
                </details>
                <details class="text-start">
                  <summary>Turniej klanowy</summary>
                  <span>Top 1 = 25€</span>
                  <span>Top 2 = 15€</span>
                  <span>Top 3 = 10€</span>
                  <span>Top 4 = 5€</span>
                  <span>Top 5 = 5€</span>
                  <span>Top 6 = 5€</span>
                </details>
                <p>
                  <strong>Losowanie 1x Pass Royale / sezon</strong>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="zoom-out-left" data-aos-delay="650">
            <div class="card">
              <div class="card-body">
                <ul class="sci">
                  <li>
                    <a href="#"><i class="bi bi-chat-text-fill"></i></a>
                  </li>
                </ul>
                <h4>Stały kontakt</h4>
                <p>
                  Jesteśmy pierwszym klanem, który oferuje szeroki kontakt w
                  social mediach. Możemy się pochwalić:
                </p>
                <span>- własnym discordem</span>
                <span>- stroną internetową www</span>
                <span>- twitterem</span>
                <span>- fanpage'em na facebooku</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= END Services Section ======= -->

    <!-- ======= History Section ======= -->
    <section id="history" class="history">
      <div class="container">
        <div class="section-title" data-aos="zoom-in" data-aos-delay="100">
          <h2>Historia</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4" data-aos="zoom-in" data-aos-delay="250">
            <picture class="align-middle">
              <img src="./images/logo.png" class="img-fluid logo" alt="Logo" />
            </picture>
          </div>
          <div class="col-md-4" data-aos="zoom-out" data-aos-delay="500">
            <p>
              Wszystko zaczęło się w roku 2017, gdzie pierwszym założycielem
              był Maks. Były to czasy, gdzie maksymalnym poziomem kart był 9
              lvl.
            </p>

            <p>
              <strong>!!!Poland!!!</strong> stawiał czoła najlepszym klanom w
              całej grze. Niestety ówczesny lider z powodu braku czasu nie
              mógł już dłużej poświęcać się grze i zrezygnował z
              najważniejszej funkcji. Wtedy pojawił się Pablo Escobar, który
              przejął dowodzenie. Gracz nie tylko o wielkiej ambicji, lecz o
              głowie pełnej pomysłów i marzeń.
            </p>

            <div class="row">
              <p>
                Jednak należy pamiętać, że klan buduje nie tylko lider, ale
                też zaufani co-liderzy, którzy byli od samego początku:
              </p>
              <div class="col-md-6 notranslate">
                <ul class="list-group list-group-flush text-center">
                  <li class="list-group-item">Gregonery</li>
                  <li class="list-group-item">Konrad</li>
                  <li class="list-group-item">Lighting</li>
                  <li class="list-group-item">Gramwgre</li>
                  <li class="list-group-item">ZET</li>
                </ul>
              </div>
              <div class="col-md-6 notranslate">
                <ul class="list-group list-group-flush text-center">
                  <li class="list-group-item">Mikolo</li>
                  <li class="list-group-item">MaTiX</li>
                  <li class="list-group-item">Adamox</li>
                  <li class="list-group-item">HaSeK</li>
                  <li class="list-group-item">Bujan</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="zoom-in" data-aos-delay="650">
            <div class="rc">
              <p>
                Klan rozwijał się bardzo szybko, a już w 2018 roku powstały
                kolejne akademie - POLAND 2, 3, 4 oraz 5. Pablo Escobar nie
                tylko sprawdził się jako lider, ale wyrobił sobie duży
                szacunek wśród wszystkich członków klanów !!!Poland!!!.
              </p>

              <p>
                Przez ponad 5 lat skład się nieco zmienił - w między czasie
                część zrezygnowała z owej funkcji, a kolejni gracze wskoczyli
                na ich miejsce. Zlikwidowaliśmy także nasze akademie oprócz
                !!!Poland!!! 2.
              </p>

              <p class="blockquote">
                | Nie tylko zostaliśmy przyjaciółmi, lecz rodziną. Należy
                pamiętać, że gry łączą a nie dzielą |
              </p>

              <p>
                <strong>!!!Poland!!!</strong> obecnie znajduje się na pierwszym miejscu w
                Polsce oraz TOP 10 na całym świecie. A to jeszcze nie koniec..
                My dopiero się rozkręcamy!
              </p>

              <p>
                Śledźcie nasze social media i wpadajcie na naszego discorda,
                aby dowiedzieć się więcej o naszych planach!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= END History Section ======= -->

    <!-- ======= Leader Section ======= -->
    <section id="leader" class="leader">
      <div class="container">
        <div class="section-title" data-aos="zoom-in" data-aos-delay="100">
          <h2>Lider</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <picture data-aos="zoom-in-up" data-aos-delay="300">
              <img src="./images/pablo.jpg" class="img-fluid" alt="Lider" />
            </picture>
            <figure data-aos="zoom-in-up" data-aos-delay="500">
              <blockquote class="blockquote">
                <small>"Zawsze dążyłem do celu, aby klan był jedną rodziną z miłą
                  atmosferą. Dziś z pełnym szacunkiem mogę powiedzieć, że 6
                  lat spędzone w grze to moja mała cegiełka do tego
                  domu."</small>
              </blockquote>
              <figcaption class="blockquote-footer">Pablo Escobar</figcaption>
            </figure>
            <div class="socials" data-aos="zoom-in-up" data-aos-delay="700">
              <a target="blank" href="https://discord.com/users/890239952149938196"><i class="bi bi-discord"></i></a>
              <a target="blank" href="https://twitter.com/Pablo_EscobarCR"><i class="bi bi-twitter"></i></a>
            </div>
          </div>
          <div class="col-md-4" data-aos="zoom-out-left" data-aos-delay="700">
            <p class="first">
              Cześć jestem Sebastian! Mieszkam w Niemczech od 2010 roku, 
              a mój nick w grze to Pablo Escobar. Mam 32 lata i od 6 lat gram w Clash Royale. 
              Spędzam miło czas oraz poznaję przeróżne osoby z całego świata.
            </p>

            <p>
              Moim zadaniem - jako lidera - jest wspierać i rozwijać klan pod
              każdym możliwym względem. Jesteśmy otwarci na nowych graczy o
              podobnych ambicjach i wszelkich nowych pomysłach.
            </p>

            <p>
              Sponsoruje klan już od blisko roku (miesięcznie ok. 150€),
              dzięki czemu klanowicze mają motywację do gry. Najważniejsze,
              aby każdy członek czuł się u nas dobrze, był aktywny i dążył z
              nami do wspólnego celu - bo w końcu jesteśmy jak jedna, duża,
              internetowa rodzina.
            </p>

            <div class="card">
              <p class="plan">Mój plan na rok 2023</p>
              <span>- Stała pozycja TOP 5 Global klanu</span>
              <span>- Stworzyć więcej turniejów klanowych</span>
              <span>- Poznać wielu nowych, ambitnych graczy</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= END Leader Section ======= -->

    <!-- ======= Footer Section ======= -->
    <footer id="footer" class="footer">
      <div class="container">
        <h5>Klanowe social media</h5>
        <div class="socials">
          <a href="https://discord.gg/KqnUNwatbC" target="_blank"><i class="bi bi-discord"></i></a>
          <a href="https://twitter.com/Poland_Clan" target="_blank"><i class="bi bi-twitter"></i></a>
        </div>
        <div class="copyright">
          © Copyright <span class="notranslate">!!!POLAND!!!</span>. All Rights Reserved
        </div>
        <div class="credits">
          <p>Created and designed by <span><a href="https://www.facebook.com/hskdaking/" target="_blank">Karol Has</a> & <a href="https://www.facebook.com/profile.php?id=100034083832698" target="_blank">Michał Has</a></span></p>
        </div>
      </div>
    </footer>
    <!-- ======= END Footer Section ======= -->
  </main>

  <script src="./main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <script src="google-translate.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>