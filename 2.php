<?php
//method pengecekan username field
function is_username_valid($username){
  if (preg_match('/^[a-z.]{1,8}$/', $username)){
    echo "username valid ";
  } else{
    echo "username tidak valid ";
  }
}
//method pengecekan email field
function is_email_valid($email){
  $emailex = explode("@", $email);
  if (preg_match('/^[a-zA-Z.]{1,4}$/', $emailex[0]) && filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "email valid";
  } else{
    echo "email tidak valid ";
  }
}

is_username_valid("aqil.");
is_email_valid("aqil.");
?>


//telah diuji di https://www.onlinegdb.com/