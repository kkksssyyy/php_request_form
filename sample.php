<?php
  session_start();

  $error = array();

  if (!empty($_POST['jobCategory'])) {
    $_SESSION['jobCategory'] = $_POST['jobCategory'];
  } elseif (empty($_POST['jobCategory'])) {
    $_SESSION['jobCategory'] = $_POST['jobCategory'];
    $error['jobCategory'] = 'ご希望の職種は必須です';
  }

  if (!empty($_POST['CheckboxGroup2'])) {
    $_SESSION['CheckboxGroup2'] = $_POST['CheckboxGroup2'];
  } elseif (empty($_POST['CheckboxGroup2'])) {
    $_SESSION['CheckboxGroup2'] = $_POST['CheckboxGroup2'];
    $error['CheckboxGroup2'] = 'お問合せ内容は必須です';
  }

  if (!empty($_POST['name1'])) {
    $_SESSION['name1'] = $_POST['name1'];
  } elseif (empty($_POST['name1'])) {
    $_SESSION['name1'] = $_POST['name1'];
    $error['name1'] = '会社名は必須です';
  }

  $_SESSION['url'] = $_POST['url'];

  if (!empty($_POST['name2'])) {
    $_SESSION['name2'] = $_POST['name2'];
  } elseif (empty($_POST['name2'])) {
    $_SESSION['name2'] = $_POST['name2'];
    $error['name2'] = 'お名前は必須です';
  }

  if (!empty($_POST['name3'])) {
    $_SESSION['name3'] = $_POST['name3'];
  } elseif (empty($_POST['name3'])) {
    $_SESSION['name3'] = $_POST['name3'];
    $error['name3'] = 'フリガナは必須です';
  }

  if (!empty($_POST['mail'])) {
    $_SESSION['mail'] = $_POST['mail'];
  } elseif (empty($_POST['mail'])) {
    $_SESSION['mail'] = $_POST['mail'];
    $error['mail'] = 'メールアドレスは必須です';
  }

  if (!empty($_POST['mail_confirmation'])) {
    $_SESSION['mail_confirmation'] = $_POST['mail_confirmation'];
  } elseif (empty($_POST['mail_confirmation'])) {
    $_SESSION['mail_confirmation'] = $_POST['mail_confirmation'];
    $error['mail_confirmation'] = 'メールアドレス（確認）は必須です';
  }

  if (!empty($_POST['tel'])) {
    $_SESSION['tel'] = $_POST['tel'];
  } elseif (empty($_POST['tel'])) {
    $_SESSION['tel'] = $_POST['tel'];
    $error['tel'] = '電話番号は必須です';
  }

  if (!empty($_POST['renraku'])) {
    $_SESSION['renraku'] = $_POST['renraku'];
  } elseif (empty($_POST['renraku'])) {
    $_SESSION['renraku'] = $_POST['renraku'];
    $error['renraku'] = 'ご連絡方法は必須です';
  }

  $_SESSION['kikkake'] = $_POST['kikkake'];

  if (!empty($_POST['request'])) {
    $_SESSION['request'] = $_POST['request'];
  } elseif (empty($_POST['request'])) {
    $_SESSION['request'] = $_POST['request'];
    $error['request'] = 'お問合せ内容は必須です';
  }

  if (!empty($_POST['radio1'])) {
    $_SESSION['radio1'] = $_POST['radio1'];
  } elseif (empty($_POST['radio1'])) {
    $_SESSION['radio1'] = $_POST['radio1'];
    $error['radio1'] = 'プライバシーポリシーに同意して頂けない場合、送信することはできません';
  }

  $_SESSION['errors'] = $error;


  if (empty($_SESSION['errors'])) {
    header('Location: confirm.php');
  } else {
    header('Location: regist.php');
  }
  exit; ?>
