<?php

session_start();

$to = "kyoheisato0410@gmail.com";
$subject = "TEST MAIL";
$message = "Hello!\r\nThis is TEST MAIL.";
$headers = "From: from@sample.co.jp";
 
$me = mail($to, $subject, $message, $headers);
var_dump($me);






define('DB_DATABASE', 'sample_db');
define('DB_USERNAME', 'sample_user');
define('DB_PASSWORD', 'AAABBBccc@999');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);


try {

  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $stmt = $db->prepare("insert into request (jobcategory, checkboxgroup2, name1, url, name2, name3, mail, mail_confirmation, tel, renraku, kikkake, request, radio1) 
          values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->execute([
    mb_convert_encoding($_SESSION['jobCategory'], 'UTF-8'),
    $_SESSION['CheckboxGroup2'],
    $_SESSION['name1'],
    $_SESSION['url'],
    $_SESSION['name2'],
    $_SESSION['name3'],
    $_SESSION['mail'],
    $_SESSION['mail_confirmation'], $_SESSION['tel'], $_SESSION['renraku'], $_SESSION['kikkake'], $_SESSION['request'], $_SESSION['radio1'] ]);
  echo "inserted: " . $db->lastInsertId();



} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}


header('Location: thanks.php');
$_SESSION = array();
exit;
