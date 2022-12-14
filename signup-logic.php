<?php
require 'config/database.php';

// get signup form data if signup button was clicked
if(isset($_POST['submit'])) {
// here 'firstname and post method'-are the name of the input (which is used in form) to get the value that'll passed in
$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$avatar = $_FILES['avatar'];

echo $firstname, $lastname, $username, $email, $createpassword, $confirmpassword;

} else {
  // if button wasn't clicked, bounce back to signup page
  header('location: ' . ROOT_URL . 'signup.php');
  die();
}