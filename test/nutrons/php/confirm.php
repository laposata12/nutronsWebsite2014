<?
include 'spreadsheet.php';

$code = $_POST["CONFIRM_CODE"];
$team_name = $_POST["TEAM_NAME"];

$code = (int)$code - 2014;

$Spreadsheet = new Spreadsheet("cgs.camilogonzalez@gmail.com", "carroloco86");
if(!empty($_POST)) {
  $Spreadsheet->
  setSpreadsheet("BeantownBlitz_2014")->
  setWorksheet("Confirmed_teams")->
  add(array("Team_Number" => (string)$code, "Team_name" => (string)$team_name));
}
?>

<html>
    <head>
        <title>Nutrons 125</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Nutrons team Official Page" />
        <meta name="keywords"    contend="Nutrons,125,Team,Robotics,FRC"/>
        <link rel="shorcut icon" href="img/logofull.png" />
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <style>
            @font-face {font-family: nutronsfont; src: url('fonts/nutrons_font.TTF'), url('fonts/SofachromeRg-Italic.woff');}
            .nutrons_font {font-family: nutronsfont; color: red;}
            .background {
            background: url(img/beantownBlitz/beantownBlitz.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            }
        </style>
    </head>
    <body class="background">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
          </div>
          <div class="col-md-6">
            <center>
                <img style="width: 100%;" src="img/beantownBlitz/logo-beantownblitz.png">
            </center>
          </div>
          <div class="col-md-3">
          </div>
        </div>
        <br>
      </div>
        <div class="container">
          <div class="row">
              <div class="col-md-3">
              </div>
              <div class="col-md-6">
                <div class="well">
                  <center>
                    <h2><strong>Awesome!</strong></h2>
                    <p>You've been successfully registered to the 2014 Beantown Blitz!</p>
                  </center>
                </div>
              </div>
              <div class="col-md-3">
              </div>
          </div>
        </div>

        <div class="container">
            <hr>
            <center>
                <p style="color: white;">Copyright &copy; 2014 Nutrons</p>
            </center>
        </div>
        <!-- JS files -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
