<?
  include 'spreadsheet.php'; // contains methods to access GoogleDrive and registration code generator

  $team_name = $_POST["TEAM_NAME"];
  $team_number = $_POST["TEAM_NUMBER"];
  $team_email = $_POST["TEAM_EMAIL"];
  $state = $_POST["STATE"];
  $town = $_POST["TOWN"];
  $schools = $_POST["SCHOOLS"];
  $mentor_name = $_POST["MENTOR_NAME"];
  $phone_number = $_POST["PHONE_NUMBER"];
  $email_subject = "Beantown Blitz - Confirmation";
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $confirmation_code = 0;
  $confirmation_code = (int)$team_number + 2014;

  $message = '<html>
<body>
<h2>Welcome to Beantown blitz!</h2>
<p>In order to finish your application, please go to <a href="http://nutrons.com/confirm.html">http://nutrons.com/confirm.html</a> and enter your confirmation number</p>
<p>Confirmation number: </p>' . $confirmation_code . '
</body>
</html>';

  // Writes the data to the Spreadsheet
  $Spreadsheet = new Spreadsheet("cgs.camilogonzalez@gmail.com", "carroloco123");
  if(!empty($_POST)) {
    $Spreadsheet->
    setSpreadsheet("BeantownBlitz_2014")->
    setWorksheet("Registered_teams")->
    add(array("Team_name" => $team_name, (string)"Team_number" => (string)$team_number, "Team_email" => (string)$team_email, "State" => (string)$state, "Town/city" => (string)$town, "Schools" => (string)$schools, "Mentor_name" => (string)$mentor_name, "Phone_number" => (string)$phone_number, "Confirmation_code" => (string)$confirmation_code));
  }
  // Sends confirmation email to recipient
  mail((string)$team_email, (string)$email_subject, (string)$message, (string)$headers);

  echo file_get_contents("success.html");
?>
