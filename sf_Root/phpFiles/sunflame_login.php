<?php
//$yourloginName = "";
$yourloginPass = "";
$errorMessage = "";
//these tell php not to print new default values to these html boxes if the page is refreshed

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  //$yourEmail = $_POST['email'];
  $yourloginName = $_POST['username'];
  $yourloginPass = $_POST['password'];
  //$returninglogin = $_POST['returninglogin'];
  //$firstlogin = $_POST['firstlogin'];
  //retrieving user input from textboxes

  $database = "sf_registry";
  $db_found = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database);//creating a new mysqli object passing in our constants from the configure file

  if ($db_found) {
  $SQL = $db_found->prepare('SELECT * FROM tbl_sf_members WHERE l1 = ?');
  $SQL->bind_param('s', $yourloginName);
  $SQL->execute();
  $result = $SQL->get_result();
  //we already checked on our signup page to make sure there's no duplicate entries.
  //check here to make sure that there is exactly 1 result that matches the user input

    if ($result->num_rows == 1) {

      $db_field = $result->fetch_assoc();
      //if there is a result, we want to see the full result array from that field
      //now we want to also check the password that is in this field array, field L2

      if (password_verify($yourloginPass, $db_field['l2'])) {
        //the inbuilt function password_verify checks the validity of the password entered in the form
        //password_verify(the entered password to check, the password hash to check it against)
        //the variable $yourloginPass contains the password entered in the form
        //the password hash we want to check here is contained in the $db_field['L2'] variable, since the L2 field contains our encrypted passwords
        //if the comparison is true and the user input is valid:
        session_start();//starts a php session
        $_SESSION['login']="1";//sets up a session variable that can store values. the name of the session variable is 'login' and is set to a value of 1, for users who successfully loggedin.
        if (isset($_POST['firstlogin'])) {
          header("Location: sf_chooseregion.php");
        } elseif (isset($_POST['returninglogin'])) {
          header("Location: sf_homepage.php");
        }

      } else {
        //if the password was not valid:
        $errorMessage = "Invalid Login";
        session_start();
        $_SESSION['login']="";//placing a blank string in the login variable. if user tries to access restricted page, php checks for blank string. a blank string means the user is not logged in, so they get redirected to login page
      }

    } else {
      $errorMessage = "Username Login Failed";
      //if there is not a result in the database, print this error message.
      //in real login page, login error message should not specify whether it was the username or password that failed.
    }
  }
}

?>
