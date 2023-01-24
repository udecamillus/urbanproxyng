<?php
require_once('../app.php');
if (isset($_POST['user_login'])) {

  if ($err = emptyField($_POST)) {
    echo $err;
    die;
  }

  extract($_POST, EXTR_OVERWRITE);
  $user = registered($email_phone, $email_phone);
  if (is_array($user)) {
    if (password_verify($password, $user['password'])) {
      setSession('activeUser', $user);
      echo 'success';
      die;
    } else {
      echo "incorrect password";
      die;
    }
  } else {
    echo "<strong> Email </strong> or <strong> Phone </strong> can not be found. <a href='register'>Click to register</a>";
    die;
  }
}else{
  echo('access blocked');
  die;
}
