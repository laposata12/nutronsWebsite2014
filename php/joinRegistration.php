<?
  include 'spreadsheet.php'; // contains methods to access GoogleDrive and registration code generator

  $student_name = $_POST["STUDENT_NAME"];
  $student_lastname = $POST["STUDENT_LASTNAME"];
  $student_email = $POST["STUDENT_EMAIL"];
  $student_interest = $POST["STUDENT_INTEREST"];
  $email_subject = "Nutrons - Student registration";
  $grade = $POST["STUDENT_GRADE"];
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  
  $student_name = $student_name + " " + $student_lastname;
  
  $message = '<html>
<body>
<h2>Welcome to the NUTRONS!</h2>
<p>Thanks for giving us a try!</p>
<p>We are glad you got this email. From now on we will be sending you information about future meetings and events to this email. </p>
<p>Stay tuned for more information</p>
<br>
<p>Regards,</p>
<p>Nutrons team and Web Admin</p>
</body>
</html>';

  // Writes the data to the Spreadsheet
  $Spreadsheet = new Spreadsheet("nutronsrevere@gmail.com", "peaceleadscrew125");
  if(!empty($_POST)) {
    $Spreadsheet->
    setSpreadsheet("StudentJoin")->
    setWorksheet("studentSignup")->
    add(array("Full_Name" => (string)$student_name, "Grade" => (string)$student_grade, "Email" => (string)$student_email, "Interest_Field" => (string)$student_interest, ));
  }
  // Sends confirmation email to recipient
  mail((string)$student_email, (string)$email_subject, (string)$message, (string)$headers);

  echo file_get_contents("joinSuccessful.html");
?>