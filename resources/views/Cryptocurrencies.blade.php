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
  <section class="statistik-mata-uang mt-3 " style="margin-bottom:10px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
        <?php
              $API_KEY = "XT22K4WHGQIY1029";
              $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL,("https://www.alphavantage.co/query?function=DIGITAL_CURRENCY_DAILY&symbol=ETH&market=IDR&apikey=" . $API_KEY));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              $server_output = curl_exec ($ch);
              curl_close ($ch);
              $result = json_decode($server_output);
              $symbol= $result->{'Meta Data'};
              $dataForDaily = $result->{'Time Series (Digital Currency Daily)'};
              $dataForSingleDay = $dataForDaily->{'2021-04-02'};
            ?>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="color: red; margin-bottom:-5px; margin-top: -10px;"><?php echo $symbol->{'2. Digital Currency Code'}?></h4>
              <h8 class="card-title" style="margin-top: -5px;"> <?php echo $symbol->{'3. Digital Currency Name'}?></h8>
              <div class="row" style="margin-bottom:-10px;">
                <div class="col-sm-6">
                  <p>Close</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingleDay->{'4a. close (IDR)'}?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
        <?php
              $API_KEY = "XT22K4WHGQIY1029";
              $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL,("https://www.alphavantage.co/query?function=DIGITAL_CURRENCY_DAILY&symbol=BTC&market=IDR&apikey=" . $API_KEY));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              $server_output = curl_exec ($ch);
              curl_close ($ch);
              $result = json_decode($server_output);
              $symbol= $result->{'Meta Data'};
              $dataForDaily = $result->{'Time Series (Digital Currency Daily)'};
              $dataForSingleDay = $dataForDaily->{'2021-04-02'};
            ?>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="color: red; margin-bottom:-5px; margin-top: -10px;"><?php echo $symbol->{'2. Digital Currency Code'}?></h4>
              <h8 class="card-title" style="margin-top: -5px;"> <?php echo $symbol->{'3. Digital Currency Name'}?></h8>
              <div class="row" style="margin-bottom:-10px;">
                <div class="col-sm-6">
                  <p>Close</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingleDay->{'4a. close (IDR)'}?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
        <?php
              $API_KEY = "XT22K4WHGQIY1029";
              $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL,("https://www.alphavantage.co/query?function=DIGITAL_CURRENCY_DAILY&symbol=ADA&market=IDR&apikey=" . $API_KEY));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              $server_output = curl_exec ($ch);
              curl_close ($ch);
              $result = json_decode($server_output);
              $symbol= $result->{'Meta Data'};
              $dataForDaily = $result->{'Time Series (Digital Currency Daily)'};
              $dataForSingleDay = $dataForDaily->{'2021-04-02'};
            ?>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="color: red; margin-bottom:-5px; margin-top: -10px;"><?php echo $symbol->{'2. Digital Currency Code'}?></h4>
              <h8 class="card-title" style="margin-top: -5px;"> <?php echo $symbol->{'3. Digital Currency Name'}?></h8>
              <div class="row" style="margin-bottom:-10px;">
                <div class="col-sm-6">
                  <p>Close</p>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $dataForSingleDay->{'4a. close (IDR)'}?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <?php
                $API_KEY = "XT22K4WHGQIY1029";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL,("https://www.alphavantage.co/query?function=DIGITAL_CURRENCY_DAILY&symbol=DOT&market=IDR&apikey=" . $API_KEY));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $server_output = curl_exec ($ch);
                curl_close ($ch);
                $result = json_decode($server_output);
                $symbol= $result->{'Meta Data'};
                $dataForDaily = $result->{'Time Series (Digital Currency Daily)'};
                $dataForSingleDay = $dataForDaily->{'2021-04-02'};
              ?>
            <div class="card">
              <div class="card-body">
                <h4 class="card-title" style="color: red; margin-bottom:-5px; margin-top: -10px;"><?php echo $symbol->{'2. Digital Currency Code'}?></h4>
                <h8 class="card-title" style="margin-top: -5px;"> <?php echo $symbol->{'3. Digital Currency Name'}?></h8>
                <div class="row" style="margin-bottom:-10px;">
                  <div class="col-sm-6">
                    <p>Close</p>
                  </div>
                  <div class="col-sm-6">
                    <p><?php echo $dataForSingleDay->{'4a. close (IDR)'}?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section> -->
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
