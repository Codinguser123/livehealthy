<?php
$age=$_POST['age'];
$height=$_POST['height'];
$weight=$_POST['weght'];
$gender=$_POST['gender'];
$exercisepreference=$_POST['exercisepreference'];
$equipment=$_POST['equipment'];
$intensity1=$_POST['intensity1'];
if (empty($age)||empty($weight)||empty($height)||empty($weight)||empty($gender)||empty($exercisepreference)||empty($equipment)||empty($intensity1)){
  echo "Please fill out all fields in the form";
  exit;
}
$email_from= 'gd5151950gd@gmail.com';
$email_subject='Submission';
$email_body="age=$age"
$to='gd5151950gd@gmail.com'
mail($to, $email_body);