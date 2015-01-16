<?php
if ($_GET['randomId'] != "Y2Yn6QueYoj0FzwTQj0s5dsfqDcXscuxMU3VdL1jFpKcHxG5YxVxFxiaeR3sqZK1") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
