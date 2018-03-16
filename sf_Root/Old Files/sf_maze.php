<!DOCTYPE html>
<?php
require '../../con_test.php';
require '../../databaseConnect.php';

session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] !="")) {

  header ("Location: sf_login.php");

}
/*
begin with php session. the If statement tests for two things: has a user session called login been set? is this session a blank string?
>>!(isset($_SESSION['login'])<< :function isset() checks if a session has been set. the NOT operator means we're saying "IF the session has NOT BEEN SET, then..."
>>$_SESSION['login'] !=""<< :this piece checks to see if the session is NOT a blank string.
>>If the session has been set and has a 1 in it, and if the session variable has a value of 1, then the user is logged in.
>>If the session has NOT been set and the session variable is a blank string, the user is NOT logged in and redirects to the login page.
*/
//PLACE THIS SCRIPT AT THE TOP OF EVERY RESTRICTED MEMBERS-ONLY PAGE
include '/phpFiles/.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunflame Mountain Home Page</title>
    <link rel="stylesheet" href="starterPages_stylesheet.css">
    <meta name="description" content="Sunflame Mountain Maze Game Page">
    <meta name="keywords" content="unicorn, unicorns, pet site, virtual pet, pet game, fantasy, fantasy rpg">
  </head>
  <body class="bigbox">

    <script src = "js/maze.js"></script>

  </body>
</html>
