<!DOCTYPE html>

<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>File upload</title>

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
      <!-- https://fonts.google.com/specimen/Roboto -->
      <link rel="stylesheet" href="css/fontawesome.min.css">
      <!-- https://fontawesome.com/ -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- https://getbootstrap.com/ -->
      <link rel="stylesheet" href="css/templatemo-style.css">
      <!--
  	Product Admin CSS Template
  	https://templatemo.com/tm-524-product-admin
  	-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"> </script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
  </head>

  <body id="reportsPage">
    <div class="" id="home">
      <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
          <a class="navbar-brand" href="file_upload_page.php">
            <h1 class="tm-site-title mb-0" id = 'user_name'></h1>
          </a>
          <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars tm-nav-icon"></i>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto h-100">
                <li class="nav-item">
                  <a class="nav-link" href="userDashboard.php">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard
                    <span class="sr-only">(current)</span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="data.php">
                    <i class="far fa-chart-bar"></i>
                    Data analysis
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link active" href="#">
                    <i class="fas fa-upload"></i>
                    File upload
                    <span class="sr-only">(current)</span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="accounts.html">
                    <i class="far fa-user"></i>
                    Account
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link d-block" href="login.html">
                    <b>Logout</b>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container">

          <br /><br />
          <h1 style='color:white; text-align:center;' id = 'last_upload'></h1>
          <br /><br />

          <h4 style='color:white; text-align:center;'>To upload a new file click the button "Choose File"</h4>
          <br />


          <center>
            <p id="msg"></p>
            <form id="file_form" enctype="multipart/form-data">
              <input style='color:white;' type="file" id="file" name="file" />
              <button id="upload">Upload</button>
            </form>
          </center>
        </div>

  <script src="js/file_upload.js"></script>
  <script src="js/connected_user_name.js"></script>
  <script src="js/user_last_upload.js"></script>


  <script src="js/jquery-3.3.1.min.js"></script>
  <!-- https://jquery.com/download/ -->
  <script src="js/moment.min.js"></script>
  <!-- https://momentjs.com/ -->
  <!-- <script src="js/Chart.min.js"></script> -->
  <!-- http://www.chartjs.org/docs/latest/ -->
  <script src="js/bootstrap.min.js"></script>
  <!-- https://getbootstrap.com/ -->

</body>
</html>
