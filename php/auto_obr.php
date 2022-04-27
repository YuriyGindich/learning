<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "peablcyy_1207", "concept3", "peablcyy_1207");

if ($mysqli == false) {
  // print("error " . mysqli_connect_error());
  print("error");
} else {
  $email = trim(mb_strtolower($_POST['email']));
  $pass = trim($_POST['pass']);
  

  $result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");

  $result = $result->fetch_assoc();

  if (password_verify($pass, $result['pass'])) {
    echo "ok";
    $_SESSION['name'] = $result['name'];
    $_SESSION['lastname'] = $result['lastname'];
    $_SESSION['email'] = $result['email'];
    $_SESSION['id'] = $result['id'];
  } else {
    echo "user_not_found";
  }
}

// if ($result->num_rows == 0) {
//   // print("exist");

// } else {
//   // $mysqli->query("INSERT INTO `user`(`email`, `pass`) VALUES ('$email', '$pass')");
//   // print("ok");

// }


// echo "Email: $email<br>Пароль: $pass<br>";
