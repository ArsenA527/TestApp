<?php
$users = file_get_contents(__DIR__ . '/includes/log.txt');

if (
  !isset($_POST)
  && !isset($_POST['name'])
  && !isset($_POST['surname'])
  && !isset($_POST['email'])
  && !isset($_POST['password1'])
  && !isset($_POST['password2'])
) exit('No direct script access allowed');


$email = trim(strip_tags($_POST['email']));
$name = trim(strip_tags($_POST['name']));
$surname = trim(strip_tags($_POST['surname']));
$password1 = trim(strip_tags($_POST['password1']));
$password2 = trim(strip_tags($_POST['password2']));

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  exit('Неверный email! Обновите страницу (F5) и укажите правильный адрес');
}

if (!$name) {
  exit('Не указано имя! Обновите страницу (F5) и укажите своё имя');
}

if (!$surname) {
  exit('Не указано фамилия! Обновите страницу (F5) и укажите своё фамилия');
}

if (!$password1) {
  exit('Не указан пароль! Обновите страницу (F5) и укажите своё пароль');
}

if (!$password2) {
  exit('Не указан пароль! Обновите страницу (F5) и укажите своё пароль повторно');
}

if ($password1 != $password2) {
  exit('Пароли не совпадают! Обновите страницу (F5) и укажите одинаковые пароли');
}

if (strpos($users, $email)) {
?>
  <script>
    $('#errorMsg').prop('className', 'error');
  </script>
<?php
} else {
  $user = [
    'name' => $name,
    'email' => $email,
    'id' => uniqid(),
  ];
  $log = print_r($user, true);
  file_put_contents(__DIR__ . '/includes/log.txt', $log . PHP_EOL, FILE_APPEND);
?>
  <script>
    $('#errorMsg').prop('className', 'error hide');
    $('#form').hide('slow');
  </script>
<?php
  echo '<pre>';
  echo 'Поздравляем! Вы зарегистрировались!';
  echo '</pre>';
}
?>
