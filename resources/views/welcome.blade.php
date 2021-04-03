<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Heroic Features - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="Frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Frontend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


  <!-- Custom styles for this template -->
  <link href="Frontend/css/heroic-features.css" rel="stylesheet">

</head>

<body>
 
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Yuhaa Finance</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="statistik-mata-uang mt-3">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <?php
              $API_KEY = "XT22K4WHGQIY1029";
              $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL,("https://www.alphavantage.co/query?function=FX_INTRADAY&from_symbol=USD&to_symbol=EUR&interval=5min&outputsize=full&apikey=" . $API_KEY));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              $server_output = curl_exec ($ch);
              curl_close ($ch);
              $result = json_decode($server_output);
              $symbol= $result->{'Meta Data'};
              $dataFor5minute = $result->{'Time Series FX (5min)'};
              $dataForSingle5minute = $dataFor5minute->{'2021-04-02 05:55:00'};
            ?>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="color: red; margin-bottom:-5px; margin-top: -10px;"><?php echo $symbol->{'3. To Symbol'}?></h4>
              <h8 class="card-title" style="margin-top: -5px;">From <?php echo $symbol->{'2. From Symbol'}?></h8>
              <div class="row">
                <div class="col-sm-6">
                  <p>Open</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingle5minute->{'1. open'}?></p>
                </div>
              </div>
              <div class="row" style="margin-top: -10px;">
                <div class="col-sm-6">
                  <p>High</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingle5minute->{'2. high'}?></p>
                </div>
              </div>
              <div class="row " style="margin-top: -10px;">
                <div class="col-sm-6">
                  <p>Low</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingle5minute->{'3. low'}?></p>
                </div>
              </div>
              <div class="row" style="margin-top: -10px;margin-bottom:-10px;">
                <div class="col-sm-6">
                  <p>Close</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingle5minute->{'4. close'}?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <?php
              $API_KEY = "XT22K4WHGQIY1029";
              $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL,("https://www.alphavantage.co/query?function=FX_INTRADAY&from_symbol=USD&to_symbol=JPY&interval=5min&outputsize=full&apikey=" . $API_KEY));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              $server_output = curl_exec ($ch);
              curl_close ($ch);
              $result = json_decode($server_output);
              $symbol= $result->{'Meta Data'};
              $dataFor5minute = $result->{'Time Series FX (5min)'};
              $dataForSingle5minute = $dataFor5minute->{'2021-04-02 05:55:00'};
            ?>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="color: red; margin-bottom:-5px; margin-top: -10px;"><?php echo $symbol->{'3. To Symbol'}?></h4>
              <h8 class="card-title" style="margin-top: -5px;">From <?php echo $symbol->{'2. From Symbol'}?></h8>
              <div class="row">
                <div class="col-sm-6">
                  <p>Open</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingle5minute->{'1. open'}?></p>
                </div>
              </div>
              <div class="row" style="margin-top: -10px;">
                <div class="col-sm-6">
                  <p>High</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingle5minute->{'2. high'}?></p>
                </div>
              </div>
              <div class="row " style="margin-top: -10px;">
                <div class="col-sm-6">
                  <p>Low</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingle5minute->{'3. low'}?></p>
                </div>
              </div>
              <div class="row" style="margin-top: -10px;margin-bottom:-10px;">
                <div class="col-sm-6">
                  <p>Close</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingle5minute->{'4. close'}?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <?php
              $API_KEY = "XT22K4WHGQIY1029";
              $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL,("https://www.alphavantage.co/query?function=FX_INTRADAY&from_symbol=USD&to_symbol=SGD&interval=5min&outputsize=full&apikey=" . $API_KEY));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              $server_output = curl_exec ($ch);
              curl_close ($ch);
              $result = json_decode($server_output);
              $symbol= $result->{'Meta Data'};
              $dataFor5minute = $result->{'Time Series FX (5min)'};
              $dataForSingle5minute = $dataFor5minute->{'2021-04-02 05:55:00'};
            ?>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="color: red; margin-bottom:-5px; margin-top: -10px;"><?php echo $symbol->{'3. To Symbol'}?></h4>
              <h8 class="card-title" style="margin-top: -5px;">From <?php echo $symbol->{'2. From Symbol'}?></h8>
              <div class="row">
                <div class="col-sm-6">
                  <p>Open</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingle5minute->{'1. open'}?></p>
                </div>
              </div>
              <div class="row" style="margin-top: -10px;">
                <div class="col-sm-6">
                  <p>High</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingle5minute->{'2. high'}?></p>
                </div>
              </div>
              <div class="row " style="margin-top: -10px;">
                <div class="col-sm-6">
                  <p>Low</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingle5minute->{'3. low'}?></p>
                </div>
              </div>
              <div class="row" style="margin-top: -10px;margin-bottom:-10px;">
                <div class="col-sm-6">
                  <p>Close</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingle5minute->{'4. close'}?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <?php
              $API_KEY = "XT22K4WHGQIY1029";
              $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL,("https://www.alphavantage.co/query?function=FX_INTRADAY&from_symbol=USD&to_symbol=IDR&interval=5min&outputsize=full&apikey=" . $API_KEY));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              $server_output = curl_exec ($ch);
              curl_close ($ch);
              $result = json_decode($server_output);
              $symbol= $result->{'Meta Data'};
              $dataFor5minute = $result->{'Time Series FX (5min)'};
              $dataForSingle5minute = $dataFor5minute->{'2021-04-02 02:50:00'};
            ?>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="color: red; margin-bottom:-5px; margin-top: -10px;"><?php echo $symbol->{'3. To Symbol'}?></h4>
              <h8 class="card-title" style="margin-top: -5px;">From <?php echo $symbol->{'2. From Symbol'}?></h8>
              <div class="row">
                <div class="col-sm-6">
                  <p>Open</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingle5minute->{'1. open'}?></p>
                </div>
              </div>
              <div class="row" style="margin-top: -10px;">
                <div class="col-sm-6">
                  <p>High</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingle5minute->{'2. high'}?></p>
                </div>
              </div>
              <div class="row " style="margin-top: -10px;">
                <div class="col-sm-6">
                  <p>Low</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingle5minute->{'3. low'}?></p>
                </div>
              </div>
              <div class="row" style="margin-top: -10px;margin-bottom:-10px;">
                <div class="col-sm-6">
                  <p>Close</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingle5minute->{'4. close'}?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <?php
        $API_KEY = "57510c6876004a9dadb50ce4e9c15204";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,("https://newsapi.org/v2/top-headlines?country=id&category=business&apiKey=" . $API_KEY));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        $result = json_decode($server_output);
        $dataArticle= $result->{'articles'};
        $dataImage = $dataArticle[10]->{'urlToImage'};
        // dd($dataArticle);
      ?>
    <header class="jumbotron my-4" style="background-image: url('<?php echo $dataImage?>');">
      <h1 class="display-4" style="color:black;"><?php echo $dataArticle[10]->{'title'}?></h1>
      <p class="lead" style="color:black;"><?php echo $dataArticle[10]->{'description'}?></p>
      <a href="<?php echo $dataArticle[10]->{'url'}?>" class="btn btn-primary btn-lg">More..</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <i class="fab fa-ethereum fa-5x"></i>
            <h4 class="card-title">Cryptocurrencies</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="{{ route('crypto')}}" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
          <i class="fas fa-dollar-sign fa-5x"></i>
            <h4 class="card-title">Currencies</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <i class="fas fa-money-bill-alt fa-5x"></i>
            <h4 class="card-title">Stocks</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <i class="fab fa-ethereum fa-5x"></i>
            <h4 class="card-title">Cryptocurrencies</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-sm-3" style="margin-bottom:10px;">
        <?php
          $kawalcorona = Http::get('https://api.kawalcorona.com/indonesia');
          $dataK = $kawalcorona->Json();
          // echo "Daerah: ".$dataK[0]['name']."<br>";
          // echo "Positif: ".$dataK[0]['positif']."<br>";
          // echo "Sembuh: ".$dataK[0]['sembuh']."<br>";
          // echo "Meninggal: ".$dataK[0]['meninggal'];
        ?>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Corona Indonesia</h5>
            <div class="row">
              <div class="col-sm-6">
                <h7>Daerah:</h7>
              </div>
              <div class="col-sm-6">
                <h7><?php echo $dataK[0]['name']?></h7>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <h7>Positif:</h7>
              </div>
              <div class="col-sm-6">
                <h7><?php echo $dataK[0]['positif']?></h7>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <h7>Sembuh:</h7>
              </div>
              <div class="col-sm-6">
                <h7><?php echo $dataK[0]['sembuh']?></h7>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <h7>Meninggal:</h7>
              </div>
              <div class="col-sm-6">
                <h7><?php echo $dataK[0]['meninggal']?></h7>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3" style="margin-bottom:10px;">
        <div class="card">
          <?php
            $kawalvaksinasi = Http::get('http://vaksincovid19-api.now.sh/api/vaksin');
            $dataV = $kawalvaksinasi->Json();
          ?>
          <div class="card-body">
            <h5 class="card-title">Vaksinasi Indonesia</h5>
            <div class="row">
              <div class="col-sm-6">
                <h9>Target:</h9>
              </div>
              <div class="col-sm-6">
                <h9><?php echo $dataV['totalsasaran']?></h9>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <h9>Vaksinasi 1:</h9>
              </div>
              <div class="col-sm-6">
                <h9><?php echo $dataV['vaksinasi1']?></h9>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <h9>Vaksinasi 2:</h9>
              </div>
              <div class="col-sm-6">
                <h9><?php echo $dataV['vaksinasi2']?></h9>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <h9>Last Update:</h9>
              </div>
              <div class="col-sm-6">
                <h9><?php echo $dataV['lastUpdate']?></h9>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3" style="margin-bottom:10px;">
      <?php 
        $dataG = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal mengakses!");
      ?>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Gempa Terbaru</h5>
            <div class="row">
              <div class="col-sm-6">
                <h9>Tanggal:</h9>
              </div>
              <div class="col-sm-6">
                <h9><?php echo $dataG->gempa->Tanggal?></h9>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <h9>Jam:</h9>
              </div>
              <div class="col-sm-6">
                <h9><?php echo $dataG->gempa->Jam?></h9>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <h9>Magnitudo:</h9>
              </div>
              <div class="col-sm-6">
                <h9><?php echo $dataG->gempa->Magnitude?></h9>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <h9>Kedalaman:</h9>
              </div>
              <div class="col-sm-6">
                <h9><?php echo $dataG->gempa->Kedalaman?></h9>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3" style="margin-bottom:10px;">
        <div class="card">
          <?php 
            $Cuaca = Http::get('https://peta-maritim.bmkg.go.id/public_api/pelabuhan/0010_Soekarno%20-%20Hatta.json');
            $dataC = $Cuaca->Json();
          ?>
          <div class="card-body">
          <h5 class="card-title">Prakiraan Cuaca</h5>
          <div class="row">
              <div class="col-sm-6">
                <h9>Daerah:</h9>
              </div>
              <div class="col-sm-6">
                <h9><?php echo $dataC['name']?></h9>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <h9>Waktu:</h9>
              </div>
              <div class="col-sm-6">
                <h9><?php echo $dataC['data'][0]['valid_from']?></h9>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <h9>Cuaca:</h9>
              </div>
              <div class="col-sm-6">
                <h9><?php echo $dataC['data'][0]['weather']?></h9>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <h9>Wind:</h9>
              </div>
              <div class="col-sm-6">
                <h9><?php echo $dataC['data'][0]['wind_to']?></h9>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="Frontend/vendor/jquery/jquery.min.js"></script>
  <script src="Frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/fae77f8d4c.js" crossorigin="anonymous"></script>

</body>

</html>
